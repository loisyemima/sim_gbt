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
    $this->db->where(array('status' => 'Member'));
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
}
