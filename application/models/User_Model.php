<?php
class User_Model extends CI_Model
{
    // get all users by user type
    public function allUserData($userType)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('created_at', 'desc');
        $this->db->where('user_type', $userType);
        $query =  $this->db->get();
        return $query->result_array();
    }

    // get user data by user Id
    public function getDataById($user_id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $user_id);
        $this->db->order_by('created_at', 'desc');
        $query = $this->db->get();
        return $query->row_array();
    }

    // user insert data in DB 
    public function storeUserData($formArray)
    {
        $this->db->insert('users', $formArray);
        $lastInsertId = $this->db->insert_id();
        return $lastInsertId;
    }

    // user update by user Id 
    public function updateUser($user_id, $data)
    {
        $this->db->where('id', $user_id);
        $this->db->update('users', $data);
        // $updatedData = $this->getDataById($user_id);
        // return $updatedData;
    }

    public function deletedata($user_id)
    {
        $this->db->where('id', $user_id);
        $this->db->delete('users');
    }

    public function storemanagerData($formArray)
    {
        $this->db->insert('users', $formArray);
        $lastInsertId = $this->db->insert_id();
        return $lastInsertId;
    }

    public function updatemanager($user_id, $data)
    {
        $this->db->where('id', $user_id);
        $this->db->update('users', $data);
        // $updatedData = $this->getDataById($user_id);
        // return $updatedData;
    }

    public function deletemanager($user_id)
    {
        $this->db->where('id', $user_id);
        $this->db->delete('users');
    }
}
