<?php
/**
 * Created by PhpStorm.
 * User: Hayk
 * Date: 05.10.2016
 * Time: 18:35
 */

class Sights_model extends CI_Model {


    public function __construct()
    {
        parent::__construct();

    }

    /**
     * @param $data
     * @return bool|Object
     */
    public function get_sight($data) {
        $this->db->select("*");
        $this->db->where('name', $data['name']);
        $this->db->where('description', $data['description']);
        $query = $this->db->get('sights');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function add_sight($data) {
        return $this->db->insert('sights', $data);
    }

    public function get_all_sights() {
        $this->db->select("*");
        $query = $this->db->get('sights');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_sight_by_id($id) {
        $this->db->select("*");
        $this->db->where('id', $id);
        $query = $this->db->get('sights');

        return $query->row();
    }

       public function create_sight($data){
        $this->db->set($data);
        return $this->db->insert('sights');
    }

       public function deleteSight($id){
        $query = $this->db->get('sights');
        $query_result = $query->result();
        return $query_result;
    }



}