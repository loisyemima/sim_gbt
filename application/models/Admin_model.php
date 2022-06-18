<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

  public function getData()
  {
    $id = $this->session->userdata('username');
    $this->db->select('*');
    $this->db->from('member');
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

  public function role()
  {
    $query = $this->db->get('user_role');
    return $query->result_array();
  }

  public function getRoleaccess($role_id)
  {
    $query =  $this->db->get_where('user_role', ['id' => $role_id]);
    return $query->row_array();
  }

  public function menu()
  {
    $this->db->select('*');
    $this->db->from('user_menu');
    $this->db->where('id !=', 1);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function total()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->where(array('status' => 'Anggota'));
    return $this->db->get()->num_rows();
  }
  public function totalAnak()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->where(array('status' => 'Anggota'));
    $this->db->where(array('umur' => 'Anak-anak'));
    return $this->db->get()->num_rows();
  }

  public function totalPemuda()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->where(array('status' => 'Anggota'));
    $this->db->where(array('umur' => 'Pemuda'));
    return $this->db->get()->num_rows();
  }

  public function totalDewasa()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->where(array('status' => 'Anggota'));
    $this->db->where(array('umur' => 'Dewasa'));
    return $this->db->get()->num_rows();
  }
}
