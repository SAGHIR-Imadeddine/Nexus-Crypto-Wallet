<?php
class Transaction extends Controller{
private $cryptoModel;
private $transaction;
private $user;
private $wallet;
public function __construct() {
    $this->cryptoModel = $this->model('Crypto');
     $this->transaction =$this->model('transact');
     $this->user=$this->model('user');
     $this->wallet=$this->model('wallet');
}
public function Buy_sell_page()
{
    $cryptoData = $this->cryptoModel->fetchCryptoData();
    $data=
    [
        'cryptos'=>$cryptoData,
        'alertbuy' => '',
        'alertsell'=>'',
        'alertsend'=>'',
    ];
  
    $this->view('transactions/Buy_sell_page',$data);
    
}
/**************buy transac************* */
public function add_transac()
{ 
    
    $data = [
        'cryptoid' => $_POST['cryptoid'],
        'coin' => $_POST['coin'],
        'amount' => $_POST['amount'],
        'cryptoamount' => $_POST['cryptoamount'],
        'type_transac'=>'buy'
    ];
    $this->transaction->buy_transac($data);
    $this->wallet->add_to_wallet($data);
    echo "<script>alert('TRANSACTION DONE');</script>";
    $this->Buy_sell_page();
    
}
 public function sell_transac(){
    
    $data = [
        'cryptoid' => $_POST['cryptoid'],
        'cryptoamount' => $_POST['coin_amount'],
        'type_transac'=>'sell'
    ];
    // check if i have the amount 
    $result = $this->wallet->wallet_sell($data);
    if($result){
        $this->transaction->sell_transac($data);
        
        echo "<script>alert('TRANSACTION DONE');</script>";
    }else{
        echo "<script>alert('You don\'t have this amount in your wallet');</script>";
    }
    $this->Buy_sell_page();
    
 }
public function send_transac(){

    // $coin=$this->wallet->check_Qte($_POST['cryptoid']);
    // $quantite=$coin->qte;
   
    if(!is_numeric($_POST['email'])){
     $receiver=$this->user->check_email_or_nexusID($_POST['email']);
     $_POST['email']=$receiver->id;
    }
    $data = [
        'cryptoid' => $_POST['cryptoid'],
        'cryptoamount' => $_POST['coin_amount'],
        'nexusid' => $_POST['email'],
        'type_transac'=>'send'
    ];
    $result = $this->wallet->wallet_sell($data);
    if($result){
    $this->transaction->send_coin($data);
    $this->wallet->add_amount_to_wallet_receiver($data); 
    echo "<script>alert('TRANSACTION DONE');</script>";
}else{
    echo "<script>alert('You don\'t have this amount in your wallet');</script>";
}
    $this->Buy_sell_page();
}
}
?>