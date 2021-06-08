<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    ob_start();
  }

  public function index()
  {
    //cek apakah session masih ada, dan == 'login'
    //jika True kirim ke halaman dashboard, jika False kirim ke halaman Login
    if($this->session->userdata('status_login') == 'login'){
      redirect('admin');
    } else {
      $this->load->view('vlogin');
    }
  }

  public function login_act()
  {
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $sql = "SELECT * FROM tbl_users, tbl_loket WHERE usr_akun = ? AND usr_password = ?";

    $query = $this->db->query($sql, array($username, $password));

    if (!$query) {
      //JIka Query Gagal artinya data tidak di temukan di atau ada kesalahan maka kembali ke halaman login
      $this->session->set_flashdata('msg', 'Login Gagal !');
      redirect('login');
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
      redirect('admin');
    } else {
      //jika GAGAL login data berhasil arahkan ke halaman Login
      $this->session->set_flashdata('msg', 'Login Gagal !');
      redirect('login');
    }
  }

  function logout()
  {
    $this->session->set_flashdata('msg', 'session berakahir');
    $this->session->unset_userdata("user_id");
    $this->session->unset_userdata("user_akun");
    $this->session->unset_userdata("user_nama");
    $this->session->unset_userdata("status_login");
    $this->session->unset_userdata("user_level");
    $this->session->unset_userdata("loket_id");
    $this->session->sess_destroy();
    ob_clean();
    redirect(base_url());
  }
}
