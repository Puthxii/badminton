<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    
    private $users = 'users';
	public function get_user_data($username)
    {
        $this->db->select('id, username, password, status');
        $this->db->from('users');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->row();
    }

    // public function get_user_all_data($data)
    // {
    //     $this->db->select('id, username, password, name, lastname, birthday, phone, club, line_id, status');
    //     $this->db->from('users');
    //     $this->db->where('id', $data);
    //     $query = $this->db->get();
    //     return $query->row();
    // }
    public function get($id){
        
        $this->db->where('id', $id);
        $result = $this->db->get($this->users);
        return $result->row();
    }
}
