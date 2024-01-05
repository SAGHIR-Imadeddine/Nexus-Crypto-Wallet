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
        $user_id = 1;
        $cryptoData = $this->cryptoModel->fetchCryptoData();
        $data = $this->watchlistModel->getUserWatchlist($user_id, $cryptoData);
        $this->view('watchlist/list', $data);
    }
    public function list($crypto_id)
    {
        $user_id = 1;
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

    public function removeCrypto()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $user_id = 1;
            $crypto_id = $_GET['crypto_id'] ?? null;
            $success = $this->watchlistModel->removeCrypto($user_id, $crypto_id);

            if ($success) {
                header('Location: ' . URLROOT . 'watchlists/index');
                // echo '<script>';
                // echo 'alert("This cryptocurrency is removed successfully.");';
                // echo 'window.location.href="' . URLROOT . 'watchlists/index";';
                // echo '</script>';

                exit;
            } else {
                echo '<script>';
                echo 'alert("Error removing cryptocurrency from watchlist.");';
                echo 'window.location.href="' . URLROOT . 'watchlists/index";';
                echo '</script>';
                exit;
            }
        }
    }
}
