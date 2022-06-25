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

    $v = $this->form_validation;
    $v->set_rules('nama', 'Nama', 'required');

    if ($v->run()) {
      if (!empty($_FILES['image']['name'])) {

        $config['upload_path']     = './assets/img/profile/member/';
        $config['allowed_types']   = 'gif|jpg|png|jpeg';
        $config['max_size']      = '1000'; // KB			
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
          $data = array(
            'title'    => 'Edit Profile',
            'user'  => $user,
            'isi'    => 'user/edit'
          );
          $this->load->view('templates/wrapper', $data);
        } else {
          //hapus foto lama
          if ($user['image'] != "") {
            unlink('./assets/img/profile/member/' . $user['image']);
          }
          $upload_data        = array('uploads' => $this->upload->data());
          $config['image_library']  = 'gd2';
          $config['source_image']   = './assets/img/profile/member/' . $upload_data['uploads']['file_name'];
          $config['quality']       = "100%";
          $config['maintain_ratio']   = FALSE;
          $config['width']       = 360; // Pixel
          $config['height']       = 200; // Pixel
          $config['x_axis']       = 0;
          $config['y_axis']       = 0;
          $config['thumb_marker']   = '';

          $data = [
            'member_id' => $user['member_id'],
            'images' => $upload_data['uploads']['file_name'],
            'nama' => $this->input->post('nama'),
          ];
          $this->mUser->editUser($data);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edit User Added!</div>');
          redirect('user/profile/edit_profile');
        }
      } else {
        $data = [
          'member_id' => $user['member_id'],
          'nama' => $this->input->post('nama'),
        ];
        $this->mUser->editUser($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edit User Added!</div>');
        redirect('user/profile/edit_profile');
      }
    }
    $data = array(
      'title'    => 'Edit Profile',
      'user'  => $user,
      'isi'    => 'user/edit'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function ubah_password()
  {
    $user = $this->mAdmin->getData();

    $this->form_validation->set_rules('current_password', 'Password Lama', 'required|trim');
    $this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[6]|matches[new_password2]');
    $this->form_validation->set_rules('new_password2', 'Ulangi Password Baru', 'required|trim|min_length[6]|matches[new_password1]');


    if ($this->form_validation->run() == false) {
      $data = array(
        'title'    => 'Ubah Password',
        'user'  => $user,
        'isi'    => 'user/ubah_password'
      );
      $this->load->view('templates/wrapper', $data);
    } else {
      $current_password = $this->input->post('current_password');
      $new_password = $this->input->post('new_password1');
      if (!password_verify($current_password, $user['password'])) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Password Lama Salah!!!</div>');
        redirect('user/profile/ubah_password');
      } else {
        if ($current_password == $new_password) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Password Lama dan Password Baru Tidak Boleh Sama!</div>');
          redirect('user/profile/ubah_password');
        } else {
          //pass sudah ok
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

          $this->db->set('password', $password_hash);
          $this->db->where('username', $this->session->userdata('username'));
          $this->db->update('member');

          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        password changed!</div>');
          redirect('user/profile/ubah_password');
        }
      }
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
