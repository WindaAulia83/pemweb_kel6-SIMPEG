<?php

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        // Cek jika user belum login, redirect ke halaman login
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
    public function index($nama = '') {
        // Menghitung total pegawai
        $data['total_pegawai'] = $this->db->count_all('riwayat_kerja');
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}