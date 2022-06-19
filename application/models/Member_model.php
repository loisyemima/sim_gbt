<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_model extends CI_Model
{

  public function getMember()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->join('img_baptis', 'img_baptis.member = member.member_id', 'left');
    $this->db->join('img_anak', 'img_anak.member2 = member.member_id', 'left');
    $this->db->join('img_pernikahan', 'img_pernikahan.member3 = member.member_id', 'left');
    $this->db->where('role_id !=', 1);
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


  // Image Baptis
  public function createImg($data)
  {
    $this->db->insert('img_baptis', $data);
  }

  public function editImg($data)
  {
    $this->db->where('member', $data['member']);
    $this->db->update('img_Baptis', $data);
  }
  // Image Baptis
  public function detailImg($id)
  {
    $this->db->select('*');
    $this->db->from('img_baptis');
    $this->db->where('member', $id);
    return $this->db->get()->result();
  }
  // Detail Image Baptis
  public function detailImg2($id)
  {
    $this->db->select('*');
    $this->db->from('img_baptis');
    $this->db->where('bap_id', $id);
    return $this->db->get()->result();
  }

  // image Anak
  public function createAnak($data)
  {
    $this->db->insert('img_anak', $data);
  }
  public function editAnak($data)
  {
    $this->db->where('member2', $data['member2']);
    $this->db->update('img_anak', $data);
  }

  // Detail Anak
  public function detailAnak($id)
  {
    $this->db->select('*');
    $this->db->from('img_anak');
    $this->db->where('member2', $id);
    return $this->db->get()->result();
  }

  //image Pernikahan
  public function createPer($data)
  {
    $this->db->insert('img_pernikahan', $data);
  }

  public function editper($data)
  {
    $this->db->where('member3', $data['member3']);
    $this->db->update('img_pernikahan', $data);
  }

  // Detail Pernikahan
  public function detailPer($id)
  {
    $this->db->select('*');
    $this->db->from('img_pernikahan');
    $this->db->where('member3', $id);
    return $this->db->get()->result();
  }

  public function admin()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->where('role_id =', 1);
    $this->db->where('member_id =', 1);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function editAdmin($data)
  {
    $this->db->where('member_id', $data['member_id']);
    $this->db->update('member', $data);
  }
}
