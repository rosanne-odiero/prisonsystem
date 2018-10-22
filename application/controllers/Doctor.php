<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller { 

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('queries');
		$posts=$this->queries->getPosts();
		$this->load->view('doctor_message',['posts'=>$posts]);
	}
	public function create(){
		$this->load->view('create');
	}

	public function update($id){
		$this->load->model('queries');
		$post=$this->queries->getSinglePosts($id);
		$this->load->view('update', ['post'=>$post]);
	}
	public function save(){
		$this->form_validation->set_rules('patient_name','Patient Name','required');
		$this->form_validation->set_rules('patient_occupation','Patient Occupation','required');
		$this->form_validation->set_rules('allergies','Patient Allergies','required');
		$this->form_validation->set_rules('previous_visit','Date Visited','required');
		$this->form_validation->set_rules('previous_diagnosis','Patient Diagnosis','required');
		$this->form_validation->set_rules('weight','Patient Weight','required');
		$this->form_validation->set_rules('previous_prescription','Patient Prescription','required');
		if($this->form_validation->run()){
			$data= $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addPatient($data)){
				$this->session->set_flashdata('msg','Patient Added Successfully');
			}
			else{
				$this->session->set_flashdata('msg', 'Patient Not Added');
			}
			return redirect('doctor');
		}
		else{
			$this->load->view('create');
		}
	}
	public function change($id){

		$this->form_validation->set_rules('patient_name','Patient Name','required');
		$this->form_validation->set_rules('patient_occupation','Patient Occupation','required');
		$this->form_validation->set_rules('allergies','Patient Allergies','required');
		$this->form_validation->set_rules('previous_visit','Date Visited','required');
		$this->form_validation->set_rules('previous_diagnosis','Patient Diagnosis','required');
		$this->form_validation->set_rules('weight','Patient Weight','required');
		$this->form_validation->set_rules('previous_prescription','Patient Prescription','required');
		if($this->form_validation->run()){
			$data= $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updatePatient($data, $id)){
				$this->session->set_flashdata('msg','Patient Details Updated Successfully');
			}
			else{
				$this->session->set_flashdata('msg', 'Patient Details Not Updated');
			}
			return redirect('doctor');
		}
		else{
			$this->load->view('create');
		}
	}
	public function view($id){
		$this->load->model('queries');
		$post=$this->queries->getSinglePosts($id);
		$this->load->view('view', ['post'=>$post]);
	}
	public function delete($id){
		$this->load->model('queries');
		if($this->queries->deletePosts($id)){
			$this->session->set_flashdata('msg','Patient Deleted Successfully');
		}
		else{
			$this->session->set_flashdata('msg', 'Patient Not Deleted');
		}
		return redirect('doctor');
	}
	
}
