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
        // Get the last inserted ID
        $lastInsertId = $this->db->insert_id();
        return $lastInsertId;
    }

    // user update by user Id 
    public function updateUser($user_id, $formArray)
    {
        $this->db->where('id', $user_id);
        $this->db->update('users', $formArray);

        // Fetch the updated data
        $updatedData = $this->getDataById($user_id);

        return $updatedData;
    }
}
