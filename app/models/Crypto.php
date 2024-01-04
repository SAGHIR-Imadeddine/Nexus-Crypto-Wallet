<?php
class Crypto
{
    private $apiUrl = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
    private $apiKey = '15353843-1314-4878-86cd-089263e99d1d';

    private $conn;

    public function __construct()
    {
        $this->conn = new Database();
    }

    public function fetchCryptoData()
    {
        $parameters = [
            'start' => '1',
            'limit' => '75',
            'convert' => 'USD'
        ];

        $qs = http_build_query($parameters);
        $request = "{$this->apiUrl}?{$qs}";

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $request,
            CURLOPT_HTTPHEADER => ['Accepts: application/json', "X-CMC_PRO_API_KEY: {$this->apiKey}"],
            CURLOPT_RETURNTRANSFER => 1
        ));

        $response = curl_exec($curl);
        $data = json_decode($response, true);
        curl_close($curl);

        return $data['data'] ?? [];
    }

    public function insertCoin($id,$name, $symbol, $slug, $max_supply){
        $this->conn->query("INSERT INTO coins (id,name,symbol, slug, max_supply) VALUES (:id,:name, :symbol, :slug, :max_supply)");
        $this->conn->bind(':id', $id);
        $this->conn->bind(':name', $name);
        $this->conn->bind(':symbol', $symbol);
        $this->conn->bind(':slug', $slug);
        $this->conn->bind(':max_supply', $max_supply);

        $this->conn->execute();
    }

    public function getCoinByName($name)
    {
        $this->conn->query("SELECT * FROM coins WHERE name = :name");
        $this->conn->bind(':name', $name);
        $this->conn->execute();

        return $this->conn->single(PDO::FETCH_ASSOC);
    }

    public function addToWatchlist($id){
        $this->conn->query("SELECT * FROM watchlist where crypto_id = :id AND user_id = :user");
        $this->conn->bind(':id',$id);
        $this->conn->bind(':user_id',$_SESSION['user_id']);
        $this->conn->execute();
        $row = $this->conn->single(PDO::FETCH_ASSOC);

        if ($row) {
            redirect('Pages/watchlist');
        }else{
            $this->conn->query("INSERT INTO watchlist (user_id,crypto_id) VALUES (:user_id,:id)");
            $this->conn->bind(':id', $id);
            $this->conn->bind(':user_id', $_SESSION['user_id']);
            $this->conn->execute();
        }
    }
    
    public function updateWallet($cryptoId, $qte, $wallet_id){
        $this->conn->query("SELECT * FROM crypto_wallet WHERE crypto_id = ? AND wallet_id = ?");
        $this->conn->execute([$cryptoId,$wallet_id]);
        $row = $this->conn->single(PDO::FETCH_ASSOC);

        if ($row) {
            $this->conn->query("UPDATE crypto_wallet SET qte = qte + ? WHERE crypto_id = ? AND wallet_id = ?");
            $this->conn->execute([$qte, $cryptoId, $wallet_id]);
        } else {
            $this->conn->query("INSERT INTO crypto_wallet (wallet_id,crypto_id, qte) VALUES (?,?, ?)");
            $this->conn->execute([$wallet_id, $cryptoId, $qte]);
        }

        $this->conn->query("UPDATE wallet SET balance = balance + ? WHERE id = ?");
        $this->conn->execute([$qte,$wallet_id]);
    }
}
