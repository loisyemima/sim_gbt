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
    $this->form_validation->set_rules('google_maps', 'Google Maps Frame', 'required');

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
      redirect(base_url('admin/dashboard/locations'));
    }
  }
}
