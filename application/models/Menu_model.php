<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
  // Get Data Menu
  public function getMenu()
  {
    $query = $this->db->get('user_menu')->result_array();
    return $query;
  }

  // Detail Menu
  public function detailMenu($id)
  {
    $this->db->select('*');
    $this->db->from('user_menu');
    $this->db->where('id', $id);
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  //Create Menu
  public function createMenu($data)
  {
    $this->db->insert('user_menu', $data);
  }

  // Edit Menu
  public function editMenu($data)
  {
    $this->db->where('id', $data['id']);
    $this->db->update('user_menu', $data);
  }

  // Delete Menu
  public function deleteMenu($data)
  {
    $this->db->where('id', $data['id']);
    $this->db->delete('user_menu', $data);
  }

  // Get Sub Menu
  public function getSubMenu()
  {
    $query = " SELECT `user_sub_menu`.*, `user_menu`.`menu`
    FROM `user_sub_menu` JOIN `user_menu`
    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
    ";
    return $this->db->query($query)->result_array();
  }

  //Create Sub Menu
  public function createSub($data)
  {
    $this->db->insert('user_sub_menu', $data);
  }

  // Edit Sub Menu
  public function editSub($data)
  {
    $this->db->where('id', $data['id']);
    $this->db->update('user_sub_menu', $data);
  }

  // Delete Sub Menu
  public function deleteSub($data)
  {
    $this->db->where('id', $data['id']);
    $this->db->delete('user_sub_menu', $data);
  }
}
