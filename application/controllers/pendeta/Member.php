<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  //list anggota
  public function index()
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->getMember();

    $data = array(
      'title'    => 'Daftar Anggota Jemaat',
      'user'  => $user,
      'member'    => $member,
      'isi'    => 'pendeta/member/list'
    );
    $this->load->view('templates/wrapper', $data);
  }

  //detail anggota
  public function detail_member($id)
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
      'isi'    => 'pendeta/member/detail'
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
    $this->load->view('pendeta/member/print', $data, false);
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
    $this->load->view('pendeta/member/print2', $data, false);
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
    $this->load->view('pendeta/member/print3', $data, false);
  }
}
