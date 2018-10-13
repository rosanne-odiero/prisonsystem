<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {

public function signup_validation()
{
	$this->load->library('form_validation');
	$this->form_validation->set_rules('email','Email', 'required|trim|valid_email|is_unique[register.email]');
	$this->form_validation->set_message('is_unique', "That email already exists");
	$this->form_validation->set_rules('fullname','Full Name', 'required|trim');
	$this->form_validation->set_rules('occupation','Occupation', 'required|trim');
	$this->form_validation->set_rules('gender','Gender', 'required|trim');
	$this->form_validation->set_rules('password','Password', 'required|trim');
	$this->form_validation->set_rules('cpassword','Confirm Password', 'required|trim|matches[password]');
 if($this->form_validation->run())
 {
	 $enkey=md5(uniqid());
	 $this->load->model('model_users');
	 if($this->model_users->add_register($enkey))
	 {
		echo "Records addded successfully";
		$this->load->view('loginmsg');

	 }else {
		 echo "Problem adding to database.";
		 $this->load->view('signup');
	 }
	 }
 }
}