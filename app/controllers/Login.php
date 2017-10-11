<?php

/**
 * Login Controller
 */
class Login extends MainController
{
    public function __construct(){
        parent::__construct();
    }

    public function Index(){
        $this->login();
    }

    public function login($data = false){
        Session::init();
        if(Session::get("login") == true ){
            header("Location: ".BASE_URL."/Index");
        } else {
            $data = ['pageName' => 'Log in'];
            $this->load->view("partials/headerPublic", $data);
            $this->load->view("login");
            $this->load->view("partials/footer");
        }
    }

    public function loginAuth(){
        if (isset($_POST['btn_login'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $table = "users";
            $loginModel = $this->load->model("LoginModel");
            $loginData  = $loginModel->getIdByUserNamePass($username, $password, $table);
            if(!empty($loginData)) {
                Session::init();
                Session::set('login', 'true');
                Session::set('username', $loginData[0]['user_name']);
                Session::set('id',  $loginData[0]['id']);
                Session::set('user_role',  $loginData[0]['user_role']);
                Session::set('password',  $loginData[0]['password']);
                if($loginData[0]['user_role'] == 'admin'){
                    header("Location: ".BASE_URL."/Index");
                } else {
                    header("Location: ".BASE_URL."/Index");
                }
            }else{
                header("Location: ".BASE_URL."/Login");
            }
        }
    }

    public function logOut(){
        Session::init();
        Session::destroy();
        header("Location: ".BASE_URL."/Login");
    }
}
