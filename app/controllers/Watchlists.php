<?php
class Watchlists extends Controller
{
    private $watchlistModel;
    private $cryptoModel;

    public function __construct()
    {
        $this->cryptoModel = $this->model('Crypto');
        $this->watchlistModel = $this->model('Watchlist');
    }
    public function index()
    {
        $user_id = 2;
        $cryptoData = $this->cryptoModel->fetchCryptoData();
        $data = $this->watchlistModel->getUserWatchlist($user_id, $cryptoData);
        $this->view('watchlist/list', $data);
    }
    public function list()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = 2;
            $crypto_id = $_POST['crypto_id'] ?? null;
            $success = $this->watchlistModel->addToWatchlist($user_id, $crypto_id);

            if ($success) {
                header('Location: ' . URLROOT . 'watchlists/index');
                exit;
            } else {
                echo '<script>';
                echo 'alert("This cryptocurrency is already in your watchlist.");';
                echo 'window.location.href="' . URLROOT . 'watchlists/index";';
                echo '</script>';
                exit;
            }
        }
    }
}
