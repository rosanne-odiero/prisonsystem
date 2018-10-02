<?php 
class Doctormodel extends CI_Model{
    public function getRecords(){
        $query = $this->db->get('medicalinfo');
       return $query->result();
    }
}
?>