<?php
class Watchlists extends Controller
{
    private $watchlistModel;
    public function __construct()
    {
        $this->watchlistModel = $this->model('Watchlist');
    }
    // public function index()
    // {
    //     $listData = $this->watchlistModel->fetchWatchlistData();
    //     $this->view('watchlist/list',$listData);
    // }

    public function list()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = 2; 
            $crypto_id = $_POST['crypto_id'] ?? null;  
            $success = $this->watchlistModel->addToWatchlist($user_id, $crypto_id);
            
            if ($success) {
                header('Location: ' . URLROOT . 'watchlists/list');
                exit;
            } else {
                var_dump($success);
                die("why");
                header('Location: ' . URLROOT . 'error');
                exit;
            }
        }
    }
    
}
