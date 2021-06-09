<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    // if($this->session->userdata('status_login') != "login"){
    //   redirect('login');
    // }
  }

  public function index()
  {
    $data['menu'] = 'Home';
    $this->load->view('client/client_header.php', $data);
    $this->load->view('client/vindex.php');
    $this->load->view('client/client_footer.php');
  }

  public function dashboard()
  {
    $this->load->view('client/vdashboard');
  }

  public function login()
  {
    $this->load->view('client/vlogin.php');
  }

  public function resgistrasi()
  {
    $data['menu'] = 'Home';
    $this->load->view('client/client_header.php', $data);
    $this->load->view('client/vregistrasi.php');
    $this->load->view('client/client_footer.php');
  }

  public function login_act()
  {
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $sql = "SELECT * FROM tbl_users WHERE usr_akun = ? AND usr_password = ?";

    $query = $this->db->query($sql, array($username, $password));

    if (!$query) {
      //JIka Query Gagal artinya data tidak di temukan di atau ada kesalahan maka kembali ke halaman login
      $this->session->set_flashdata('msg', 'Login Gagal !');
      redirect('client/login');
    }

    $row = $query->first_row();
    if ($row != NULL) {
      //ambil data dari hasil query dan masukkan kedala variabel
      $usr_id       = $row->usr_id;
      $usr_akun     = $row->usr_akun;
      $usr_nama     = $row->usr_nama_lengkap;
      $usr_level    = $row->usr_level;
      $usr_loket_id = $row->usr_loket_id;
      //Buat session dari data hasil qiery login
      $data_session = array(
        'user_id'       => $usr_id,
        'user_akun'     => $usr_akun,
        'user_nama'     => $usr_nama,
        'status_login'  => "login",
        'user_level'    => $usr_level,
        'loket_id'      => $usr_loket_id
      );
      //jika login data berhasil arahkan ke halaman dashboard method index
      $this->session->set_userdata($data_session);
      redirect('client/dashboard');
    } else {
      //jika GAGAL login data berhasil arahkan ke halaman Login
      $this->session->set_flashdata('msg', 'Login Gagal !');
      redirect('client/login');
    }
  }

}
