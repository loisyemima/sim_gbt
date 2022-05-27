<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

  public function index()
  {

    $data = array(
      'title'    => 'Pendaftaran Baptis',
      'isi'    => 'front/pendaftaran/list'
    );
    $this->load->view('front/templates/wrapper', $data);
  }

  public function baptis()
  {
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('birth', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('number', 'Telepon', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Pendaftaran Baptis',
        'isi'    => 'front/pendaftaran/baptis'
      );
      $this->load->view('front/templates/wrapper', $data);
    } else {
      $data = [
        'name' => $this->input->post('name'),
        'place' => $this->input->post('place'),
        'birth' => $this->input->post('birth'),
        'number' => $this->input->post('number'),
        'date' => date('Y-m-d'),
        'status' => 1
      ];
      $this->mPendaftaran->createBaptis($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Pendaftaran Anda Sudah Terkirim</div>');
      redirect('pendaftaran/baptis');
    }
  }

  public function pernikahan()
  {

    $this->form_validation->set_rules('name_male', 'Name', 'required');
    $this->form_validation->set_rules('name_female', 'Name', 'required');
    $this->form_validation->set_rules('number', 'Telepon', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Pendaftaran Pernikahan',
        'isi'    => 'front/pendaftaran/pernikahan'
      );
      $this->load->view('front/templates/wrapper', $data);
    } else {
      $data = [
        'name_male' => $this->input->post('name_male'),
        'name_female' => $this->input->post('name_female'),
        'domisili' => $this->input->post('domisili'),
        'number' => $this->input->post('number'),
        'baptis' => $this->input->post('baptis'),
        'date' => date('Y-m-d'),
        'status' => 1
      ];
      $this->mPendaftaran->createPernikahan($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Pendaftaran Anda Sudah Terkirim</div>');
      redirect('pendaftaran/pernikahan');
    }
  }

  public function anak()
  {

    $this->form_validation->set_rules('nama_wali', 'Name', 'required');
    $this->form_validation->set_rules('nama_anak', 'Name', 'required');
    $this->form_validation->set_rules('number', 'Telepon', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Pendaftaran Anak',
        'isi'    => 'front/pendaftaran/anak'
      );
      $this->load->view('front/templates/wrapper', $data);
    } else {
      $data = [
        'nama_wali' => $this->input->post('nama_wali'),
        'nama_anak' => $this->input->post('nama_anak'),
        'place' => $this->input->post('place'),
        'birth' => $this->input->post('birth'),
        'number' => $this->input->post('number'),
        'date' => date('Y-m-d'),
      ];
      $this->mPendaftaran->createAnak($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Pendaftaran Anda Sudah Terkirim</div>');
      redirect('pendaftaran/pernikahan');
    }
  }
}
