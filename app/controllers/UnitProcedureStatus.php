<?php
/**
 * Created by PhpStorm.
 * User: Akib
 * Date: 10/20/2017
 * Time: 8:34 PM
 */

    class UnitProcedureStatus extends MainController{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        self::main();
    }

    public function main($formId = false){
        if($formId != false){
            $pageName = ['pageName' => 'Procedure Status'];

            $simpleModel = $this->load->model('SimpleModel');
            $studentModel = $this->load->model('StudentModel');
            $unitProcedureModel = $this->load->model('UnitProcedureModel');

            $cond = "id = $formId";
            $data['formSerial'] = $simpleModel->getAll('form_sell', $cond);
            $data['studentName'] = $studentModel->getStudentNameByFormId($formId);
            $data['table'] = $unitProcedureModel->getAllProcedureByFormId($formId);


            $this->load->view('partials/header', $pageName);
            $this->load->view('admin/unit_procedure_status',$data);
            $this->load->view('partials/footer');
        }else{
            header('Location:'.BASE_URL);
        }
    }

    public function update(){
        Session::init();
        $userId = Session::get('id');
        $unitProcedureStatusId = $_POST['unit_procedure_status_id'];
        if($_POST['txt_input'] == ""){
            $value = -1;
        }else{
            $value = $_POST['txt_input'];
        }
        $formId = $_POST['form_id'];
        $simpleModel = $this->load->model('SimpleModel');
        $cond = "id = $unitProcedureStatusId";
        if(isset($_POST['checkbox'])){

            $data = [
                'value' => $value,
                'modified_by' => $userId
            ];
            $res = $simpleModel->update('unit_procedure_status', $data, $cond);
            if($res){
                header('Location:'.BASE_URL.'/UnitProcedureStatus/main/'.$formId);
            }
        }else{
            $data = [
                'value' => null,
                'modified_by' => $userId
            ];
            $res = $simpleModel->update('unit_procedure_status', $data, $cond);
            if($res){
                header('Location:'.BASE_URL.'/UnitProcedureStatus/main/'.$formId);
            }
        }
    }

}