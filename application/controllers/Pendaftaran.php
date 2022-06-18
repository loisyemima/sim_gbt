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
    $config = $this->mConfig->list_config();
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('tempattgl_lahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('nomor', 'Telepon', 'required');
    $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
    $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Pendaftaran Baptis',
        'config' => $config,
        'isi'    => 'front/pendaftaran/baptis'
      );
      $this->load->view('front/templates/wrapper', $data);
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'tempattgl_lahir' => $this->input->post('tempattgl_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'nomor' => $this->input->post('nomor'),
        'nama_ayah' => $this->input->post('nama_ayah'),
        'nama_ibuk' => $this->input->post('nama_ibuk'),
        'status' => 1,
        'tgl_pengajuan' => date('Y-m-d'),
      ];
      $this->mPendaftaran->createBaptis($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Pendaftaran Anda Sudah Terkirim</div>');
      redirect('pendaftaran/baptis');
    }
  }

  public function pernikahan()
  {
    $config = $this->mConfig->list_config();
    $this->form_validation->set_rules('nama_laki', 'Nama Laki', 'required');
    $this->form_validation->set_rules('tempat_laki', 'Tempat Lahir Laki', 'required');
    $this->form_validation->set_rules('lahir_laki', 'Tanggal Lahir Laki', 'required');
    $this->form_validation->set_rules('nama_perempuan', 'Nama Perempuan', 'required');
    $this->form_validation->set_rules('tempat_perempuan', 'Tempat Lahir Perempuan', 'required');
    $this->form_validation->set_rules('lahir_perempuan', 'Tanggal Lahir Perempuan', 'required');
    $this->form_validation->set_rules('nomor', 'No Telp', 'required');


    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Pendaftaran Pernikahan',
        'config' => $config,
        'isi'    => 'front/pendaftaran/pernikahan'
      );
      $this->load->view('front/templates/wrapper', $data);
    } else {
      $data = [
        'nama_laki' => $this->input->post('nama_laki'),
        'tempat_laki' => $this->input->post('tempat_laki'),
        'lahir_laki' => $this->input->post('lahir_laki'),
        'nama_perempuan' => $this->input->post('nama_perempuan'),
        'nomor' => $this->input->post('nomor'),
        'tempat_perempuan' => $this->input->post('tempat_perempuan'),
        'lahir_perempuan' => $this->input->post('lahir_perempuan'),
        'baptis' => $this->input->post('baptis'),
        'status' => 1,
        'date' => date('Y-m-d'),
      ];
      $this->mPendaftaran->createPernikahan($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Pendaftaran Anda Sudah Terkirim</div>');
      redirect('pendaftaran/pernikahan');
    }
  }

  public function anak()
  {
    $config = $this->mConfig->list_config();
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('tempattgl_lahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('nomor', 'Telepon', 'required');
    $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
    $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Pendaftaran Anak',
        'config' => $config,
        'isi'    => 'front/pendaftaran/anak'
      );
      $this->load->view('front/templates/wrapper', $data);
    } else {
      $data = [
        'nama_anak' => $this->input->post('nama_anak'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'tempattgl_lahir' => $this->input->post('tempattgl_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'nomor' => $this->input->post('nomor'),
        'nama_ayah' => $this->input->post('nama_ayah'),
        'nama_ibuk' => $this->input->post('nama_ibuk'),
        'date' => date('Y-m-d'),
        'status' => 1
      ];
      $this->mPendaftaran->createAnak($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Pendaftaran Anda Sudah Terkirim</div>');
      redirect('pendaftaran/pernikahan');
    }
  }
}
