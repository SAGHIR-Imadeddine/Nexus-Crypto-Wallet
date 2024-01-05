<?php
class Wallet {
    private $conn;

    public function __construct()
    {
        $this->conn = new Database;
    }
    public function check_Qte($crypto_id){
        $this->conn->query("SELECT qte,if(qte>0,true,false) from wallet where user_id=:user_id AND crypto_id=:crypto_id");
        $this->conn->bind(':user_id',1);
        $this->conn->bind(':crypto_id', $crypto_id);
        $this->conn->execute();
        return $this->conn->single();
    }
    
    public function add_to_wallet($data){
        $this->conn->query("SELECT qte,if(qte>0,true,false) from wallet where user_id=:user_id AND crypto_id=:crypto_id");
        $this->conn->bind(':user_id',1);
        $this->conn->bind(':crypto_id', $data['cryptoid']);
        $this->conn->execute();
        $row=$this->conn->rowCount();
        if($row){
        $this->conn->query("UPDATE  wallet (user_id,crypto_id,qte) VALUES (:user_id,:crypto_id,:qte)");
        }else{
            $this->conn->query("INSERT INTO wallet (user_id,crypto_id,qte) VALUES (:user_id,:crypto_id,:qte)"); 
        }
        $this->conn->bind(':user_id', 1);
        $this->conn->bind(':crypto_id', $data['cryptoid']);
        $this->conn->bind(':qte', $data['cryptoamount']);
        $this->conn->execute();
    }
}