<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Cek role user (pegawai)
        if ($this->session->userdata('role_id') != 2) {
            redirect('auth');
        }
    }

    public function dashboard()
    {
        $data['title'] = 'User Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('profilperusahaan/my_profile'); // Halaman profil
        $this->load->view('templates/footer');
    }
}
