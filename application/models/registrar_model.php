<?php
 class Model_users extends CI_Model
 {
     public function add_register($enkey)
     {
        $data=array(
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password')),
            'fullname'=>$this->input->post('fullname'),
            'occupation'=>$this->input->post('occupation'),
            'phonenumber'=>$this->input->post('phonenumber'),
            'profilepicture'=>$this->input->post('profilepicture'),
            'gender'=>$this->input->post('gender'),
            'enkey'=>$enkey
        ); 
        $query=$this->db->insert('register',$data);
if($query){
    return true;
}else {
    return false;
}
     }
 }