<?php
class Users extends Controller{



    public function index(){
        $data = [
          'title' => 'SharePosts',
          'project_to_update' => ''
        ];
       
        $this->view('users/index', $data);
      }
}
?>