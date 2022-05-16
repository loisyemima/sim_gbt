<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $user = $this->mAdmin->getData();
    $user2 = $this->mAdmin->getUser();

    $data = array(
      'title'    => 'Daftar Anggota Jemaat',
      'user'  => $user,
      'user2'  => $user2,
      'isi'    => 'admin/user_admin/list'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function edit_user($id)
  {
    $user = $this->mAdmin->getData();
    $user2 = $this->mUser->detailUser($id);

    // Validation
    $v = $this->form_validation;
    $v->set_rules('name', 'Name', 'required');

    if ($v->run()) {
      if (!empty($_FILES['image']['name'])) {

        $config['upload_path']     = './assets/img/profile/';
        $config['allowed_types']   = 'gif|jpg|png';
        $config['max_size']      = '1000'; // KB			
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {

          $data = array(
            'title'    => 'Create Anggota',
            'user'  => $user,
            'user2'  => $user2,
            'isi'    => 'admin/user_admin/edit'
          );
          $this->load->view('templates/wrapper', $data);
        } else {
          //hapus foto lama
          if ($user2['image'] != "") {
            unlink('./assets/img/profile/' . $user2['image']);
          }
          $upload_data        = array('uploads' => $this->upload->data());
          $config['image_library']  = 'gd2';
          $config['source_image']   = './assets/img/profile/' . $upload_data['uploads']['file_name'];
          $config['create_thumb']   = TRUE;
          $config['quality']       = "100%";
          $config['maintain_ratio']   = FALSE;
          $config['width']       = 360; // Pixel
          $config['height']       = 200; // Pixel
          $config['x_axis']       = 0;
          $config['y_axis']       = 0;
          $config['thumb_marker']   = '';
          $this->load->library('image_lib', $config);
          $this->image_lib->resize();

          $i = $this->input;

          $data = array(

            'id' => $user2['id'],
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'image'      => $upload_data['uploads']['file_name'],
            'email' => $this->input->post('email'),
          );

          $this->mUser->editUser($data);
          $this->session->set_flashdata('sukses', 'Success');
          redirect(base_url('admin/user'));
        }
      } else {

        $i = $this->input;
        $data = array(
          'id'    => $user2['id'],
          'name' => $this->input->post('name'),
          'username' => $this->input->post('username'),
          'email' => $this->input->post('email'),
        );

        $this->mUser->editUser($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/user'));
      }
    }

    $data = array(

      'title'    => 'Edit profile gereja',
      'user'  => $user,
      'user2'  => $user2,
      'isi'    => 'admin/user_admin/edit'
    );
    $this->load->view('templates/wrapper', $data);
  }

  // Delete user
  public function delete_user($id)
  {
    $data = array('id' => $id);
    $this->mUser->deleteUser($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete user Succsess!</div>');
    redirect(base_url('admin/user'));
  }
}
