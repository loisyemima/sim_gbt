<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warta extends CI_Controller
{

  public function index()
  {
    $warta = $this->mWarta->getWarta();

    $data = array(
      'title'    => 'Dashboard',
      'warta' => $warta,
      'isi'    => 'front/warta'
    );
    $this->load->view('front/templates/wrapper', $data);
  }
}
