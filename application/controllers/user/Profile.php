<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $user = $this->mAdmin->getData();

    $data = array(
      'title'    => 'My Profile',
      'user'  => $user,
      'isi'    => 'user/index'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function edit_profile()
  {
    $user = $this->mAdmin->getData();
    $user2 = $this->mUser->detailUser();

    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
      'is_unique' => 'this email has already registered'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password1]');


    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Create Anggota',
        'user'  => $user,
        'user2'  => $user2,
        'isi'    => 'user/edit'
      );
      $this->load->view('templates/wrapper', $data);
    } else {

      $data = [
        'id' => $user['id'],
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'image' => $this->input->post('image'),
        'password' => $this->input->post('password'),
      ];
      $this->mUser->editUser($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edit User Added!</div>');
      redirect('admin/user/profile');
    }
  }

  public function data()
  {
    $user = $this->mAdmin->getData();
    $data = $this->mUser->getData();

    $data = array(
      'title'    => 'Data User',
      'user'  => $user,
      'data'  => $data,
      'isi'    => 'user/data'
    );
    $this->load->view('templates/wrapper', $data);
  }

  //detail anggota
  public function detail_data($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->getMember();
    $member1 = $this->mMember->detailMember($id);
    $img = $this->mMember->detailImg($id);
    $img2 = $this->mMember->detailPer($id);
    $img3 = $this->mMember->detailAnak($id);

    $data = array(
      'title'    => 'Daftar Anggota Jemaat',
      'user'  => $user,
      'member1'    => $member1,
      'member'    => $member,
      'img'    => $img,
      'img2'    => $img2,
      'img3'    => $img3,
      'isi'    => 'user/detail'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function print_image($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $img = $this->mMember->detailImg($id);

    $data = array(
      'user'  => $user,
      'member'    => $member,
      'img'    => $img,
    );
    $this->load->view('user/print', $data, false);
  }

  public function print_image2($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $img = $this->mMember->detailPer($id);

    $data = array(
      'user'  => $user,
      'member'    => $member,
      'img'    => $img,
    );
    $this->load->view('user/print2', $data, false);
  }

  public function print_image3($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $img = $this->mMember->detailAnak($id);

    $data = array(
      'user'  => $user,
      'member'    => $member,
      'img'    => $img,
    );
    $this->load->view('user/print3', $data, false);
  }
}
