<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_model extends CI_Model
{

  public function getMember()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->join('user', 'user.id = member.username', 'LEFT');
    $this->db->join('age_level', 'age_level.age_id = member.age', 'LEFT');
    $this->db->join('img_baptis', 'img_baptis.member = member.member_id', 'left');
    $this->db->join('img_anak', 'img_anak.member2 = member.member_id', 'left');
    $this->db->join('img_pernikahan', 'img_pernikahan.member3 = member.member_id', 'left');
    $this->db->order_by('member_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function createMember($data)
  {
    $this->db->insert('member', $data);
  }

  // Detail Member
  public function detailMember($id)
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->where('member_id', $id);
    $this->db->order_by('member_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  // Edit Member
  public function editMember($data)
  {
    $this->db->where('member_id', $data['member_id']);
    $this->db->update('member', $data);
  }

  // Delete Member
  public function deleteMember($data)
  {
    $this->db->where('member_id', $data['member_id']);
    $this->db->delete('member', $data);
  }

  public function getNonMember()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->join('user', 'user.id = member.username', 'LEFT');
    $this->db->join('age_level', 'age_level.age_id = member.age', 'LEFT');
    $this->db->where(array('status' => 'Non Member'));
    $this->db->order_by('member_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  //username
  public function username()
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where(array('role_id' => '2'));
    $this->db->order_by('id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function pencarian_d($status)
  {

    $this->db->where("status", $status);
    return $this->db->get("member");
  }

  public function createImg($data)
  {
    $this->db->insert('img_baptis', $data);
  }

  // Detail Member
  public function detailImg($id)
  {
    $this->db->select('*');
    $this->db->from('img_baptis');
    $this->db->where('bap_id', $id);
    return $this->db->get()->result();
  }

  public function createAnak($data)
  {
    $this->db->insert('img_anak', $data);
  }

  // Detail Member
  public function detailAnak($id)
  {
    $this->db->select('*');
    $this->db->from('img_anak');
    $this->db->where('ank_id', $id);
    return $this->db->get()->result();
  }

  public function createPer($data)
  {
    $this->db->insert('img_pernikahan', $data);
  }

  // Detail Member
  public function detailPer($id)
  {
    $this->db->select('*');
    $this->db->from('img_pernikahan');
    $this->db->where('per_id', $id);
    return $this->db->get()->result();
  }
}
