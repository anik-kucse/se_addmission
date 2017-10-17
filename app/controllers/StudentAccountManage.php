<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 10/17/2017
 * Time: 7:23 AM
 */

class StudentAccountManage extends MainController{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        self::accountManage();
    }

    public  function accountManage($value = false){
        $pageName = ['pageName' => 'Account Manage'];
        $this->load->view('partials/headerPublic', $pageName);

        $simpleModel = $this->load->model('SimpleModel');
        Session::init();
        $user_id = Session::get('id');
        $cond = "id = $user_id";
        $user['user'] = $simpleModel->getAll('users', $cond);
        $cond = "user_id = $user_id";
        $user['student'] = $simpleModel->getAll('student', $cond);
        $user['board'] = $simpleModel->getAll('board');
        if($value){
            $user['msg'] = $value;
        }
        $this->load->view('students/accountManage', $user);
        $this->load->view('partials/footer');
    }
}