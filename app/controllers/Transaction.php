<?php
class Transaction extends Controller{
private $cryptoModel;
private $transaction;
private $user;
public function __construct() {
    $this->cryptoModel = $this->model('Crypto');
     $this->transaction =$this->model('transact');
     $this->user=$this->model('user');
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
    $this->transaction->buy_transac($data);
    
  
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
public function send_transac(){
    
    if(!is_numeric($_POST['email'])){
     $receiver=$this->user->check_email_or_nexusID($_POST['email']);
     $_POST['email']=$receiver->id;
    }
    // var_dump($_POST);
    // die();
    $data = [
        'cryptoid' => $_POST['cryptoid'],
        'coin_amount' => $_POST['coin_amount'],
        'nexusid' => $_POST['email'],
        'type_transac'=>'send'
    ];
    $this->transaction->send_coin($data);
    
}
}
?>