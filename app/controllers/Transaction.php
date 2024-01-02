<?php
class Transaction extends Controller{
private $cryptoModel;
private $transaction;
public function __construct() {
    $this->cryptoModel = $this->model('Crypto');
    // $this->transaction =$this->model('transact');
}
public function Buy_sell_page()
{
    $cryptoData = $this->cryptoModel->fetchCryptoData();
   
    // var_dump($cryptoData);
    // die();
    $this->view('transactions/Buy_sell_page',$cryptoData);
}
public function add_transac()
{ 
    // var_dump($_POST);
    // die();
    $data = [
        'cryptoid' => $_POST['cryptoid'],
        'coin' => $_POST['coin'],
        'amount' => $_POST['amount'],
        'cryptoamount' => $_POST['cryptoamount']
    ];
    
    
  
    // $cryptoData = $this->cryptoModel->fetchCryptoData();
    // var_dump($cryptoData);
    // die();
    // $this->view('transactions/Buy_sell_page',$cryptoData);
}

}

?>