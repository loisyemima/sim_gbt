<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Age_model extends CI_Model
{

  public function getAge()
  {
    $this->db->select('*');
    $this->db->from('age_level');
    $this->db->order_by('age_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function createAge($data)
  {
    $this->db->insert('age_level', $data);
  }

  // Detail age
  public function detailAge($id)
  {
    $this->db->select('*');
    $this->db->from('age_level');
    $this->db->where('age_id', $id);
    $this->db->order_by('age_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit age
  public function editAge($data)
  {
    $this->db->where('age_id', $data['age_id']);
    $this->db->update('age_level', $data);
  }

  // Delete age
  public function deleteAge($data)
  {
    $this->db->where('age_id', $data['age_id']);
    $this->db->delete('age_level', $data);
  }
}
