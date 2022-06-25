<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $user = $this->mAdmin->getData();
    $kegiatan = $this->mKegiatan->getKegiatan();

    $data = array(
      'title'    => 'Kegiatan',
      'user'  => $user,
      'kegiatan'    => $kegiatan,
      'isi'    => 'admin/kegiatan/list'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function create_kegiatan()
  {

    $user = $this->mAdmin->getData();
    $kegiatan = $this->mKegiatan->getkegiatan();

    $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Create Kegiatan',
        'user'  => $user,
        'kegiatan'  => $kegiatan,
        'isi'    => 'admin/kegiatan/create'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = [
        'nama_kegiatan' => $this->input->post('nama_kegiatan'),
        'tgl_kegiatan' => $this->input->post('tgl_kegiatan'),
        'deskripsi' => $this->input->post('deskripsi'),
        'tgl' => date('Y-m-d'),
      ];
      $this->mKegiatan->createKegiatan($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        New kegiatan Added!</div>');
      redirect('admin/kegiatan');
    }
  }

  public function edit_kegiatan($kegiatan_id)
  {
    $user = $this->mAdmin->getData();
    $kegiatan = $this->mKegiatan->detailKegiatan($kegiatan_id);

    $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'required');

    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Edit kegiatan',
        'user'  => $user,
        'kegiatan'  => $kegiatan,
        'isi'    => 'admin/kegiatan/edit'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $data = array(
        'kegiatan_id' => $kegiatan_id,
        'nama_kegiatan' => $this->input->post('nama_kegiatan'),
        'tgl_kegiatan' => $this->input->post('tgl_kegiatan'),
        'deskripsi' => $this->input->post('deskripsi'),
        'tgl' => date('Y-m-d'),
      );

      $this->mkegiatan->editkegiatan($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Edit kegiatan success!</div>');
      redirect('admin/kegiatan');
    }
  }

  // Delete kegiatan
  public function delete_kegiatan($id)
  {
    $data = array('kegiatan_id' => $id);
    $this->mKegiatan->deleteKegiatan($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete kegiatan Succsess!</div>');
    redirect(base_url('admin/kegiatan'));
  }
}
