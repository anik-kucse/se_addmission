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
        self::procedure();
    }

    public function procedure(){
        $data = ['pageName' => 'Procedure List'];
        $this->load->view("partials/header", $data);
        $this->load->view("admin/procedure_list");
        $this->load->view("partials/footer");
    }

    public function session(){
        $data = ['pageName' => 'Usession'];
        $this->load->view("partials/header", $data);
        $this->load->view("admin/session");
        $this->load->view("partials/footer");
    }
    public function subjectType(){
        $data = ['pageName' => 'Subject Type'];
        $this->load->view("partials/header", $data);
        $this->load->view("admin/subject_type");
        $this->load->view("partials/footer");
    }
    public function subject(){
        $data = ['pageName' => 'Subject'];
        $this->load->view("partials/header", $data);
        $this->load->view("admin/subject");
        $this->load->view("partials/footer");
    }
    public function unit(){
        $data = ['pageName' => 'Unit'];
        $this->load->view("partials/header", $data);
        $this->load->view("admin/unit");
        $this->load->view("partials/footer");
    }
    public function university(){
        $data = ['pageName' => 'University'];
        $this->load->view("partials/header", $data);
        $this->load->view("admin/university");
        $this->load->view("partials/footer");
    }
}
