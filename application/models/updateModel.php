<?php
class updateModel extends CI_Model{
// Function To Fetch All Students Record
    function show_users(){
        $query = $this->db->get('users');
        $query_result = $query->result();
        return $query_result;
    }

// Function To Fetch Selected Student Record
    function show_user_id($data){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
// Update Query For Selected Student
    function update_user_id1($id,$data){
        $this->db->where('user_id', $id);
        $this->db->update('users', $data);
    }
}
?>