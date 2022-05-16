<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Age extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $user = $this->mAdmin->getData();
    $age = $this->mAge->getAge();

    $this->form_validation->set_rules('name', 'name', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Age Level',
        'user'  => $user,
        'age'  => $age,
        'isi'    => 'admin/age/list'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = [
        'name' => $this->input->post('name')
      ];
      $this->mAge->createAge($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      New age Added!</div>');
      redirect('admin/age');
    }
  }

  public function edit_age($id)
  {

    $data = array(
      'age_id' => $id,
      'name' => $this->input->post('name')
    );

    $this->mAge->editAge($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edit age success!</div>');
    redirect('admin/age');
  }

  public function delete_age($id)
  {
    $data = array('age_id' => $id);
    $this->mAge->deleteAge($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Delete Age success!</div>');
    redirect('admin/age');
  }
}
