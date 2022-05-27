<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

  public function index()
  {
    $gallery = $this->mGallery->getGallery();

    $data = array(
      'title'    => 'gallery Gereja',
      'gallery'    => $gallery,
      'isi'    => 'front/galeri'
    );
    $this->load->view('front/templates/wrapper', $data);
  }
}
