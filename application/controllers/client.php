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

  public function login()
  {
    $data['menu'] = 'Home';
    $this->load->view('client/client_header.php', $data);
    $this->load->view('client/vlogin.php');
    $this->load->view('client/client_footer.php');
  }

  public function resgistrasi()
  {
    $data['menu'] = 'Home';
    $this->load->view('client/client_header.php', $data);
    $this->load->view('client/vregistrasi.php');
    $this->load->view('client/client_footer.php');
  }

}
