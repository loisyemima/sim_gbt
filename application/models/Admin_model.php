<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

  public function getData()
  {
    $id = $this->session->userdata('username');
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $id);
    $query = $this->db->get();
    return $query->row_array();
  }

  public function getUser()
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->order_by('id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }
}
