<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $user = $this->mAdmin->getData();
    $total = $this->mAdmin->total();
    $anak = $this->mAdmin->totalAnak();
    $pemuda = $this->mAdmin->totalPemuda();
    $dewasa = $this->mAdmin->totalDewasa();

    $data = array(
      'title'    => 'Dashboard',
      'user'  => $user,
      'total'  => $total,
      'anak'  => $anak,
      'pemuda'  => $pemuda,
      'dewasa'  => $dewasa,
      'isi'    => 'admin/index'
    );
    $this->load->view('templates/wrapper', $data);
  }
}
