<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayan_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  // Listing Artikels
  public function getPelayan()
  {
    $this->db->select('*');
    $this->db->from('pelayan');
    $this->db->join('member', 'member.member_id = pelayan.name', 'LEFT');
    $this->db->order_by('pelayan_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function createPelayan($data)
  {
    $this->db->insert('pelayan', $data);
  }

  public function name()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->order_by('member_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Detail Pelayan
  public function detailPelayan($id)
  {
    $this->db->select('*');
    $this->db->from('pelayan');
    $this->db->where('pelayan_id', $id);
    $this->db->order_by('pelayan_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit Pelayan
  public function editPelayan($data)
  {
    $this->db->where('pelayan_id', $data['pelayan_id']);
    $this->db->update('pelayan', $data);
  }

  // Delete Pelayan
  public function deletePelayan($data)
  {
    $this->db->where('pelayan_id', $data['pelayan_id']);
    $this->db->delete('pelayan', $data);
  }
}
