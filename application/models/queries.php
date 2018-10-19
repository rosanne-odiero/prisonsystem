<?php 
class queries extends CI_Model{
    public function getPosts(){
        $query = $this->db->get('medicalinfo'); 
        if($query->num_rows() > 0){
       return $query->result();
        }
    }
    public function addPatient($data){
            return $this->db->insert('medicalinfo', $data);
    }
    public function getSinglePosts($id){
        $query = $this->db->get_where('medicalinfo', array('id' => $id));
        if($query->num_rows()>0){
            return $query->row();
        }
    }
    public function updatePatient($data,$id){
        return $this->db->where('id',$id)
                ->update('medicalinfo', $data);
    }
    public function deletePosts($id){
        return $this->db->delete('medicalinfo',['id'=>$id]);
        
    }
}
?>