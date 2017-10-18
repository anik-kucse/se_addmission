<?php

/**
 * Index Controller
 */
class Index extends MainController
{

    public function __construct(){
        parent::__construct();
//        Usession::checkSession();
    }

    public function Index(){
        self::home();
    }

    public function home(){
        header('Location:'.BASE_URL.'/login');
    }

    public function studentAccountManage()
    {
        $pageName = ['pageName' => 'Account Manage'];
        $this->load->view('partials/headerPublic', $pageName);
        $this->load->view('students/accountManage');
        $this->load->view('partials/footer');
    }


}
