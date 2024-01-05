<?php
class Transaction extends Controller{

private $notifModel;
private $cryptoModel;
private $transaction;
public function __construct() {
    $this->cryptoModel = $this->model('Crypto');
    $this->transaction =$this->model('transact');
    $this->notifModel = $this->model('Notification');

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
        'cryptoamount' => $_POST['cryptoamount'],
        'type_transac'=>'buy'
    ];

    $content = '';
    $this->transaction->buy_transac($data);
    $this->notifModel->addNotification($content);

  
    // $cryptoData = $this->cryptoModel->fetchCryptoData();
    // var_dump($cryptoData);
    // die();
    // $this->view('transactions/Buy_sell_page',$cryptoData);
}
 public function sell_transac(){
    //   var_dump($_POST);
    // die();
    $data = [
        'cryptoid' => $_POST['cryptoid'],
        'cryptoamount' => $_POST['coin_amount'],
        'type_transac'=>'sell'
    ];
    $this->transaction->sell_transac($data);
 }
}

?>