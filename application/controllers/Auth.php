<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('username')) {
      redirect('user/profile');
    }
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login Page';
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/login');
      $this->load->view('templates/auth_footer');
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('member', ['username' => $username])->row_array();

    // jika ada user
    if ($user) {
      // cek password
      if (password_verify($password, $user['password'])) {
        $data = [
          'username' => $user['username'],
          'role_id' => $user['role_id']
        ];
        $this->session->set_userdata($data);
        if ($user['role_id'] == 1) {
          redirect('admin/dashboard');
        } elseif ($user['role_id'] == 3) {
          redirect('pendeta/dashboard');
        } else {
          redirect('user/profile');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          Wrong password!</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      username is not registered!</div>');
      redirect('auth');
    }
  }

  public function registration()
  {
    $this->form_validation->set_rules('username', 'Name', 'trim|required');
    $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[4]|matches[password2]', [
      'matches' => 'password dant match!',
      'min_length' => 'password too short!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');


    if ($this->form_validation->run() == false) {
      $data['title'] = 'SIM GBT Registration';
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/registration');
      $this->load->view('templates/auth_footer');
    } else {
      $data = [
        'username' => $this->input->post('username'),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'role_id' => 2,
        'is_active' => 0,
        'date' => time()
      ];

      // $this->db->insert('member', $data);

      // $this->_sendEmail();

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Congratulation! your account has been created. Please Login...</div>');
      redirect('auth/registration');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role_id');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      You have been logout</div>');
    redirect('auth');
  }


  public function blocked()
  {
    $this->load->view('auth/blocked');
  }

  // private function _sendEmail()
  // {
  //   $config = [
  //     'protocol' => 'smtp',
  //     'smtp_host' => 'ssl://smtp.googlemail.com',
  //     'smtp_user' => 'loisyemima123@gmail.com',
  //     'smtp_pass' => 'lois.1234',
  //     'smtp_port' => 465,
  //     'mailtype' => 'html',
  //     'charset' => 'utf-8',
  //     'newline' => "\r\n"

  //   ];

  //   $this->load->library('email', $config);
  //   $this->email->initialize($config);

  //   $this->email->from('loisyemima123@gmail.com', 'GBT Siliragung');
  //   $this->email->to('loisyemima73@gmail.com');
  //   $this->email->subject('Testing');
  //   $this->email->message('Hello World!!');

  //   if ($this->email->send()) {
  //     return true;
  //   } else {
  //     echo $this->email->print_debugger();
  //     die;
  //   }
  // }

  public function forgetPassword()
  {
    $no_telp = $this->input->post('no_telp');
    $user = $this->db->get_where('member', ['no_telp' => $no_telp])->row_array();
    
      if ($user) { 
        $id = $user['member_id'];
        $nama = "apiproject";
        $pesan = "https://sim-gbt.indanahgroup.my.id/Auth/ResetPassword/$id";

    $data = [
    'sender' => $nama, //Nama Id Yang didaftarkan
    'number' => $no_telp, //Nomor Tujuan
    'message' => $pesan //Isi Pesan
    ];

    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_URL => "http://20.247.104.168:8000/send-message", //Url Link Web
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0)
    );

    $result = curl_exec($curl);
    curl_close($curl);
    $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
        Cek WhatsApp Untuk Reset Password!</div>');
    redirect('Auth');
    return json_decode($result, true);

    } else {
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        No Telp Tidak Terdaftar!</div>');
    redirect('auth/lupaPassword');
    }
}

public function lupaPassword()
{

$data['title'] = 'Lupa Password';
$this->load->view('templates/auth_header', $data);
$this->load->view('auth/forget_pass');
$this->load->view('templates/auth_footer');
}

public function ResetPassword($id)
{
    $member = $this->mMember->detailMember($id);
    $data['user'] = $this->mMember->detailMember($id);
    $this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[6]|matches[new_password2]');
    $this->form_validation->set_rules('new_password2', 'Ulangi Password Baru', 'required|trim|min_length[6]|matches[new_password1]');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Ubah Password';
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/ubah_pass');
      $this->load->view('templates/auth_footer');
    } else {
          $new_password = $this->input->post('new_password1');
          //pass sudah ok
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

          $this->db->set('password', $password_hash);
          $this->db->where('member_id', $member['member_id']);
          $this->db->update('member');

          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        password changed!</div>');
          redirect('Auth');
    }
}

}