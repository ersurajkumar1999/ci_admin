<?php
class Admin_model extends CI_Model
{
    public function insertData($formArray)
    {
        $this->db->insert('users', $formArray);
    }
    public function allUserdata($userType)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_type', $userType);
        $query =  $this->db->get();
        return $query->result_array();
    }
    public function getDataById($user_id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $user_id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function updateUser($user_id, $formArray)
    {
        $this->db->where('id', $user_id);
        $this->db->update('users', $formArray);
    }
    public function deletedata($user_id)
    {
        $this->db->where('id', $user_id);
        $this->db->delete('users');
    }
}
