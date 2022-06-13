<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

  public function getUser()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->order_by('member_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Detail User
  public function detailUser($id)
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->where('member_id', $id);
    $this->db->order_by('member_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit User
  public function editUser($data)
  {
    $this->db->where('member_id', $data['member_id']);
    $this->db->update('member', $data);
  }

  public function getData()
  {
    $id = $this->session->userdata('member_id');
    $this->db->select('*');
    $this->db->from('member');
    $this->db->where('member_id', $id);
    $this->db->order_by('member_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }
}
