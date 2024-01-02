<?php
class Watchlist
{
    private $conn;
    public function __construct()
    {
        $this->conn = new Database();
    }

    public function addToWatchlist($crypto_id)
    {
        try {
            $existingEntry = $this->conn->query_data("SELECT * FROM watchlist WHERE user_id = 2 AND crypto_id = :crypto_id", [
                'crypto_id' => $crypto_id
            ])->fetch();
            if (!$existingEntry) {
                $this->conn->query_data("INSERT INTO watchlist (user_id, crypto_id) VALUES (2, :crypto_id)", [
                    'crypto_id' => $crypto_id
                ]);
                return true;
            }
            return false;
        } catch (PDOException $e) {
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Error: ' . $e->getMessage()]);
            return false;
        }
    }
    

    public function getCryptoData($crypto_id)
    {
    }

    public function removeCrypto()
    {
    }

    public function editList()
    {
    }
}
