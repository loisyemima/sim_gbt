<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $user = $this->mAdmin->getData();
    $total = $this->mAdmin->total();
    $anak = $this->mAdmin->totalAnak();
    $pemuda = $this->mAdmin->totalPemuda();
    $dewasa = $this->mAdmin->totalDewasa();

    $data = array(
      'title'    => 'Dashboard',
      'user'  => $user,
      'total'  => $total,
      'anak'  => $anak,
      'pemuda'  => $pemuda,
      'dewasa'  => $dewasa,
      'isi'    => 'admin/index'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function index2()
  {
    $this->load->view('admin/index2');
  }



  public function role()
  {
    $data['title'] = 'Role';
    $user = $this->mAdmin->getData();
    $role = $this->mAdmin->role();

    $data = array(
      'title'    => 'Role',
      'user'  => $user,
      'role'  => $role,
      'isi'    => 'admin/role'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function roleAccess($role_id)
  {
    $user = $this->mAdmin->getData();
    $role = $this->mAdmin->getRoleaccess($role_id);
    $menu = $this->mAdmin->menu();

    $data = array(
      'title'    => 'Role Access',
      'user'  => $user,
      'role'  => $role,
      'menu'  => $menu,
      'isi'    => 'admin/role-access'
    );
    $this->load->view('templates/wrapper', $data);
  }


  public function changeAccess()
  {
    $menu_id = $this->input->post('menuId');
    $role_id = $this->input->post('roleId');

    $data = [
      'role_id' => $role_id,
      'menu_id' => $menu_id
    ];

    $result = $this->db->get_where('user_access_menu', $data);

    if ($result->num_rows() < 1) {
      $this->db->insert('user_access_menu', $data);
    } else {
      $this->db->delete('user_access_menu', $data);
    }

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Access Changed!</div>');
  }

  public function pendeta()
  {
    $user = $this->mAdmin->getData();
    $total = $this->mAdmin->total();
    $anak = $this->mAdmin->totalAnak();
    $pemuda = $this->mAdmin->totalPemuda();
    $dewasa = $this->mAdmin->totalDewasa();

    $data = array(
      'title'    => 'Dashboard',
      'user'  => $user,
      'total'  => $total,
      'anak'  => $anak,
      'pemuda'  => $pemuda,
      'dewasa'  => $dewasa,
      'isi'    => 'admin/index'
    );
    $this->load->view('templates/wrapper', $data);
  }
}
