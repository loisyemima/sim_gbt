<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->library('form_validation');
  }

  //List Pendaftaran Baptis
  public function baptis()
  {
    $user = $this->mAdmin->getData();
    $baptis = $this->mPendaftaran->getBaptis();
    $status = $this->mPendaftaran->getStatus();
    $kode = $this->mPendaftaran->kode();

    $data = array(
      'title'    => 'Pendaftaran Baptis',
      'user'  => $user,
      'baptis'    => $baptis,
      'status'    => $status,
      'kode'    => $kode,
      'isi'    => 'admin/pendaftaran/baptis'
    );
    $this->load->view('templates/wrapper', $data);
  }

  // Edit Status Baptis
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

  // Edit Kode
  public function edit_baptiskod($id)
  {
    $user = $this->mAdmin->getData();
    $baptis = $this->mPendaftaran->detailBaptis($id);
    $status = $this->mPendaftaran->getStatus();
    $kode = $this->mPendaftaran->kode();

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('tempattgl_lahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
    $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
    $this->form_validation->set_rules('kode', 'No Surat', 'required|is_unique[baptis.kode]', [
      'is_unique' => 'No Surat Sudah Pernah Dipakai!!!!'
    ]);
    $this->form_validation->set_rules('hari_tanggal', 'Hari Baptis', 'required');
    $this->form_validation->set_rules('tgl_baptis', 'Tanggal Baptis', 'required');
    $this->form_validation->set_rules('tempat', 'Tempat Baptis', 'required');
    $this->form_validation->set_rules('dilayani', 'Dilayani', 'required');
    $this->form_validation->set_rules('tempat_ttd', 'Tempat TTD', 'required');
    $this->form_validation->set_rules('tgl_ttd', 'Tanggal TTD', 'required');
    $this->form_validation->set_rules('nama_gembala', 'nama_gembala', 'required');
    $this->form_validation->set_rules('nik', 'NIK', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Pendaftaran Baptis',
        'user'  => $user,
        'baptis'    => $baptis,
        'status'    => $status,
        'kode'    => $kode,
        'isi'    => 'admin/pendaftaran/edit_baptis'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = array(
        'baptis_id' => $id,
        'nama' => $this->input->post('nama'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'tempattgl_lahir' => $this->input->post('tempattgl_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'nama_ayah' => $this->input->post('nama_ayah'),
        'nama_ibu' => $this->input->post('nama_ibu'),
        'kode' => $this->input->post('kode'),
        'hari_tanggal' => $this->input->post('hari_tanggal'),
        'tgl_baptis' => $this->input->post('tgl_baptis'),
        'tempat' => $this->input->post('tempat'),
        'dilayani' => $this->input->post('dilayani'),
        'tempat_ttd' => $this->input->post('tempat_ttd'),
        'tgl_ttd' => $this->input->post('tgl_ttd'),
        'nama_gembala' => $this->input->post('nama_gembala'),
        'nik' => $this->input->post('nik'),
        'tgl_edit' => $this->input->post('tgl_edit'),
        'edit' => '1'
      );

      $this->mPendaftaran->editBaptis($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Edit Pendaftaran Baptis success!</div>');
      redirect('admin/pendaftaran/baptis');
    }
  }

  // Edit Pendaftaran Baptis
  public function edit_baptis2($id)
  {
    $user = $this->mAdmin->getData();
    $baptis = $this->mPendaftaran->detailBaptis($id);
    $status = $this->mPendaftaran->getStatus();
    $kode = $this->mPendaftaran->kode();

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('tempattgl_lahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
    $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
    $this->form_validation->set_rules('hari_tanggal', 'Hari Baptis', 'required');
    $this->form_validation->set_rules('tgl_baptis', 'Tanggal Baptis', 'required');
    $this->form_validation->set_rules('tempat', 'Tempat Baptis', 'required');
    $this->form_validation->set_rules('dilayani', 'Dilayani', 'required');
    $this->form_validation->set_rules('tempat_ttd', 'Tempat TTD', 'required');
    $this->form_validation->set_rules('tgl_ttd', 'Tanggal TTD', 'required');
    $this->form_validation->set_rules('nama_gembala', 'nama_gembala', 'required');
    $this->form_validation->set_rules('nik', 'NIK', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Pendaftaran Baptis',
        'user'  => $user,
        'baptis'    => $baptis,
        'status'    => $status,
        'kode'    => $kode,
        'isi'    => 'admin/pendaftaran/edit_baptis2'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = array(
        'baptis_id' => $id,
        'nama' => $this->input->post('nama'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'tempattgl_lahir' => $this->input->post('tempattgl_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'nama_ayah' => $this->input->post('nama_ayah'),
        'nama_ibu' => $this->input->post('nama_ibu'),
        'hari_tanggal' => $this->input->post('hari_tanggal'),
        'tgl_baptis' => $this->input->post('tgl_baptis'),
        'tempat' => $this->input->post('tempat'),
        'dilayani' => $this->input->post('dilayani'),
        'tempat_ttd' => $this->input->post('tempat_ttd'),
        'tgl_ttd' => $this->input->post('tgl_ttd'),
        'nama_gembala' => $this->input->post('nama_gembala'),
        'nik' => $this->input->post('nik'),
        'tgl_edit' => $this->input->post('tgl_edit'),
      );

      $this->mPendaftaran->editBaptis($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Edit Pendaftaran Baptis success!</div>');
      redirect('admin/pendaftaran/baptis');
    }
  }

  // Edit Keterangan (diterima Atau ditolak)
  public function edit_status($id)
  {
    $data = array(
      'baptis_id' => $id,
      'keterangan' => $this->input->post('keterangan'),
    );

    $this->mPendaftaran->editBaptis($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Edit success!</div>');
    redirect('admin/pendaftaran/baptis');
  }

  public function print_baptis($id)
  {
    $user = $this->mAdmin->getData();
    $idb = $this->uri->segment(4);
    $baptis = $this->db->query("SELECT * FROM baptis WHERE baptis_id='$idb'")->result_array();


    $data = array(
      'title'    => 'Print Baptis',
      'user'  => $user,
      'baptis'  => $baptis,
    );
    $this->load->view('admin/pendaftaran/print_baptis', $data);
  }

  public function delete_baptis($id)
  {
    $data = array('baptis_id' => $id);
    $this->mPendaftaran->deleteBaptis($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Delete success!</div>');
    redirect('admin/pendaftaran/baptis');
  }

  // Pernikahan
  public function pernikahan()
  {
    $user = $this->mAdmin->getData();
    $pernikahan = $this->mPendaftaran->getPernikahan();
    $status = $this->mPendaftaran->statusPer();
    $kode = $this->mPendaftaran->kodePer();


    $data = array(
      'title'    => 'Pendaftaran Pernikahan',
      'user'  => $user,
      'pernikahan'    => $pernikahan,
      'status'    => $status,
      'kode'    => $kode,
      'isi'    => 'admin/pendaftaran/pernikahan'
    );
    $this->load->view('templates/wrapper', $data);
  }
  //status
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

  //keterangan
  public function edit_statusper($id)
  {
    $data = array(
      'pernikahan_id' => $id,
      'keterangan' => $this->input->post('keterangan'),
    );

    $this->mPendaftaran->editPernikahan($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Verifikasi success!</div>');
    redirect('admin/pendaftaran/pernikahan');
  }

  public function edit_pernikahankod($id)
  {
    $user = $this->mAdmin->getData();
    $pernikahan = $this->mPendaftaran->detailPer($id);
    $status = $this->mPendaftaran->statusPer();
    $kode = $this->mPendaftaran->kodePer();

    $this->form_validation->set_rules('nama_laki', 'Nama Laki', 'required');
    $this->form_validation->set_rules('tempat_laki', 'Tempat Lahir Laki', 'required');
    $this->form_validation->set_rules('lahir_laki', 'Tanggal Lahir Laki', 'required');
    $this->form_validation->set_rules('nama_perempuan', 'Nama Perempuan', 'required');
    $this->form_validation->set_rules('tempat_perempuan', 'Tempat Lahir Perempuan', 'required');
    $this->form_validation->set_rules('lahir_perempuan', 'Tanggal Lahir Perempuan', 'required');
    $this->form_validation->set_rules('kode', 'No Surat', 'required|is_unique[baptis.kode]', [
      'is_unique' => 'No Surat Sudah Pernah Dipakai!!!!'
    ]);
    $this->form_validation->set_rules('hari_penyerahan', 'Hari Pernyerahan', 'required');
    $this->form_validation->set_rules('tgl_pernyerahan', 'Tanggal Pernyerahan', 'required');
    $this->form_validation->set_rules('tempat', 'Tempat pernyerahan', 'required');
    $this->form_validation->set_rules('dilayani', 'Dilayani', 'required');
    $this->form_validation->set_rules('tempattgl_ttd', 'Tempat TTD', 'required');
    $this->form_validation->set_rules('tgl_ttd', 'Tanggal TTD', 'required');
    $this->form_validation->set_rules('nama_ttd', 'Nama Gembala', 'required');
    $this->form_validation->set_rules('nik', 'NIK', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Pendaftaran Pernikahan',
        'user'  => $user,
        'pernikahan'    => $pernikahan,
        'status'    => $status,
        'kode'    => $kode,
        'isi'    => 'admin/pendaftaran/edit_pernikahan'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = array(
        'pernikahan_id' => $id,
        'nama_laki' => $this->input->post('nama_laki'),
        'tempat_laki' => $this->input->post('tempat_laki'),
        'lahir_laki' => $this->input->post('lahir_laki'),
        'nama_perempuan' => $this->input->post('nama_perempuan'),
        'tempat_perempuan' => $this->input->post('tempat_perempuan'),
        'lahir_perempuan' => $this->input->post('lahir_perempuan'),
        'kode' => $this->input->post('kode'),
        'hari_pernikahan' => $this->input->post('hari_pernikahan'),
        'tgl_pernikahan' => $this->input->post('tgl_pernikahan'),
        'tempat' => $this->input->post('tempat'),
        'dilayani' => $this->input->post('dilayani'),
        'tempattgl_ttd' => $this->input->post('tempattgl_ttd'),
        'tgl_ttd' => $this->input->post('tgl_ttd'),
        'nama_ttd' => $this->input->post('nama_ttd'),
        'nik' => $this->input->post('nik'),
        'tgl_edit' => date('Y-m-d'),
        'edit' => '1'
      );

      $this->mPendaftaran->editPernikahan($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Edit success!</div>');
      redirect('admin/pendaftaran/pernikahan');
    }
  }
  public function edit_pernikahan2($id)
  {
    $user = $this->mAdmin->getData();
    $pernikahan = $this->mPendaftaran->detailPer($id);
    $status = $this->mPendaftaran->statusPer();
    $kode = $this->mPendaftaran->kodePer();

    $this->form_validation->set_rules('nama_laki', 'Nama Laki', 'required');
    $this->form_validation->set_rules('tempat_laki', 'Tempat Lahir Laki', 'required');
    $this->form_validation->set_rules('lahir_laki', 'Tanggal Lahir Laki', 'required');
    $this->form_validation->set_rules('nama_perempuan', 'Nama Perempuan', 'required');
    $this->form_validation->set_rules('tempat_perempuan', 'Tempat Lahir Perempuan', 'required');
    $this->form_validation->set_rules('lahir_perempuan', 'Tanggal Lahir Perempuan', 'required');
    $this->form_validation->set_rules('hari_penyerahan', 'Hari Pernyerahan', 'required');
    $this->form_validation->set_rules('tgl_pernyerahan', 'Tanggal Pernyerahan', 'required');
    $this->form_validation->set_rules('tempat', 'Tempat pernyerahan', 'required');
    $this->form_validation->set_rules('dilayani', 'Dilayani', 'required');
    $this->form_validation->set_rules('tempattgl_ttd', 'Tempat TTD', 'required');
    $this->form_validation->set_rules('tgl_ttd', 'Tanggal TTD', 'required');
    $this->form_validation->set_rules('nama_ttd', 'Nama Gembala', 'required');
    $this->form_validation->set_rules('nik', 'NIK', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Pendaftaran Pernikahan',
        'user'  => $user,
        'pernikahan'    => $pernikahan,
        'status'    => $status,
        'kode'    => $kode,
        'isi'    => 'admin/pendaftaran/edit_pernikahan2'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = array(
        'pernikahan_id' => $id,
        'nama_laki' => $this->input->post('nama_laki'),
        'tempat_laki' => $this->input->post('tempat_laki'),
        'lahir_laki' => $this->input->post('lahir_laki'),
        'nama_perempuan' => $this->input->post('nama_perempuan'),
        'tempat_perempuan' => $this->input->post('tempat_perempuan'),
        'lahir_perempuan' => $this->input->post('lahir_perempuan'),
        'hari_pernikahan' => $this->input->post('hari_pernikahan'),
        'tgl_pernikahan' => $this->input->post('tgl_pernikahan'),
        'tempat' => $this->input->post('tempat'),
        'dilayani' => $this->input->post('dilayani'),
        'tempattgl_ttd' => $this->input->post('tempattgl_ttd'),
        'tgl_ttd' => $this->input->post('tgl_ttd'),
        'nama_ttd' => $this->input->post('nama_ttd'),
        'nik' => $this->input->post('nik'),
        'tgl_edit' => date('Y-m-d'),
        'edit' => '1'
      );

      $this->mPendaftaran->editPernikahan($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Edit success!</div>');
      redirect('admin/pendaftaran/pernikahan');
    }
  }

  public function delete_pernikahan($id)
  {
    $data = array('pernikahan_id' => $id);
    $this->mPendaftaran->deletePernikahan($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Delete success!</div>');
    redirect('admin/pendaftaran/pernikahan');
  }

  public function print_pernikahan($id)
  {
    $user = $this->mAdmin->getData();
    $idp = $this->uri->segment(4);
    $pernikahan = $this->db->query("SELECT * FROM pernikahan WHERE pernikahan_id='$idp'")->result_array();

    $data = array(
      'title'    => 'Print Pernikahan',
      'user'  => $user,
      'pernikahan' => $pernikahan
    );
    $this->load->view('admin/pendaftaran/print_pernikahan', $data);
  }

  // Penyerahan Anak
  public function anak()
  {
    $user = $this->mAdmin->getData();
    $anak = $this->mPendaftaran->getAnak();
    $status = $this->mPendaftaran->statusAnak();
    $kode = $this->mPendaftaran->kodeAnak();

    $data = array(
      'title'    => 'Pendaftaran Penyerahan Anak',
      'user'  => $user,
      'anak'    => $anak,
      'status'    => $status,
      'kode'    => $kode,
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

  public function edit_statusank($id)
  {
    $data = array(
      'anak_id' => $id,
      'keterangan' => $this->input->post('keterangan'),
    );

    $this->mPendaftaran->editAnak($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Verifikasi success!</div>');
    redirect('admin/pendaftaran/anak');
  }


  public function edit_anakkod($id)
  {
    $user = $this->mAdmin->getData();
    $anak = $this->mPendaftaran->detailAnak($id);
    $status = $this->mPendaftaran->statusPer();
    $kode = $this->mPendaftaran->kodePer();

    $this->form_validation->set_rules('nama_anak', 'Nama', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('tempattgl_lahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
    $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
    $this->form_validation->set_rules('kode', 'No Surat', 'required|is_unique[baptis.kode]', [
      'is_unique' => 'No Surat Sudah Pernah Dipakai!!!!'
    ]);
    $this->form_validation->set_rules('hari_penyerahan', 'Hari Pernyerahan', 'required');
    $this->form_validation->set_rules('tgl_pernyerahan', 'Tanggal Pernyerahan', 'required');
    $this->form_validation->set_rules('tempat', 'Tempat pernyerahan', 'required');
    $this->form_validation->set_rules('dilayani', 'Dilayani', 'required');
    $this->form_validation->set_rules('tempattgl_ttd', 'Tempat TTD', 'required');
    $this->form_validation->set_rules('tgl_ttd', 'Tanggal TTD', 'required');
    $this->form_validation->set_rules('nama_ttd', 'Nama Gembala', 'required');
    $this->form_validation->set_rules('nik', 'NIK', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Pendaftaran Penyerahan Anak',
        'user'  => $user,
        'anak'    => $anak,
        'status'    => $status,
        'kode'    => $kode,
        'isi'    => 'admin/pendaftaran/edit_anak'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = array(
        'anak_id' => $id,
        'nama_anak' => $this->input->post('nama_anak'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'tempattgl_lahir' => $this->input->post('tempattgl_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'nama_ayah' => $this->input->post('nama_ayah'),
        'nama_ibu' => $this->input->post('nama_ibu'),
        'kode' => $this->input->post('kode'),
        'hari_penyerahan' => $this->input->post('hari_penyerahan'),
        'tgl_penyerahan' => $this->input->post('tgl_penyerahan'),
        'tempat' => $this->input->post('tempat'),
        'dilayani' => $this->input->post('dilayani'),
        'tempattgl_ttd' => $this->input->post('tempattgl_ttd'),
        'tgl_ttd' => $this->input->post('tgl_ttd'),
        'nama_ttd' => $this->input->post('nama_ttd'),
        'nik' => $this->input->post('nik'),
        'tgl_edit' => date('Y-m-d'),
        'edit' => '1'
      );

      $this->mPendaftaran->editAnak($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Edit success!</div>');
      redirect('admin/pendaftaran/anak');
    }
  }

  public function edit_anak2($id)
  {
    $user = $this->mAdmin->getData();
    $anak = $this->mPendaftaran->detailAnak($id);
    $status = $this->mPendaftaran->statusAnak();
    $kode = $this->mPendaftaran->kodeAnak();

    $this->form_validation->set_rules('nama_anak', 'Nama', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('tempattgl_lahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
    $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
    $this->form_validation->set_rules('hari_penyerahan', 'Hari Pernyerahan', 'required');
    $this->form_validation->set_rules('tgl_pernyerahan', 'Tanggal Pernyerahan', 'required');
    $this->form_validation->set_rules('tempat', 'Tempat pernyerahan', 'required');
    $this->form_validation->set_rules('dilayani', 'Dilayani', 'required');
    $this->form_validation->set_rules('tempattgl_ttd', 'Tempat TTD', 'required');
    $this->form_validation->set_rules('tgl_ttd', 'Tanggal TTD', 'required');
    $this->form_validation->set_rules('nama_ttd', 'Nama Gembala', 'required');
    $this->form_validation->set_rules('nik', 'NIK', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Pendaftaran Penyerahan Anak',
        'user'  => $user,
        'anak'    => $anak,
        'status'    => $status,
        'kode'    => $kode,
        'isi'    => 'admin/pendaftaran/edit_anak2'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = array(
        'anak_id' => $id,
        'nama_anak' => $this->input->post('nama_anak'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'tempattgl_lahir' => $this->input->post('tempattgl_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'nama_ayah' => $this->input->post('nama_ayah'),
        'nama_ibu' => $this->input->post('nama_ibu'),
        'hari_penyerahan' => $this->input->post('hari_penyerahan'),
        'tgl_penyerahan' => $this->input->post('tgl_penyerahan'),
        'tempat' => $this->input->post('tempat'),
        'dilayani' => $this->input->post('dilayani'),
        'tempattgl_ttd' => $this->input->post('tempattgl_ttd'),
        'tgl_ttd' => $this->input->post('tgl_ttd'),
        'nama_ttd' => $this->input->post('nama_ttd'),
        'nik' => $this->input->post('nik'),
        'tgl_edit' => date('Y-m-d'),
        'edit' => '1'
      );

      $this->mPendaftaran->editAnak($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Edit success!</div>');
      redirect('admin/pendaftaran/anak');
    }
  }

  public function print_anak($id)
  {
    $user = $this->mAdmin->getData();
    $user = $this->mAdmin->getData();
    $ida = $this->uri->segment(4);
    $anak = $this->db->query("SELECT * FROM anak WHERE anak_id='$ida'")->result_array();

    $data = array(
      'title'    => 'Print Anak',
      'user'  => $user,
      'anak'  => $anak,
    );
    $this->load->view('admin/pendaftaran/print_anak', $data);
  }

  public function delete_anak($id)
  {
    $data = array('anak_id' => $id);
    $this->mPendaftaran->deleteAnak($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Delete success!</div>');
    redirect('admin/pendaftaran/anak');
  }
}
