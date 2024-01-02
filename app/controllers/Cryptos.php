<?php
class Cryptos extends Controller
{
    private $cryptoModel;
    public function __construct() {
        $this->cryptoModel = $this->model('Crypto');
    }

    public function index()
    {
        $cryptoData = $this->cryptoModel->fetchCryptoData();
        $this->view('market/index',$cryptoData);
    }

    public function buyCrypto(){
        $wallet_id = $_SESSION['wallet_id'];
        $crypto_id = $_POST['crypto_id'];
        $qte = $_POST['qte'];

        $this->cryptoModel->updateWallet($crypto_id, $qte, $wallet_id);

        redirect('Cryptos/index');
    }
}
