<?php
class Cryptos extends Controller
{
    private $cryptoModel;
    private $notifModel;
    public $cryptoData;

    public function __construct() {
        $this->cryptoModel = $this->model('Crypto');
        $this->notifModel = $this->model('Notification');
    }

    public function index()
    {
        $_SESSION['user_id'] = 1;
        $cryptoData = $this->cryptoModel->fetchCryptoData();
        $notifications = $this->notifModel->displayNotifs();
        $data =[
            'cryptoData'=> $cryptoData,
            'notifications' => $notifications

        ];
        foreach ($cryptoData as $crypto) {
            $existingCoin = $this->cryptoModel->getCoinById($crypto['id']);

            if (!$existingCoin) {
                $this->cryptoModel->insertCoin($crypto['id'], $crypto['name'], $crypto['symbol'], $crypto['slug'], $crypto['max_supply']);
            }
        }
        $this->view('market/index',$data);
    
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
