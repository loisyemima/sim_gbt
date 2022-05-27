<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warta_model extends CI_Model
{

  public function getWarta()
  {
    $this->db->select('*');
    $this->db->from('warta');
    $this->db->order_by('warta_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function createWarta($data)
  {
    $this->db->insert('warta', $data);
  }

  // Detail warta
  public function detailWarta($warta_id)
  {
    $this->db->select('*');
    $this->db->from('warta');
    $this->db->where('warta_id', $warta_id);
    $this->db->order_by('warta_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit warta
  public function editWarta($data)
  {
    $this->db->where('warta_id', $data['warta_id']);
    $this->db->update('warta', $data);
  }

  // Delete warta
  public function deleteWarta($data)
  {
    $this->db->where('warta_id', $data['warta_id']);
    $this->db->delete('warta', $data);
  }
}
