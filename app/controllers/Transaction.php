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
        $this->notifModel = $this->model('Notification');
        $this->transaction = $this->model('transact');
        $this->user = $this->model('user');
        $this->wallet = $this->model('wallet');
    }
    public function Buy_sell_page()
    {
        $cryptoData = $this->cryptoModel->fetchCryptoData();

        // var_dump($cryptoData);
        // die();
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

        $content = "You've bought ".$data['amount']." of ".$data['coin'];
        $this->transaction->buy_transac($data);
        $this->wallet->add_to_wallet($data);
        $this->notifModel->addNotif($content);

    }
    public function sell_transac()
    {


        $data = [
            'cryptoid' => $_POST['cryptoid'],
            'cryptoamount' => $_POST['coin_amount'],
            'type_transac' => 'sell'
        ];
        $this->transaction->sell_transac($data);
    }
    public function send_transac()
    {

        $coin = $this->wallet->check_Qte($_POST['cryptoid']);
        $quantite = $coin->qte;

        if (!is_numeric($_POST['email'])) {
            $receiver = $this->user->check_email_or_nexusID($_POST['email']);
            $_POST['email'] = $receiver->id;
        }

        $data = [
            'cryptoid' => $_POST['cryptoid'],
            'coin_amount' => $_POST['coin_amount'],
            'nexusid' => $_POST['email'],
            'type_transac' => 'send'
        ];
        $this->transaction->send_coin($data);
    }
}
