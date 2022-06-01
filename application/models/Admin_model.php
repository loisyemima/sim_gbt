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

  public function total()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->where(array('status' => 'Member'));
    return $this->db->get()->num_rows();
  }
  public function totalAnak()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->where(array('status' => 'Member'));
    $this->db->where(array('age' => '1'));
    return $this->db->get()->num_rows();
  }

  public function totalPemuda()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->where(array('status' => 'Member'));
    $this->db->where(array('age' => '2'));
    return $this->db->get()->num_rows();
  }

  public function totalDewasa()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->where(array('status' => 'Member'));
    $this->db->where(array('age' => '3'));
    return $this->db->get()->num_rows();
  }
}
