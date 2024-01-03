<?php
class Watchlist
{
    private $conn;
    public function __construct()
    {
        $this->conn = new Database();
    }

    public function addToWatchlist($user_id, $crypto_id)
    {
        try {
            $existingEntry = $this->conn->query_data("SELECT * FROM watchlist WHERE user_id = :user_id AND crypto_id = :crypto_id", [
                'user_id' => $user_id,
                'crypto_id' => $crypto_id
            ])->fetch();
    
            if (!$existingEntry) {
                $this->conn->query_data("INSERT INTO watchlist (user_id, crypto_id) VALUES (:user_id, :crypto_id)", [
                    'user_id' => $user_id,
                    'crypto_id' => $crypto_id
                ]);
                return true;
            }
    
            return false;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }
    
    public function getUserWatchlist($user_id, $cryptoData)
    {
        $sql = "SELECT * FROM watchlist WHERE user_id = :user_id";
        $data = ['user_id' => $user_id];
        $result = $this->conn->query_data($sql, $data)->fetchAll(PDO::FETCH_ASSOC);
    
        $watchlistData = [];
        foreach ($result as $watchlistItem) {
            $cryptoDataItem = array_filter($cryptoData, function ($crypto) use ($watchlistItem) {
                return $crypto['id'] == $watchlistItem['crypto_id'];
            });
    
            if (!empty($cryptoDataItem)) {
                $watchlistData[] = reset($cryptoDataItem);
            }
        }
    
        return $watchlistData;
    }
    

    public function removeCrypto($user_id, $crypto_id)
    {
        try {
            $this->conn->query_data("DELETE FROM watchlist WHERE user_id = :user_id AND crypto_id = :crypto_id", [
                'user_id' => $user_id,
                'crypto_id' => $crypto_id
            ]);

            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }

}
