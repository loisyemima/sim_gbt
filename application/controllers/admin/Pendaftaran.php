<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function baptis()
  {
    $user = $this->mAdmin->getData();
    $baptis = $this->mPendaftaran->getBaptis();
    $status = $this->mPendaftaran->getStatus();

    $data = array(
      'title'    => 'Pendaftaran Baptis',
      'user'  => $user,
      'baptis'    => $baptis,
      'status'    => $status,
      'isi'    => 'admin/pendaftaran/baptis'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function edit_baptis($id)
  {
    $data = array(
      'baptis_id' => $id,
      'status' => $this->input->post('status'),
    );

    $this->mPendaftaran->editBaptis($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Verifikasi success!</div>');
    redirect('admin/pendaftaran/baptis');
  }
  // Pernikahan
  public function pernikahan()
  {
    $user = $this->mAdmin->getData();
    $pernikahan = $this->mPendaftaran->getPernikahan();


    $data = array(
      'title'    => 'Pendaftaran Pernikahan',
      'user'  => $user,
      'pernikahan'    => $pernikahan,
      'isi'    => 'admin/pendaftaran/pernikahan'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function edit_pernikahan($id)
  {
    $data = array(
      'pernikahan_id' => $id,
      'status' => $this->input->post('status'),
    );

    $this->mPendaftaran->editPernikahan($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Verifikasi success!</div>');
    redirect('admin/pendaftaran/pernikahan');
  }

  // Penyerahan Anak
  public function anak()
  {
    $user = $this->mAdmin->getData();
    $anak = $this->mPendaftaran->getAnak();

    $data = array(
      'title'    => 'Pendaftaran Penyerahan Anak',
      'user'  => $user,
      'anak'    => $anak,
      'isi'    => 'admin/pendaftaran/anak'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function edit_anak($id)
  {
    $data = array(
      'anak_id' => $id,
      'status' => $this->input->post('status'),
    );

    $this->mPendaftaran->editAnak($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Verifikasi success!</div>');
    redirect('admin/pendaftaran/anak');
  }
}
