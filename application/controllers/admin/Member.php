<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->getMember();
    $img = $this->mMember->get_all_data();

    $data = array(
      'title'    => 'Daftar Anggota Jemaat',
      'user'  => $user,
      'member'    => $member,
      'img'    => $img,
      'isi'    => 'admin/member/list'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function create_member()
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->getMember();
    $username = $this->mMember->username();
    $age = $this->mAge->getAge();

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
      $config['allowed_types']   = 'gif|jpg|png|pdf';
      $config['max_size']      = '1000'; // KB			
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {

        $data = array(
          'title'    => 'Create Anggota',
          'user'  => $user,
          'member' => $member,
          'username' => $username,
          'age' => $age,
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
      'username' => $username,
      'age' => $age,
      'isi'    => 'admin/member/create'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function edit_member($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $username = $this->mMember->username();
    $age = $this->mAge->getAge();

    $v = $this->form_validation;
    $v->set_rules('nama', 'Nama', 'required');
    $v->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $v->set_rules('status', 'Status', 'required');
    $v->set_rules('username', 'Username', 'trim|required');
    $v->set_rules('password1', 'Password', 'trim|required|min_length[6]|matches[password2]', [
      'matches' => 'password dant match!',
      'min_length' => 'password too short!'
    ]);
    $v->set_rules('password2', 'Password', 'trim|required|matches[password1]');


    if ($v->run()) {
      if (!empty($_FILES['image']['name'])) {

        $config['upload_path']     = './assets/img/profile/member/';
        $config['allowed_types']   = 'gif|jpg|png';
        $config['max_size']      = '1000'; // KB			
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {

          $data = array(
            'title'    => 'Edit Anggota',
            'user'  => $user,
            'member'  => $member,
            'username'  => $username,
            'age'  => $age,
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
      'username'  => $username,
      'age'  => $age,
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

  public function nonMember()
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->getNonMember();

    $data = array(
      'title'    => 'Daftar Non Anggota',
      'user'  => $user,
      'member'    => $member,
      'isi'    => 'admin/nonmember/list'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function edit_nonmember($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $username = $this->mMember->username();
    $age = $this->mAge->getAge();

    $v = $this->form_validation;
    $v->set_rules('nama', 'Full Name', 'required');
    $v->set_rules('tgl_lahir', 'tgl_lahir', 'required');
    $v->set_rules('status', 'Status', 'required');

    if ($v->run()) {
      if (!empty($_FILES['image']['name'])) {

        $config['upload_path']     = './assets/img/profile/member/';
        $config['allowed_types']   = 'gif|jpg|png|pdf';
        $config['max_size']      = '1000'; // KB			
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {

          $data = array(
            'title'    => 'Edit Non Anggota',
            'user'  => $user,
            'member'  => $member,
            'username'  => $username,
            'age'  => $age,
            'isi'    => 'admin/nonmember/edit'
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
            'age' => $this->input->post('age'),
            'status' => $this->input->post('status'),
            'username' => $this->input->post('username'),
          ];
          $this->mMember->editMember($data);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edit Non Member Added!</div>');
          redirect('admin/member');
        }
      } else {
        $data = [
          'member_id' => $member['member_id'],
          'nama' => $this->input->post('nama'),
          'tempat' => $this->input->post('tempat'),
          'tgl_lahir' => $this->input->post('tgl_lahir'),
          'age' => $this->input->post('age'),
          'status' => $this->input->post('status'),
          'username' => $this->input->post('username'),
        ];
        $this->mMember->editMember($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edit Non Member Added!</div>');
        redirect('admin/member');
      }
    }
    $data = array(
      'title'    => 'Edit Anggota',
      'user'  => $user,
      'member'  => $member,
      'username'  => $username,
      'age'  => $age,
      'isi'    => 'admin/nonmember/edit'
    );
    $this->load->view('templates/wrapper', $data);
  }

  // Delete non member
  public function delete_nonmember($id)
  {
    $data = array('member_id' => $id);
    $this->mMember->deleteMember($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete Member Succsess!</div>');
    redirect(base_url('admin/member'));
  }

  public function create_img($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $img = $this->mMember->detailImg($id);

    $v = $this->form_validation;
    $v->set_rules('image_name', 'Image Name', 'required');

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
          'img' => $img,
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
        redirect('admin/member');
      }
    }

    $data = array(
      'title'    => 'Create Anggota',
      'user'  => $user,
      'member' => $member,
      'img' => $img,
      'isi'    => 'admin/member/img_bap'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function create_anak($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $img = $this->mMember->detailAnak($id);

    $v = $this->form_validation;
    $v->set_rules('nama_image', 'nama_image', 'required');

    if ($v->run()) {
      $config['upload_path']     = './assets/img/profile/member/';
      $config['allowed_types']   = 'gif|jpg|png|pdf';
      $config['max_size']      = '1000'; // KB			
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {

        $data = array(
          'title'    => 'Create Anggota',
          'user'  => $user,
          'member' => $member,
          'img' => $img,
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
        redirect('admin/member');
      }
    }

    $data = array(
      'title'    => 'Create Anggota',
      'user'  => $user,
      'member' => $member,
      'img' => $img,
      'isi'    => 'admin/member/img_bap'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function create_per($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->detailMember($id);
    $img = $this->mMember->detailPer($id);

    $v = $this->form_validation;
    $v->set_rules('nama_image3', 'nama_image', 'required');

    if ($v->run()) {
      $config['upload_path']     = './assets/img/profile/member/';
      $config['allowed_types']   = 'gif|jpg|png|pdf';
      $config['max_size']      = '1000'; // KB			
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {

        $data = array(
          'title'    => 'Create Anggota',
          'user'  => $user,
          'member' => $member,
          'img' => $img,
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
        redirect('admin/member');
      }
    }

    $data = array(
      'title'    => 'Create Anggota',
      'user'  => $user,
      'member' => $member,
      'img' => $img,
      'isi'    => 'admin/member/img_bap'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function detail_member($id)
  {
    $user = $this->mAdmin->getData();
    $member = $this->mMember->getMember();
    $member1 = $this->mMember->detailMember($id);
    $username = $this->mMember->username();
    $age = $this->mAge->getAge();
    $img = $this->mMember->detailImg($id);

    $data = array(
      'title'    => 'Daftar Anggota Jemaat',
      'user'  => $user,
      'member1'    => $member1,
      'member'    => $member,
      'username'    => $username,
      'age'    => $age,
      'img'    => $img,
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

  /*public function filter()
  {
    $data['data'] = $this->db->get('member')->result();
    $this->load->view("admin/member/filter", $data, false); // ini view menampilkan hasil pencarian
  }

  public function load_member()
  {
    $status = $_GET['status'];
    if ($status == 0) {
      $data = $this->db->get('member')->result();
    } else {
      $data = $this->db->get_where('member', ['status' => $status])->result();
    }
    if (!empty($data)) {
      $i = 1;
      foreach ($data as $m) : ?>
        <tr>
          <td><?= $i++ ?></td>
          <td><?= $m->nama ?></td>
          <td><?= $m->tempat ?></td>
          <td><?= $m->tgl_lahir ?></td>
          <td><?= $m->status ?></td>
        </tr>
      <?php endforeach; ?> <?php
                          } else {
                            ?>
      <tr>
        <td align="center">Tidak Ada Data</td>
      </tr>
<?php
                          }
                        }*/

  public function filtering()
  {
    $user = $this->mAdmin->getData();
    $countries = $this->mMember->get_list_countries();

    $opt = array('' => 'All Country');
    foreach ($countries as $country) {
      $opt[$country] = $country;
    }

    $data = array(
      'title' => 'Member',
      'user' => $user,
      'form_country' => form_dropdown('', $opt, '', 'id="status" class="form-control"'),
      'isi' => 'admin/member/filtering'
    );
    $this->load->view('templates/wrapper', $data);
  }

  public function ajax_list()
  {
    $list = $this->mMember->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $member) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = $member->nama;
      $row[] = $member->tempat;
      $row[] = $member->tgl_lahir;
      $row[] = $member->age;
      $row[] = $member->status;

      $data[] = $row;
    }

    $output = array(
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->mMember->count_all(),
      "recordsFiltered" => $this->mMember->count_filtered(),
      "data" => $data,
    );
    //output to json format
    echo json_encode($output);
  }
}
