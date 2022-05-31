<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

  public function index()
  {
    $gallery = $this->mGallery->getGallery1();
    $gallery2 = $this->mGallery->getGallery2();
    $gallery3 = $this->mGallery->getGallery3();

    $data = array(
      'title'    => 'gallery Gereja',
      'gallery'    => $gallery,
      'gallery2'    => $gallery2,
      'gallery3'    => $gallery3,
      'isi'    => 'front/galeri'
    );
    $this->load->view('front/templates/wrapper', $data);
  }
}
