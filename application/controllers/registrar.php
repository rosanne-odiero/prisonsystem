<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
	public function registrar()
	{
		if($this->session->userdata('is_logged_in')){
          $this->load->view('registrarview');
		}else {
			redirect('index.php/Main/restricted');
		}
		
	}
	public function index(){

			$data['title'] = 'Most recent prisoner';

			$data['prisoner'] = $this->registrar_model->get_prisoner();


			$this->load->view('templates/registrarnav'); 
			$this->load->view('registrar/registrar',$data);
			$this->load->view('templates/footer'); 
		}

		public function create(){
			$data['title'] = 'Add Prisoner';

			$this->form_validation->set_rules('firstname', 'Firstname','required');
			$this->form_validation->set_rules('lastname', 'Lastname','required');
			$this->form_validation->set_rules('email', 'Email');
			$this->form_validation->set_rules('nationalid', 'NationalID','required');
			$this->form_validation->set_rules('charges', 'Charges','required');
			$this->form_validation->set_rules('number', 'Phone Number');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/registrarnav'); 
			 	$this->load->view('registrar/create', $data);
				$this->load->view('templates/footer');  	
			}
			else{
				//Upload image
				$config['upload_path'] = './assests/images/prisoner';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '500';
				$config['max_height'] = '500';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$prisoner_image = 'noimage.jpg';	
				}
				else{
					$data = array('upload_data' => $this->upload->data());
					$prisoner_image = $_FILES['userfile']['name']; 
				}

				$this->registrar_model->add_prisoner($prisoner_image); //create_post
				redirect('posts');
			}

		}

		public function view($slug = NULL){
			$data['prisoner'] = $this->registrar_model->get_prisoner($slug);

			if(empty($data['prisoner'])){
				show_404();
			}
			$data['firstname'] = $data['prisoner']['firstname'];
			$this->load->view('templates/registrarnav'); 
			$this->load->view('registrar/view', $data);
			$this->load->view('templates/footer');  	
		}
		public function delete($id){
			$this->registrar_model->delete_post($id);
			redirect('registrar');
		}
		public function edit($slug){
			$data['prisoner'] = $this->registrar_model->get_prisoner($slug);

			
			if(empty($data['prisoner'])){
				show_404();
			}

			$data['title'] = 'Edit Prisoner Details';

			$this->load->view('templates/registrarnav'); 
			$this->load->view('registrar/edit', $data);
			$this->load->view('templates/footer');  	
		}

		public function update(){
			$this->registrar_model->update_post();
			redirect('registrarview');
		}
	}
}