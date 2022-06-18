<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
  public function index()
  {
    $profile = $this->mProfile->getProfile2();
    $config = $this->mConfig->list_config();

    $data = array(
      'title'    => 'Dashboard',
      'profile' => $profile,
      'config' => $config,
      'isi'    => 'front/profile'
    );
    $this->load->view('front/templates/wrapper', $data);
  }
}
