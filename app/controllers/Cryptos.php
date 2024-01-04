<?php
class Cryptos extends Controller
{
    private $cryptoModel;
    public $cryptoData;

    public function __construct() {
        $this->cryptoModel = $this->model('Crypto');
    }

    public function index()
    {
        $_SESSION['user_id'] = 1;
        $cryptoData = $this->cryptoModel->fetchCryptoData();
        foreach ($cryptoData as $crypto) {
            $existingCoin = $this->cryptoModel->getCoinByName($crypto['name']);

            if (!$existingCoin) {
                $this->cryptoModel->insertCoin($crypto['id'], $crypto['name'], $crypto['symbol'], $crypto['slug'], $crypto['max_supply']);
            }
        }
        $this->view('market/index',$cryptoData);
    
    }

    public function buyCrypto(){
        $wallet_id = $_SESSION['wallet_id'];
        $crypto_id = $_POST['crypto_id'];
        $qte = $_POST['qte'];

        $this->cryptoModel->updateWallet($crypto_id, $qte, $wallet_id);

        redirect('Cryptos/index');
    }

    public function addToWatchlist($id){
        $this->cryptoModel->addToWatchlist($id);
        redirect('Pages/watchlist');

    }
}
