<?php
	class Registrar_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}


		public function view_registrar($user_id){
			$this->db->where('email', $email);
			$query=$this->db->get('register');
			return $query->row_array();

		}
		public function view_details($userID){
			$this->db->where('email', $userID);
			$query=$this->db->get('register');
			return $query->row_array();

		}
	    public function fetch_data(){
			$query=$this->db->get("prisoner");
			return $query; 
		}
	}

 