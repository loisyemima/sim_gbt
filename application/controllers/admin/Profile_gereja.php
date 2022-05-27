<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_gereja extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $user = $this->mAdmin->getData();
    $profile = $this->mProfile->getProfile();

    $data = array(
      'title'    => 'Profile Gereja',
      'user'  => $user,
      'profile'    => $profile,
      'isi'    => 'admin/profile_gereja/list'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function create_profile()
  {

    $user = $this->mAdmin->getData();

    $v = $this->form_validation;
    $v->set_rules('image_name', 'Image Name', 'required');

    if ($v->run()) {

      $config['upload_path']     = './assets/img/upload/';
      $config['allowed_types']   = 'gif|jpg|png';
      $config['max_size']      = '1000'; // KB			
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {

        $data = array(
          'title'      => 'Create Profile Gereja',
          'user'  => $user,
          'isi'      => 'admin/profile_gereja/create'
        );
        $this->load->view('templates/wrapper', $data);
      } else {
        $upload_data        = array('uploads' => $this->upload->data());
        $config['image_library']  = 'gd2';
        $config['source_image']   = './assets/img/upload/' . $upload_data['uploads']['file_name'];
        $config['new_image']     = './assets/img/upload/thumbs/';
        $config['create_thumb']   = TRUE;
        $config['maintain_ratio']   = TRUE;
        $config['width']       = 150; // Pixel
        $config['height']       = 150; // Pixel
        $config['thumb_marker']   = '';
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $i = $this->input;
        $data = array(
          'image'      => $upload_data['uploads']['file_name'],
          'image_name'  => $i->post('image_name'),
          'description'  => $i->post('description'),
          'date'      => date('Y-m-d'),
        );
        $this->mProfile->createProfile($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/profile_gereja/'));
      }
    }
    $data = array(
      'title'    => 'Create Profile Gereja',
      'user'  => $user,
      'isi'    => 'admin/profile_gereja/create'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function edit_profile($profile_id)
  {
    $profile  = $this->mProfile->detailProfile($profile_id);
    $user = $this->mAdmin->getData();

    // Validation
    $v = $this->form_validation;
    $v->set_rules('image_name', 'Image Name', 'required');

    if ($v->run()) {
      if (!empty($_FILES['image']['name'])) {

        $config['upload_path']     = './assets/img/upload/';
        $config['allowed_types']   = 'gif|jpg|png';
        $config['max_size']      = '1000'; // KB			
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {

          $data = array(
            'title'      => 'Edit Profile Gereja',
            'user'  => $user,
            'profile' => $profile,
            'isi'      => 'admin/profile_gereja/edit'
          );
          $this->load->view('templates/wrapper', $data);
        } else {
          //hapus foto lama
          if ($profile['image'] != "") {
            unlink('./assets/img/upload/' . $profile['image']);
            unlink('./assets/img/upload/thumbs/' . $profile['image']);
          }
          $upload_data        = array('uploads' => $this->upload->data());
          $config['image_library']  = 'gd2';
          $config['source_image']   = './assets/img/upload/' . $upload_data['uploads']['file_name'];
          $config['new_image']     = './assets/img/upload/thumbs/';
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

            'profile_id'    => $profile['profile_id'],
            'image'      => $upload_data['uploads']['file_name'],
            'image_name'  => $i->post('image_name'),
            'description'  => $i->post('description'),
            'date'      => date('Y-m-d'),
          );

          $this->mProfile->editProfile($data);
          $this->session->set_flashdata('sukses', 'Success');
          redirect(base_url('admin/profile_gereja'));
        }
      } else {

        $i = $this->input;
        $data = array(
          'profile_id'    => $profile['profile_id'],
          'image_name'  => $i->post('image_name'),
          'description' => $i->post('description')
        );

        $this->mProfile->editProfile($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/profile_gereja'));
      }
    }

    $data = array(

      'title'    => 'Edit profile gereja',
      'profile'  => $profile,
      'user'  => $user,
      'isi'    => 'admin/profile_gereja/edit'
    );
    $this->load->view('templates/wrapper', $data);
  }

  // Delete profile
  public function delete_profile($id)
  {
    $data = array('profile_id' => $id);
    $this->mProfile->deleteProfile($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete profile Succsess!</div>');
    redirect(base_url('admin/profile_gereja'));
  }
}
