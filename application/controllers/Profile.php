<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
  public function index()
  {
    $profile = $this->mProfile->getProfile2();

    $data = array(
      'title'    => 'Dashboard',
      'profile' => $profile,
      'isi'    => 'front/profile'
    );
    $this->load->view('front/templates/wrapper', $data);
  }
}
