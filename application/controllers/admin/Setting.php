<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function lokasi()
  {
    $user = $this->mAdmin->getData();
    $site = $this->mConfig->list_config();
    $this->form_validation->set_rules('lokasi', 'Google Maps Frame', 'required');

    if ($this->form_validation->run() === FALSE) {
      $data = array(
        'title'  => 'Lokasi',
        'site'  => $site,
        'user'  => $user,
        'isi'  => 'admin/setting/lokasi'
      );

      $this->load->view('templates/wrapper', $data);
    } else {

      $i = $this->input;
      $data = array(
        'config_id'  => $i->post('config_id'),
        'lokasi' => $i->post('lokasi'),
      );
      $this->mConfig->edit_config($data);
      $this->session->set_flashdata('sukses', 'Configuration has updated');
      redirect(base_url('admin/setting/lokasi'));
    }
  }

  public function sosmed()
  {
    $user = $this->mAdmin->getData();
    $site = $this->mConfig->list_config();
    $this->form_validation->set_rules('facebook', 'Facebook', 'required');

    if ($this->form_validation->run() === FALSE) {
      $data = array(
        'title'  => 'Sosial Media',
        'site'  => $site,
        'user'  => $user,
        'isi'  => 'admin/setting/sosmed'
      );

      $this->load->view('templates/wrapper', $data);
    } else {

      $i = $this->input;
      $data = array(
        'config_id'  => $i->post('config_id'),
        'facebook' => $i->post('facebook'),
        'instagram' => $i->post('instagram'),
        'whatsapp' => $i->post('whatsapp'),
      );
      $this->mConfig->edit_config($data);
      $this->session->set_flashdata('sukses', 'Configuration has updated');
      redirect(base_url('admin/setting/sosmed'));
    }
  }

  public function header()
  {
    $user = $this->mAdmin->getData();
    $site = $this->mConfig->list_config();

    $v = $this->form_validation;
    $v->set_rules('ket', 'Teks', 'required');
    if ($v->run()) {
      if (!empty($_FILES['image']['name'])) {
        $config['upload_path']     = './assets/img/logo/';
        $config['allowed_types']   = 'gif|jpg|png|jpeg';
        $config['max_size']      = '1000'; // KB			
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {

          $data = array(
            'title'  => 'Header Dashboard',
            'site'  => $site,
            'user'  => $user,
            'isi'  => 'admin/setting/header'
          );
          $this->load->view('templates/wrapper', $data);
        } else {
          if ($site['image'] != "") {
            unlink('./assets/img/logo/' . $site['image']);
          }
          $upload_data        = array(
            'uploads' => $this->upload->data(),
          );
          $config['image_library']  = 'gd2';
          $config['source_image']   = './assets/img/logo/' . $upload_data['uploads']['file_name'];
          $config['quality']       = "100%";
          $config['maintain_ratio']   = FALSE;
          $config['y_axis']       = 0;
          $config['thumb_marker']   = '';

          $data = [
            'config_id'  => $this->input->post('config_id'),
            'image' => $upload_data['uploads']['file_name'],
            'ket' => $this->input->post('ket'),
          ];
          $this->mConfig->edit_config($data);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Edit Header Added!</div>');
          redirect('admin/setting/header');
        }
      } else {
        $data = [
          'config_id'  => $this->input->post('config_id'),
          'ket' => $this->input->post('ket'),
        ];
        $this->mConfig->edit_config($data);
        $this->session->set_flashdata('sukses', 'Configuration has updated');
        redirect(base_url('admin/setting/header'));
      }
    }
    $data = array(
      'title'  => 'Header Dashboard',
      'site'  => $site,
      'user'  => $user,
      'isi'  => 'admin/setting/header'
    );

    $this->load->view('templates/wrapper', $data);
  }
}
