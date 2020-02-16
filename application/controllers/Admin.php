<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    //     error_reporting(0);
    //     $this->load->model('Dosen_model');
    //     $this->load->model('Admin_model');
    //     $this->load->model('Profil_model');
    //     $this->load->helper(array('form', 'url', 'download'));
    //     $this->load->library('pagination');
    //     $this->load->library('upload');
    //     $this->load->model('Visitor_model', 'visitor_model');
    //     $this->load->helper('text');
    //     // user access
    //     if (!$this->session->userdata('email')) {
    //         redirect('auth');
    //     }
    }

    public function index()
    {
        // cara mengambil data user berdasarkan email yg ada disession
        $data['title'] = 'Dashboard';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['tbl_info'] = $this->Info_model->get_info_home(3, 0);

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer');
    }
}