<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 10/10/2017
 * Time: 10:36 AM
 */
class Board extends MainController{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        self::board();
    }

    public function board(){
        $data = ['pageName' => 'Board'];
        $this->load->view("partials/header", $data);

        $boardModel = $this->load->model('BoardModel');
        $table['list'] = $boardModel->getAllBoard();

        $this->load->view("admin/board", $table);
        $this->load->view("partials/footer");
    }

    public function addNew(){
        $boardModel = $this->load->model('BoardModel');
        $data =[
          'name' =>  $_POST['board_name']
        ];
        $res = $boardModel->insertIntoBoard($data);
        if($res){
            header("Location: ".BASE_URL."/Board");
        }
    }
}