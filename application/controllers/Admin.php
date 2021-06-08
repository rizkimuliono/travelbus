<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('status_login') != "login"){
      redirect('login');
    }
  }

  public function index()
  {
    $data['menu'] = 'dashboard';
    $this->load->view('template_admin/vheader.php', $data);
    $this->load->view('template_admin/vmenu.php', $data);
    $this->load->view('admin/vdashboard.php');
    $this->load->view('template_admin/vcorejs.php');
    $this->load->view('template_admin/vfooter.php');
  }

}
