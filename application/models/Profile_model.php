<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{

  public function getProfile()
  {
    $this->db->select('*');
    $this->db->from('profile');
    $this->db->order_by('profile_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function getProfile2()
  {
    $this->db->select('*');
    $this->db->from('profile');
    $this->db->order_by('profile_id', 'ASC');
    $this->db->where(array('keterangan' => 'Profil'));
    $query = $this->db->get();
    return $query->result_array();
  }

  public function createProfile($data)
  {
    $this->db->insert('profile', $data);
  }

  // Detail profile
  public function detailProfile($profile_id)
  {
    $this->db->select('*');
    $this->db->from('profile');
    $this->db->where('profile_id', $profile_id);
    $this->db->order_by('profile_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit profile
  public function editProfile($data)
  {
    $this->db->where('profile_id', $data['profile_id']);
    $this->db->update('profile', $data);
  }

  // Delete profile
  public function deleteProfile($data)
  {
    $this->db->where('profile_id', $data['profile_id']);
    $this->db->delete('profile', $data);
  }
}
