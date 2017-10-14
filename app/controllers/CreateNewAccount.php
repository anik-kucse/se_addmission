<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 10/15/2017
 * Time: 12:36 AM
 */

class CreateNewAccount  extends MainController{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        self::createUser();
    }

    public function createUser(){
        $pageName = ['pageName' => 'Create User'];
        $this->load->view('partials/header', $pageName);
        $this->load->view('admin/createNewAccount');
        $this->load->view('partials/footer');
    }


}