<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class registrar extends CI_Controller {
		public function registerprisoners()
	{
		$this->load->view('registerprisoners'); 
	}
	public function prisonerdetails()
	{
		$this->load->model("registrar_model");
		$data["fetch_data"]= $this->registrar_model->fetch_data();
		$this->load->view('prisonerdetails',$data); 
	}
		
	
		
		public function viewdetails(){
			$userID = $this->session->userdata('staffid');
		}
	}

	

	
	?>