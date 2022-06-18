<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $user = $this->mAdmin->getData();
    $menu = $this->mMenu->getMenu();

    $this->form_validation->set_rules('menu', 'Menu', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Menu Management',
        'user'  => $user,
        'menu'  => $menu,
        'isi'    => 'admin/menu'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = [
        'menu' => $this->input->post('menu')
      ];
      $this->mMenu->createMenu($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        New Menu Added!</div>');
      redirect('admin/menu');
    }
  }

  public function edit_menu($id)
  {

    $data = array(
      'id' => $id,
      'menu' => $this->input->post('menu')
    );

    $this->mMenu->editMenu($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edit Sub Menu success!</div>');
    redirect('admin/menu');
  }

  public function delete_menu($id)
  {
    $data = array('id' => $id);
    $this->mMenu->deleteMenu($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Delete Menu success!</div>');
    redirect('admin/menu');
  }

  public function submenu()
  {
    $subMenu = $this->mMenu->getSubMenu();
    $user = $this->mAdmin->getData();
    $menu = $this->mMenu->getMenu();

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('menu_id', 'Menu', 'required');
    $this->form_validation->set_rules('url', 'URL', 'required');
    $this->form_validation->set_rules('icon', 'Icon', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Sub Menu Management',
        'menu' => $menu,
        'user'  => $user,
        'subMenu'  => $subMenu,
        'isi'    => 'admin/submenu'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = [
        'title' => $this->input->post('title'),
        'menu_id' => $this->input->post('menu_id'),
        'url' => $this->input->post('url'),
        'icon' => $this->input->post('icon'),
        'is_active' => $this->input->post('is_active'),
        'menu_order' => $this->input->post('menu_order')
      ];
      $this->mMenu->createSub($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        New Sub Menu Added!</div>');
      redirect('admin/menu/submenu');
    }
  }

  public function edit_submenu($id)
  {

    $data = array(
      'id' => $id,
      'title' => $this->input->post('title'),
      'menu_id' => $this->input->post('menu_id'),
      'url' => $this->input->post('url'),
      'icon' => $this->input->post('icon'),
      'is_active' => $this->input->post('is_active'),
      'menu_order' => $this->input->post('menu_order')
    );

    $this->mMenu->editSub($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edit Sub Menu success!</div>');
    redirect('admin/menu/submenu');
  }

  public function delete_submenu($id)
  {
    $data = array('id' => $id);
    $this->mMenu->deleteSub($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Delete Menu success!</div>');
    redirect('admin/menu/submenu');
  }
}
