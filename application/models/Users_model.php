<?php
/**
 * Created by PhpStorm.
 * User: Hayk
 * Date: 05.10.2016
 * Time: 18:35
 */

class Users_model extends CI_Model {


    public function __construct()
    {
        parent::__construct();

    }

    /**
     * @param $data
     * @return bool|Object
     */
    public function get_user($data) {
        $this->db->select("*");
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        $this->db->where('passconf', $data['passconf']);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function add_user($data) {
        return $this->db->insert('users', $data);
    }

    public function get_all_users() {
        $this->db->select("*");
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_user_by_id($id) {
        $this->db->select("*");
        $this->db->where('id', $id);
        $query = $this->db->get('users');

        return $query->row();
    }


    /**
     * @param array $userData
     * @return array $userData
     *
     *  check if user data exists in database,
     * 1. if NOT, add into database the user data
     * 2. if YES, update user data en return updated data
     */

    public function check_user_fb($userData = array())
    {
            if(!empty($userData)){
                $this->db->select("*");
                $this->db->where('oauth_provider', $userData['oauth_provider']);
                $this->db->where('oauth_uid', $userData['oauth_uid']);
                $num = $this->db->count_all_results('users');

                if($num > 0){
                    //Update user data if already exists
                    $this->db->set($userData);
                    $this->db->where('oauth_provider', $userData['oauth_provider']);
                    $this->db->where('oauth_uid', $userData['oauth_uid']);
                    $this->db->update('users');
                }else{
                    //Insert user data
                    $this->db->set($userData);
                    $this->db->where('oauth_provider', $userData['oauth_provider']);
                    $this->db->where('oauth_uid', $userData['oauth_uid']);
                    $this->db->insert('users');
                }

                //Get user data from the database
                $query = $this->db->get('users');

            }

            //Return user data
            return $query->result_array();
    }

    public function create_user($data){
        $this->db->set($data);
        return $this->db->insert('users');
    }

    public function update_user($id, $data){
        $this->db->set($data);
        $this->db->where("id", $id);
        return $this->db->update('users');
    }
    public function deleteUser($id){
        $query = $this->db->get('users');
        $query_result = $query->result();
        return $query_result;
    }
}