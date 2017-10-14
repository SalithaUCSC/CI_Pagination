<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

    public function getUsers() {
        
            $this->db->select('*');
            $this->db->from('users');
            $this->db->order_by('indexno');
            $query = $this->db->get();
            return $query->result();
        
    }

    public function getUserPagintaion($limit, $start) {
        
            $this->db->select('*');
            $this->db->from('users');
            $this->db->limit($limit, $start);
            $this->db->order_by('indexno');
            $query = $this->db->get();
            return $result = $query->result();
        
    }

    public function getUserCount() {
        
            $this->db->select("COUNT(*) as num_row");
            $this->db->from('users');
            $this->db->order_by('indexno');
            $query = $this->db->get();
            $result = $query->result();
            return $result[0]->num_row;

    }


}