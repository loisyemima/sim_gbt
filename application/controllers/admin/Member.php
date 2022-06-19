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
      'isi'    => 'admin/member/list'
    );
    $this->load->view('templates/wrapper', $data);
  }

  //create anggota
  public function create_member()
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->getMember();

    $v = $this->form_validation;
    $v->set_rules('nama', 'Full Name', 'required');
    $v->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $v->set_rules('status', 'Status', 'required');
    $v->set_rules('username', 'Name', 'trim|required');
    $v->set_rules('password1', 'Password', 'trim|required|min_length[6]|matches[password2]', [
      'matches' => 'password dant match!',
      'min_length' => 'password too short!'
    ]);
    $v->set_rules('password2', 'Password', 'trim|required|matches[password1]');


    if ($v->run()) {
      $config['upload_path']     = './assets/img/profile/member/';
      $config['allowed_types']   = 'gif|jpg|png|pdf|jpeg';
      $config['max_size']      = '1000'; // KB			
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {

        $data = array(
          'title'    => 'Create Anggota',
          'user'  => $user,
          'member' => $member,
          'isi'    => 'admin/member/create'
        );
        $this->load->view('templates/wrapper', $data);
      } else {
        $upload_data        = array(
          'uploads' => $this->upload->data(),
        );
        $config['image_library']  = 'gd2';
        $config['source_image']   = './assets/img/profile/member/' . $upload_data['uploads']['file_name'];
        $config['create_thumb']   = TRUE;
        $config['quality']       = "100%";
        $config['maintain_ratio']   = FALSE;
        $config['width']       = 360; // Pixel
        $config['height']       = 200; // Pixel
        $config['x_axis']       = 0;
        $config['y_axis']       = 0;
        $config['thumb_marker']   = '';
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $data = array(
          'nama' => $this->input->post('nama'),
          'images'      => $upload_data['uploads']['file_name'],
          'tempat' => $this->input->post('tempat'),
          'tgl_lahir' => $this->input->post('tgl_lahir'),
          'umur' => $this->input->post('umur'),
          'status' => $this->input->post('status'),
          'username' => htmlspecialchars($this->input->post('username', true)),
          'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
          'role_id' => 2,
          'date' => time()
        );

        $this->mMember->createMember($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Member Added!</div>');
        redirect('admin/member');
      }
    }

    $data = array(
      'title'    => 'Create Anggota',
      'user'  => $user,
      'member' => $member,
      'isi'    => 'admin/member/create'
    );
    $this->load->view('templates/wrapper', $data);
  }

  //edit anggota
  public function edit_member($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);

    $v = $this->form_validation;
    $v->set_rules('nama', 'Nama', 'required');
    $v->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $v->set_rules('status', 'Status', 'required');
    $v->set_rules('username', 'Username', 'trim');
    $v->set_rules('password1', 'Password', 'trim|min_length[6]|matches[password2]', [
      'matches' => 'password dant match!',
      'min_length' => 'password too short!'
    ]);
    $v->set_rules('password2', 'Password', 'trim|matches[password1]');


    if ($v->run()) {
      if (!empty($_FILES['image']['name'])) {

        $config['upload_path']     = './assets/img/profile/member/';
        $config['allowed_types']   = 'gif|jpg|png|jpeg';
        $config['max_size']      = '1000'; // KB			
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {

          $data = array(
            'title'    => 'Edit Anggota',
            'user'  => $user,
            'member'  => $member,
            'isi'    => 'admin/member/edit'
          );
          $this->load->view('templates/wrapper', $data);
        } else {
          //hapus foto lama
          if ($member['image'] != "") {
            unlink('./assets/img/profile/member/' . $member['image']);
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
          $this->load->library('image_lib', $config);
          $this->image_lib->resize();

          $data = [
            'member_id' => $member['member_id'],
            'nama' => $this->input->post('nama'),
            'images' => $upload_data['uploads']['file_name'],
            'tempat' => $this->input->post('tempat'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'umur' => $this->input->post('umur'),
            'status' => $this->input->post('status'),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'date' => time()
          ];
          $this->mMember->editMember($data);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edit Member Added!</div>');
          redirect('admin/member');
        }
      } else {
        $data = [
          'member_id' => $member['member_id'],
          'nama' => $this->input->post('nama'),
          'tempat' => $this->input->post('tempat'),
          'tgl_lahir' => $this->input->post('tgl_lahir'),
          'umur' => $this->input->post('umur'),
          'status' => $this->input->post('status'),
          'username' => htmlspecialchars($this->input->post('username', true)),
          'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
          'role_id' => 2,
          'date' => time()
        ];
        $this->mMember->editMember($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edit Member Added!</div>');
        redirect('admin/member');
      }
    }
    $data = array(
      'title'    => 'Edit Anggota',
      'user'  => $user,
      'member'  => $member,
      'isi'    => 'admin/member/edit'
    );
    $this->load->view('templates/wrapper', $data);
  }

  // Delete member
  public function delete_member($id)
  {
    $data = array('member_id' => $id);
    $this->mMember->deleteMember($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete Member Succsess!</div>');
    redirect(base_url('admin/member'));
  }

  // create image baptis
  public function create_img($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $img = $this->mMember->detailImg($id);
    $img2 = $this->mMember->detailPer($id);
    $img3 = $this->mMember->detailAnak($id);


    $v = $this->form_validation;
    $v->set_rules('image_name', 'Image Name', 'required');

    if ($v->run()) {
      $config['upload_path']     = './assets/img/profile/member/';
      $config['allowed_types']   = 'gif|jpg|png|jpeg|pdf';
      $config['max_size']      = '1000'; // KB			
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {

        $data = array(
          'title'    => 'Create Image Anggota',
          'user'  => $user,
          'member' => $member,
          'img' => $img,
          'img2' => $img2,
          'img3' => $img3,
          'isi'    => 'admin/member/img_bap'
        );
        $this->load->view('templates/wrapper', $data);
      } else {
        $upload_data        = array('uploads' => $this->upload->data());
        $config['image_library']  = 'gd2';
        $config['source_image']   = './assets/img/profile/member/' . $upload_data['uploads']['file_name'];
        $config['quality']       = "100%";
        $config['maintain_ratio']   = FALSE;
        $config['x_axis']       = 0;
        $config['y_axis']       = 0;
        $config['thumb_marker']   = '';

        $data = array(
          'member' => $id,
          'image_name' => $this->input->post('image_name'),
          'image1'      => $upload_data['uploads']['file_name'],
        );
        $this->mMember->createImg($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Member Added!</div>');
        redirect('admin/member/');
      }
    }

    $data = array(
      'title'    => 'Create Anggota',
      'user'  => $user,
      'member' => $member,
      'img' => $img,
      'img2' => $img2,
      'img3' => $img3,
      'isi'    => 'admin/member/img_bap'
    );
    $this->load->view('templates/wrapper', $data);
  }
  // create image baptis
  public function edit_img($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $img = $this->mMember->detailImg($id);
    $img2 = $this->mMember->detailPer($id);
    $img3 = $this->mMember->detailAnak($id);


    $v = $this->form_validation;
    $v->set_rules('image_name', 'Image Name', 'required');

    if ($v->run()) {
      $config['upload_path']     = './assets/img/profile/member/';
      $config['allowed_types']   = 'gif|jpg|png|jpeg';
      $config['max_size']      = '1000'; // KB			
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {

        $data = array(
          'title'    => 'Create Image Anggota',
          'user'  => $user,
          'member' => $member,
          'img' => $img,
          'img2' => $img2,
          'img3' => $img3,
          'isi'    => 'admin/member/img_bap'
        );
        $this->load->view('templates/wrapper', $data);
      } else {
        $upload_data        = array('uploads' => $this->upload->data());
        $config['image_library']  = 'gd2';
        $config['source_image']   = './assets/img/profile/member/' . $upload_data['uploads']['file_name'];
        $config['quality']       = "100%";
        $config['maintain_ratio']   = FALSE;
        $config['x_axis']       = 0;
        $config['y_axis']       = 0;
        $config['thumb_marker']   = '';

        $data = array(
          'member' => $id,
          'image_name' => $this->input->post('image_name'),
          'image1'      => $upload_data['uploads']['file_name'],
        );
        $this->mMember->editImg($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Member Added!</div>');
        redirect('admin/member/');
      }
    }

    $data = array(
      'title'    => 'Create Anggota',
      'user'  => $user,
      'member' => $member,
      'img' => $img,
      'img2' => $img2,
      'img3' => $img3,
      'isi'    => 'admin/member/img_bap'
    );
    $this->load->view('templates/wrapper', $data);
  }

  // create image anak
  public function create_anak($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $img3 = $this->mMember->detailAnak($id);

    $v = $this->form_validation;
    $v->set_rules('nama_image', 'nama_image', 'required');

    if ($v->run()) {
      $config['upload_path']     = './assets/img/profile/member/';
      $config['allowed_types']   = 'gif|jpg|png|jpeg';
      $config['max_size']      = '1000'; // KB			
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {

        $data = array(
          'title'    => 'Create Anggota',
          'user'  => $user,
          'member' => $member,
          'img3' => $img3,
          'isi'    => 'admin/member/img_bap'
        );
        $this->load->view('templates/wrapper', $data);
      } else {
        $upload_data        = array('uploads' => $this->upload->data());
        $config['image_library']  = 'gd2';
        $config['source_image']   = './assets/img/profile/member/' . $upload_data['uploads']['file_name'];
        $config['create_thumb']   = TRUE;
        $config['quality']       = "100%";
        $config['maintain_ratio']   = FALSE;
        $config['width']       = 360; // Pixel
        $config['height']       = 200; // Pixel
        $config['x_axis']       = 0;
        $config['y_axis']       = 0;
        $config['thumb_marker']   = '';
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $data = array(
          'member2' => $id,
          'nama_image' => $this->input->post('nama_image'),
          'image2'      => $upload_data['uploads']['file_name'],
        );
        $this->mMember->createAnak($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Member Added!</div>');
        redirect('admin/member/' . $id);
      }
    }

    $data = array(
      'title'    => 'Create Anggota',
      'user'  => $user,
      'member' => $member,
      'img3' => $img3,
      'isi'    => 'admin/member/img_bap'
    );
    $this->load->view('templates/wrapper', $data);
  }

  // create image anak
  public function edit_anak($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $img3 = $this->mMember->detailAnak($id);

    $v = $this->form_validation;
    $v->set_rules('nama_image', 'nama_image', 'required');

    if ($v->run()) {
      $config['upload_path']     = './assets/img/profile/member/';
      $config['allowed_types']   = 'gif|jpg|png|jpeg';
      $config['max_size']      = '1000'; // KB			
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {

        $data = array(
          'title'    => 'Create Anggota',
          'user'  => $user,
          'member' => $member,
          'img3' => $img3,
          'isi'    => 'admin/member/img_bap'
        );
        $this->load->view('templates/wrapper', $data);
      } else {
        $upload_data        = array('uploads' => $this->upload->data());
        $config['image_library']  = 'gd2';
        $config['source_image']   = './assets/img/profile/member/' . $upload_data['uploads']['file_name'];
        $config['create_thumb']   = TRUE;
        $config['quality']       = "100%";
        $config['maintain_ratio']   = FALSE;
        $config['width']       = 360; // Pixel
        $config['height']       = 200; // Pixel
        $config['x_axis']       = 0;
        $config['y_axis']       = 0;
        $config['thumb_marker']   = '';
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $data = array(
          'member2' => $id,
          'nama_image' => $this->input->post('nama_image'),
          'image2'      => $upload_data['uploads']['file_name'],
        );
        $this->mMember->editAnak($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Member Added!</div>');
        redirect('admin/member/' . $id);
      }
    }

    $data = array(
      'title'    => 'Create Anggota',
      'user'  => $user,
      'member' => $member,
      'img3' => $img3,
      'isi'    => 'admin/member/img_bap'
    );
    $this->load->view('templates/wrapper', $data);
  }

  //create image pernikahan
  public function create_per($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $img2 = $this->mMember->detailPer($id);

    $v = $this->form_validation;
    $v->set_rules('nama_image3', 'nama_image', 'required');

    if ($v->run()) {
      $config['upload_path']     = './assets/img/profile/member/';
      $config['allowed_types']   = 'gif|jpg|png|jpeg';
      $config['max_size']      = '1000'; // KB			
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {

        $data = array(
          'title'    => 'Create Anggota',
          'user'  => $user,
          'member' => $member,
          'img2' => $img2,
          'isi'    => 'admin/member/img_bap'
        );
        $this->load->view('templates/wrapper', $data);
      } else {
        $upload_data        = array('uploads' => $this->upload->data());
        $config['image_library']  = 'gd2';
        $config['source_image']   = './assets/img/profile/member/' . $upload_data['uploads']['file_name'];
        $config['create_thumb']   = TRUE;
        $config['quality']       = "100%";
        $config['maintain_ratio']   = FALSE;
        $config['width']       = 360; // Pixel
        $config['height']       = 200; // Pixel
        $config['x_axis']       = 0;
        $config['y_axis']       = 0;
        $config['thumb_marker']   = '';
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $data = array(
          'member3' => $id,
          'nama_image3' => $this->input->post('nama_image3'),
          'image3'      => $upload_data['uploads']['file_name'],
        );
        $this->mMember->createPer($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Member Added!</div>');
        redirect('admin/member/' . $id);
      }
    }

    $data = array(
      'title'    => 'Create Anggota',
      'user'  => $user,
      'member' => $member,
      'img2' => $img2,
      'isi'    => 'admin/member/img_bap'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function edit_per($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $img2 = $this->mMember->detailPer($id);

    $v = $this->form_validation;
    $v->set_rules('nama_image3', 'nama_image', 'required');

    if ($v->run()) {
      $config['upload_path']     = './assets/img/profile/member/';
      $config['allowed_types']   = 'gif|jpg|png|jpeg';
      $config['max_size']      = '1000'; // KB			
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {

        $data = array(
          'title'    => 'Create Anggota',
          'user'  => $user,
          'member' => $member,
          'img2' => $img2,
          'isi'    => 'admin/member/img_bap'
        );
        $this->load->view('templates/wrapper', $data);
      } else {
        $upload_data        = array('uploads' => $this->upload->data());
        $config['image_library']  = 'gd2';
        $config['source_image']   = './assets/img/profile/member/' . $upload_data['uploads']['file_name'];
        $config['create_thumb']   = TRUE;
        $config['quality']       = "100%";
        $config['maintain_ratio']   = FALSE;
        $config['width']       = 360; // Pixel
        $config['height']       = 200; // Pixel
        $config['x_axis']       = 0;
        $config['y_axis']       = 0;
        $config['thumb_marker']   = '';
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $data = array(
          'member3' => $id,
          'nama_image3' => $this->input->post('nama_image3'),
          'image3'      => $upload_data['uploads']['file_name'],
        );
        $this->mMember->editPer($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Member Added!</div>');
        redirect('admin/member/' . $id);
      }
    }

    $data = array(
      'title'    => 'Create Anggota',
      'user'  => $user,
      'member' => $member,
      'img2' => $img2,
      'isi'    => 'admin/member/img_bap'
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
      'isi'    => 'admin/member/detail'
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
    $this->load->view('admin/member/print', $data, false);
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
    $this->load->view('admin/member/print2', $data, false);
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
    $this->load->view('admin/member/print3', $data, false);
  }


  public function editadmin()
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->admin();

    $v = $this->form_validation;
    $v->set_rules('username', 'Username', 'trim');
    $v->set_rules('password1', 'Password', 'trim|min_length[6]|matches[password2]', [
      'matches' => 'password dant match!',
      'min_length' => 'password too short!'
    ]);
    $v->set_rules('password2', 'Password', 'trim|matches[password1]');


    if ($v->run() == false) {

      $data = array(
        'title'    => 'Edit Anggota',
        'user'  => $user,
        'member'  => $member,
        'isi'    => 'admin/member/admin'
      );
      $this->load->view('templates/wrapper', $data);
    } else {

      $data = array(
        'member_id' => 1,
        'username' => htmlspecialchars($this->input->post('username', true)),
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'date' => time()
      );
      $this->mMember->editMember($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edit Member Added!</div>');
      redirect('admin/member');
    }
  }
}
