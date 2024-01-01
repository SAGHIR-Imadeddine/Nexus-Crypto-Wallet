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
}
