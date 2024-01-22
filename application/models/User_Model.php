<?php
class User_Model extends CI_Model
{
    public function allUserData($userType)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('created_at', 'desc'); 
        $this->db->where('user_type', $userType);
        $query =  $this->db->get();
        return $query->result_array();
    }
}
