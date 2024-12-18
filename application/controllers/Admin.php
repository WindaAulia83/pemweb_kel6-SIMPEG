<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Cek role admin
        if ($this->session->userdata('role_id') != 1) {
            redirect('auth');
        }
    }

    public function dashboard()
    {
        $data['title'] = 'Admin Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index'); // Akses admin ke home/index
        $this->load->view('templates/footer');
    }

    public function manage_pegawai()
    {
        $data['title'] = 'Kelola Pegawai';
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/index'); // CRUD pegawai
        $this->load->view('templates/footer');
    }
}
