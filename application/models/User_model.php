<?php
class User_model extends CI_Model
{
    public function addNewUser($formArray)
    {
        $this->db->insert('new_admin_data', $formArray);
    }

    public function alladmidata()
    {
        $this->db->select('*');
        $this->db->from('new_admin_data');
        $query =  $this->db->get();
        return $query->result_array();
    }

    public function getDataById($admin_id)
    {
        $this->db->select('*');
        $this->db->from('new_admin_data');
        $this->db->where('id', $admin_id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function updateadin($admin_id, $formArray)
    {
        $this->db->where('id', $admin_id);
        $this->db->update('new_admin_data', $formArray);
    }

    public function deletedata($admin_id)
    { 
        $this->db->where('id', $admin_id);
        $this->db->delete('new_admin_data');
    }
    public function findUserByEmail($email)
    {
        $this->db->select('*');
        $this->db->from('new_admin_data');
        $this->db->where('admin_email', $email);
        $query = $this->db->get();
        return $query->row_array();
    }
}
