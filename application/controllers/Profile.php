<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Profil_model'); // Memuat model Profil_model
        $this->load->helper('url'); // Memuat helper URL untuk fungsi base_url()
        $this->load->library('form_validation'); // Memuat library validasi
    }

    // Menampilkan form profil perusahaan
    public function index() {
        $data['profile'] = $this->Profil_model->get_profil(); // Mengambil data profil dari model
        $this->load->view('profilperusahaan/index', $data); // Mengirim data ke view
    }
    
}
