<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function index()
  {
    $pengurus = $this->mPelayan->getPengurus();
    $config = $this->mConfig->list_config();

    $data = array(
      'title'    => 'Dashboard',
      'pengurus' => $pengurus,
      'config' => $config,
      'isi'    => 'front/dashboard'
    );
    $this->load->view('front/templates/wrapper', $data);
  }
}
