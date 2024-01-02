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
            $crypto_id = $_POST['id'] ?? null;  // Update to 'id' as per your JavaScript code
            $success = $this->watchlistModel->addToWatchlist($crypto_id);
            header('Content-Type: application/json');
            echo json_encode(['success' => $success]);
            exit;
        }
    }
    
    
}
