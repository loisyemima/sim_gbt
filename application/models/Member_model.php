<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_model extends CI_Model
{

  public function getMember()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->join('age_level', 'age_level.age_id = member.umur', 'LEFT');
    $this->db->join('img_baptis', 'img_baptis.member = member.member_id', 'left');
    $this->db->join('img_anak', 'img_anak.member2 = member.member_id', 'left');
    $this->db->join('img_pernikahan', 'img_pernikahan.member3 = member.member_id', 'left');
    $this->db->where('member_id !=', 1);
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
    $this->db->join('age_level', 'age_level.age_id = member.umur', 'LEFT');
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

  public function get_all_data()
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->join('img_baptis', 'img_baptis.member = member.member_id', 'left');
    return $this->db->get()->result();
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
    $this->db->where('member', $id);
    return $this->db->get()->result();
  }

  public function detailImg2($id)
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

  var $table = 'member';
  var $column_order = array(null, 'Fullname', 'place', 'birth', 'age', 'status',); //set column field database for datatable orderable
  var $column_search = array('FullName', 'place', 'birth', 'age', 'status'); //set column field database for datatable searchable 
  var $order = array('member_id' => 'asc'); // default order 

  private function _get_datatables_query()
  {

    //add custom filter here
    if ($this->input->post('status')) {
      $this->db->where('status', $this->input->post('status'));
    }

    $this->db->from($this->table);
    $i = 0;

    foreach ($this->column_search as $item) // loop column 
    {
      if ($_POST['search']['value']) // if datatable send POST for search
      {

        if ($i === 0) // first loop
        {
          $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
          $this->db->like($item, $_POST['search']['value']);
        } else {
          $this->db->or_like($item, $_POST['search']['value']);
        }

        if (count($this->column_search) - 1 == $i) //last loop
          $this->db->group_end(); //close bracket
      }
      $i++;
    }

    if (isset($_POST['order'])) // here order processing
    {
      $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    } else if (isset($this->order)) {
      $order = $this->order;
      $this->db->order_by(key($order), $order[key($order)]);
    }
  }

  public function get_datatables()
  {
    $this->_get_datatables_query();
    if ($_POST['length'] != -1)
      $this->db->limit($_POST['length'], $_POST['start']);
    $query = $this->db->get();
    return $query->result();
  }

  public function count_filtered()
  {
    $this->_get_datatables_query();
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function count_all()
  {
    $this->db->from($this->table);
    return $this->db->count_all_results();
  }

  public function get_list_countries()
  {
    $this->db->select('status');
    $this->db->from($this->table);
    $this->db->order_by('status', 'asc');
    $query = $this->db->get();
    $result = $query->result();

    $countries = array();
    foreach ($result as $row) {
      $countries[] = $row->status;
    }
    return $countries;
  }
}
