<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

  public function getUser()
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->order_by('id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Detail User
  public function detailUser($id)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('id', $id);
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit User
  public function editUser($data)
  {
    $this->db->where('id', $data['id']);
    $this->db->update('user', $data);
  }

  public function getData()
  {
    $id = $this->session->userdata('id');
    $this->db->select('*');
    $this->db->from('member');
    $this->db->join('user', 'user.id = member.username', 'LEFT');
    $this->db->where('id', $id);
    $this->db->order_by('member_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }
}
