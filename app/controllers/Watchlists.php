<?php
class Watchlists extends Controller
{
    private $watchlistModel;
    public function __construct() {
        $this->watchlistModel = $this->model('Watchlist');
    }

    public function list()
    {
        $watchlistData = $this->watchlistModel->AddCrypto();
        $this->view('watchlist/list',$watchlistData);
    }

    public function addToWatchlistAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = $_POST['user_id'] ?? null;
            $crypto_id = $_POST['crypto_id'] ?? null;
            $success = $this->watchlistModel->addToWatchlist($user_id, $crypto_id);
            echo json_encode(['success' => $success]);
            exit;
        }
    }
}