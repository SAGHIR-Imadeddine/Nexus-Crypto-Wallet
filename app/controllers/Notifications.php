<?php
class Notifications extends Controller
{
    private $notifModel;
    public function __construct()
    {
        $this->notifModel = $this->model('Notification');
    }

    public function addNotification($content){
        $this->notifModel->addNotification($content);
    }

}
