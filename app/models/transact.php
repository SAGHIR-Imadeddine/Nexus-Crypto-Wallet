<?php
class transact {
    private $conn;

    public function __construct()
    {
        $this->conn = new Database;
    }
    public function buy_transac($data){
        $this->conn->query("INSERT INTO transactions (sender,crypto_id,amount,transaction_type) VALUES (:sender,:crypto_id,:amount,:transaction_type)");
        $this->conn->bind(':sender', 1);
        $this->conn->bind(':crypto_id', $data['cryptoid']);
        $this->conn->bind(':amount', $data['cryptoamount']);
        $this->conn->bind(':transaction_type', $data['type_transac']);
      
        $this->conn->execute();
    }
    public function sell_transac($data){
        $this->conn->query("INSERT INTO transactions (sender,crypto_id,amount,transaction_type) VALUES (:sender,:crypto_id,:amount,:transaction_type)");
        $this->conn->bind(':sender', 1);
        $this->conn->bind(':crypto_id', $data['cryptoid']);
        $this->conn->bind(':amount', $data['cryptoamount']);
        $this->conn->bind(':transaction_type', $data['type_transac']);
      
        $this->conn->execute();
    }
}