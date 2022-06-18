<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  // baptis
  public function getBaptis()
  {
    $this->db->select('*');
    $this->db->from('baptis');
    $this->db->order_by('Baptis_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function createBaptis($data)
  {
    $this->db->insert('baptis', $data);
  }


  public function getStatus()
  {
    $this->db->select('*');
    $this->db->from('baptis');
    $this->db->where(array('status' => '1'));
    $this->db->order_by('Baptis_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function kode()
  {
    $this->db->select('*');
    $this->db->from('baptis');
    $this->db->order_by('kode', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  public function kode2()
  {
    $this->db->select('*');
    $this->db->from('baptis');
    $this->db->order_by('kode');
    $query = $this->db->get();
    return $query->row_array();
  }

  public function detailBaptis($id)
  {
    $this->db->select('*');
    $this->db->from('baptis');
    $this->db->where('baptis_id', $id);
    $query = $this->db->get();
    return $query->row_array();
  }

  public function editBaptis($data)
  {
    $this->db->where('baptis_id', $data['baptis_id']);
    $this->db->update('baptis', $data);
  }

  public function deleteBaptis($data)
  {
    $this->db->where('baptis_id', $data['baptis_id']);
    $this->db->delete('baptis', $data);
  }

  // Pernikahan
  public function getPernikahan()
  {
    $this->db->select('*');
    $this->db->from('pernikahan');
    $this->db->order_by('pernikahan_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function createPernikahan($data)
  {
    $this->db->insert('pernikahan', $data);
  }

  public function statusPer()
  {
    $this->db->select('*');
    $this->db->from('pernikahan');
    $this->db->where(array('status' => '1'));
    $this->db->order_by('pernikahan_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function kodePer()
  {
    $this->db->select('*');
    $this->db->from('pernikahan');
    $this->db->order_by('kode', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  public function detailPer($id)
  {
    $this->db->select('*');
    $this->db->from('pernikahan');
    $this->db->where('pernikahan_id', $id);
    $this->db->order_by('pernikahan_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  public function editPernikahan($data)
  {
    $this->db->where('pernikahan_id', $data['pernikahan_id']);
    $this->db->update('pernikahan', $data);
  }

  public function deletePernikahan($data)
  {
    $this->db->where('pernikahan_id', $data['pernikahan_id']);
    $this->db->delete('pernikahan', $data);
  }

  // Penyerahan Anak
  public function getAnak()
  {
    $this->db->select('*');
    $this->db->from('anak');
    $this->db->order_by('anak_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function createAnak($data)
  {
    $this->db->insert('anak', $data);
  }

  public function editAnak($data)
  {
    $this->db->where('anak_id', $data['anak_id']);
    $this->db->update('anak', $data);
  }

  public function detailAnak($id)
  {
    $this->db->select('*');
    $this->db->from('anak');
    $this->db->where('anak_id', $id);
    $query = $this->db->get();
    return $query->row_array();
  }

  public function deleteAnak($data)
  {
    $this->db->where('anak_id', $data['anak_id']);
    $this->db->delete('anak', $data);
  }

  public function statusAnak()
  {
    $this->db->select('*');
    $this->db->from('anak');
    $this->db->where(array('status' => '1'));
    $this->db->order_by('anak_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function kodeAnak()
  {
    $this->db->select('*');
    $this->db->from('anak');
    $this->db->order_by('kode', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }
}
