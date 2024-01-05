<?php
class Notification{

    private $conn;

    public function __construct()
    {
        $this->conn = new Database();
    }

    public function addNotif($content){
        $this->conn->query("INSERT INTO notifications (user_id,content) VALUES (:user_id, :content)");
        $this->conn->bind(':user_id',1);
        $this->conn->bind(':content', $content);

        $this->conn->execute();
    }

    public function displayNotifs(){
        $this->conn->query("SELECT * from notifications where user_id = :user_id ORDER BY created_at DESC LIMIT 2");
        $this->conn->bind(':user_id', 1);

        $this->conn->execute();
        return $this->conn->resultSet(PDO::FETCH_ASSOC);
    }
}