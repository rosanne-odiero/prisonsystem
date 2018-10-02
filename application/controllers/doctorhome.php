<?php
class Doctorhome extends CI_Controller{
    public function index(){
      $this->load->model('Doctormodel');
      $records = $this->Doctormodel->getRecords();
     
      //$this->load->helper('url');
      $this->load->view('view_doctor', ['records' =>$records]);
     
    }
     
     public function create(){
      $this->load->view('create_view');
     }
     public function delete(){

     }
}
?>