<?php

class Profilperusahaan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Memuat database library
        $this->load->database();
        // Memuat model Profilperusahaan_model
        $this->load->model('Profilperusahaan_model'); 
    }

    public function index() {
        $data['judul'] = 'Halaman Profile';

        // Query untuk mengambil data profil perusahaan langsung di controller
        $this->db->select('nama_perusahaan, alamat, telepon, email');
        $query = $this->db->get('profile_perusahaan');
        
        // Mengambil data pertama (jika ada)
        $data['profil'] = $query->row_array();

        // Memuat view dengan data profil
        $this->load->view('templates/header', $data);
        $this->load->view('profilperusahaan/index', $data);
        $this->load->view('templates/footer');
    }

    public function my_profile()
    {
        $data['title'] = 'My Profile';
		$data['judul'] = "My Profile";

        // Ambil data user dari session
        $data['user'] = $this->Profilperusahaan_model->get_user_by_email($this->session->userdata('email'));

        // Periksa jika data user kosong
        if (!$data['user']) {
            show_error('User data not found. Please login again.', 404, 'Data Not Found');
        }

        // Load view dengan data user
        $this->load->view('templates/header', $data);
        $this->load->view('profilperusahaan/my_profile', $data);
        $this->load->view('templates/footer');
    }
}
