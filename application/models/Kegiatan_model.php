<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_model extends CI_Model
{

  public function getKegiatan()
  {
    $this->db->select('*');
    $this->db->from('kegiatan');
    $this->db->order_by('kegiatan_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function createKegiatan($data)
  {
    $this->db->insert('kegiatan', $data);
  }

  // Detail kegiatan
  public function detailKegiatan($kegiatan_id)
  {
    $this->db->select('*');
    $this->db->from('kegiatan');
    $this->db->where('kegiatan_id', $kegiatan_id);
    $this->db->order_by('kegiatan_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit kegiatan
  public function editKegiatan($data)
  {
    $this->db->where('kegiatan_id', $data['kegiatan_id']);
    $this->db->update('kegiatan', $data);
  }

  // Delete kegiatan
  public function deleteKegiatan($data)
  {
    $this->db->where('kegiatan_id', $data['kegiatan_id']);
    $this->db->delete('kegiatan', $data);
  }
}
