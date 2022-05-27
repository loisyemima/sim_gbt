<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

  public function index()
  {
    $this->load->view('front/templates/header');
    $this->load->view('front/templates/navbar');
    $this->load->view('front/profile');
    $this->load->view('front/templates/footer');
  }
}
