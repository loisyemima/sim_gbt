<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }


  public function index()
  {
    $user = $this->mAdmin->getData();
    $pelayan = $this->mPelayan->getPelayan();

    $data = array(
      'title'    => 'Daftar Pelayan',
      'user'  => $user,
      'pelayan'  => $pelayan,
      'member'  => $this->mPelayan->name(),
      'isi'    => 'admin/pelayan/list'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function create_pelayan()
  {
    $user = $this->mAdmin->getData();
    $pelayan = $this->mPelayan->getPelayan();

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('description', 'Description', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Create Anggota',
        'user'  => $user,
        'pelayan'  => $pelayan,
        'member'  => $this->mPelayan->name(),
        'isi'    => 'admin/pelayan/create'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = [
        'name' => $this->input->post('name'),
        'level' => $this->input->post('level'),
        'description' => $this->input->post('description'),
      ];
      $this->mPelayan->createPelayan($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        New Pelayan Added!</div>');
      redirect('admin/pelayan');
    }
  }

  public function edit_pelayan($id)
  {
    $user = $this->mAdmin->getData();
    $pelayan = $this->mPelayan->detailPelayan($id);

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('description', 'Description', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Edit Pelayan',
        'user'  => $user,
        'pelayan'  => $pelayan,
        'member'  => $this->mPelayan->name(),
        'isi'    => 'admin/pelayan/edit'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = array(
        'pelayan_id' => $id,
        'name' => $this->input->post('name'),
        'level' => $this->input->post('level'),
        'description' => $this->input->post('description')
      );

      $this->mPelayan->editPelayan($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Edit Pelayan success!</div>');
      redirect('admin/Pelayan');
    }
  }

  public function delete_pelayan($id)
  {
    $data = array('pelayan_id' => $id);
    $this->mPelayan->deletePelayan($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Delete Pelayan success!</div>');
    redirect('admin/Pelayan');
  }
}
