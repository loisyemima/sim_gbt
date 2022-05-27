<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warta extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $user = $this->mAdmin->getData();
    $warta = $this->mWarta->getWarta();

    $data = array(
      'title'    => 'Warta',
      'user'  => $user,
      'warta'    => $warta,
      'isi'    => 'admin/warta/list'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function create_warta()
  {

    $user = $this->mAdmin->getData();

    $v = $this->form_validation;
    $v->set_rules('description', 'Description', 'required');

    if ($v->run()) {

      $config['upload_path']     = './assets/img/upload/';
      $config['allowed_types']   = 'gif|jpg|png';
      $config['max_size']      = '1000'; // KB			
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {

        $data = array(
          'title'      => 'Create Warta',
          'user'  => $user,
          'isi'      => 'admin/warta/create'
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
          'date'      => date('Y-m-d'),
          'description'  => $i->post('description'),
        );
        $this->mWarta->createWarta($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/warta/'));
      }
    }
    $data = array(
      'title'    => 'Create Warta Gereja',
      'user'  => $user,
      'isi'    => 'admin/warta/create'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function edit_warta($warta_id)
  {
    $warta  = $this->mWarta->detailWarta($warta_id);
    $user = $this->mAdmin->getData();

    // Validation
    $v = $this->form_validation;
    $v->set_rules('description', 'Description', 'required');

    if ($v->run()) {
      if (!empty($_FILES['image']['name'])) {

        $config['upload_path']     = './assets/img/upload/';
        $config['allowed_types']   = 'gif|jpg|png';
        $config['max_size']      = '1000'; // KB			
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {

          $data = array(
            'title'      => 'Edit Warta',
            'user'  => $user,
            'warta' => $warta,
            'isi'      => 'admin/warta_gereja/edit'
          );
          $this->load->view('templates/wrapper', $data);
        } else {
          //hapus foto lama
          if ($warta['image'] != "") {
            unlink('./assets/img/upload/' . $warta['image']);
            unlink('./assets/img/upload/thumbs/' . $warta['image']);
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

            'warta_id'    => $warta['warta_id'],
            'image'      => $upload_data['uploads']['file_name'],
            'date'      => date('Y-m-d'),
            'description'  => $i->post('description'),
          );

          $this->mWarta->editWarta($data);
          $this->session->set_flashdata('sukses', 'Success');
          redirect(base_url('admin/warta/'));
        }
      } else {

        $i = $this->input;
        $data = array(
          'warta_id'    => $warta['warta_id'],
          'date'  => date('Y-m-d'),
          'description' => $i->post('description')
        );

        $this->mWarta->editWarta($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/warta'));
      }
    }

    $data = array(

      'title'    => 'Edit Warta',
      'warta'  => $warta,
      'user'  => $user,
      'isi'    => 'admin/warta/edit'
    );
    $this->load->view('templates/wrapper', $data);
  }

  // Delete warta
  public function delete_warta($id)
  {
    $data = array('warta_id' => $id);
    $this->mWarta->deleteWarta($data);
    $this->session->set_flashdata('messevent', '<div class="alert alert-success" role="alert">
        Delete warta Succsess!</div>');
    redirect(base_url('admin/warta'));
  }
}
