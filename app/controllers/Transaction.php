<?php
class Transaction extends Controller
{
    private $notifModel;

    private $cryptoModel;
    private $transaction;
    private $user;
    private $wallet;
    public function __construct()
    {
        $this->cryptoModel = $this->model('Crypto');
        $this->transaction = $this->model('transact');
        $this->notifModel = $this->model('Notification');
        $cryptoData = $this->cryptoModel->fetchCryptoData();


        $this->view('transactions/Buy_sell_page', $cryptoData);
    }
    /**************buy transac************* */
    public function Buy_sell_page()
    {
        $cryptoData = $this->cryptoModel->fetchCryptoData();

        $this->view('transactions/Buy_sell_page', $cryptoData);
    }
    /**************buy transac************* */
    public function add_transac()
    {

        $data = [
            'cryptoid' => $_POST['cryptoid'],
            'coin' => $_POST['coin'],
            'amount' => $_POST['amount'],
            'cryptoamount' => $_POST['cryptoamount'],
            'type_transac' => 'buy'
        ];
        $cryptoName = $this->cryptoModel->getCoinById($data['cryptoid']);
        $content = "You've bought " . $data['amount'] . " of " . $cryptoName->name;

        $this->transaction->buy_transac($data);
        $this->wallet->add_to_wallet($data);
        $this->notifModel->addNotif($content);
        redirect('Cryptos/index');
        echo '<script>document.getElementById("badge").style.display = "block"</script>';
    }
    public function sell_transac()
    {

        $data = [
            'cryptoid' => $_POST['cryptoid'],
            'cryptoamount' => $_POST['coin_amount'],
            'type_transac' => 'sell'
        ];
        // check if i have the amount 
        $result = $this->wallet->wallet_sell($data);
        if ($result) {
            $this->transaction->sell_transac($data);
            $cryptoName = $this->cryptoModel->getCoinById($data['cryptoid']);

            $content = "You've sold " . $data['cryptoamount'] . " of " . $cryptoName->name;
            $this->notifModel->addNotif($content);

            $this->Buy_sell_page();
        } else {
            echo "You don't have this amount in your wallet";
        }
    }



    public function send_transac()
    {

        // $coin=$this->wallet->check_Qte($_POST['cryptoid']);
        // $quantite=$coin->qte;

        if (!is_numeric($_POST['email'])) {
            $receiver = $this->user->check_email_or_nexusID($_POST['email']);
            $_POST['email'] = $receiver->id;
        }
        $data = [
            'cryptoid' => $_POST['cryptoid'],
            'cryptoamount' => $_POST['coin_amount'],
            'nexusid' => $_POST['email'],
            'type_transac' => 'send'
        ];
        $result = $this->wallet->wallet_sell($data);
        if ($result) {
            $this->transaction->send_coin($data);
            $this->wallet->add_amount_to_wallet_receiver($data);
            $this->Buy_sell_page();
        } else {
            echo "You don't have this amount in your wallet";
        }
        $data = [
            'cryptoid' => $_POST['cryptoid'],
            'cryptoamount' => $_POST['coin_amount'],
            'nexusid' => $_POST['email'],
            'type_transac' => 'send'
        ];
        $result = $this->wallet->wallet_sell($data);
        if ($result) {
            $this->transaction->send_coin($data);
            $this->wallet->add_amount_to_wallet_receiver($data);
            echo "<script>alert('TRANSACTION DONE');</script>";
        } else {
            echo "<script>alert('You don\'t have this amount in your wallet');</script>";
        }
        $this->Buy_sell_page();
    }
}