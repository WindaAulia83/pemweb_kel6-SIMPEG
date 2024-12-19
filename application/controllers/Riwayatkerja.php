<?php

class Riwayatkerja extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Riwayatkerja_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'List of Riwayat Kerja';

        $this->load->model('Riwayatkerja_model','riwayatkerja');

        //Pagination
        $this->load->library('pagination');

        //ambil data keyword
        if($this->input->post('submit')){
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        }else{
            $data['keyword'] = $this->session->userdata('keyword');
        }

        //config
        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('departemen', $data['keyword']);
        $this->db->or_like('riwayat_pendidikan', $data['keyword']);
        $this->db->from('riwayat_kerja');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 12;

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['riwayatkerja'] = $this->riwayatkerja->getRiwayatkerja($config['per_page'],$data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('riwayatkerja/index', $data);
        $this->load->view('templates/footer');
    }
    public function ubah($id_pegawai)
    {
        $data['judul'] = 'Form Ubah Riwayat Kerja';
        $data['riwayatkerja'] = $this->Riwayatkerja_model->getRiwayatkerjaById($id_pegawai);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('departemen', 'Departemen', 'required');
        $this->form_validation->set_rules('riwayat pendidikan', 'Riwayat Pendidikan', 'required');
        $this->form_validation->set_rules('riwayat pengalaman', 'Riwayat  Pengalaman', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('riwayatkerja/ubah',$data);
            $this->load->view('templates/footer');
        } else{
           $this->Riwayatkerja_model->ubahDatariwayatkerja();
           $this->session->set_flashdata('flash', 'Diubah');
           redirect('riwayatkerja');
    }
}   
        public function hapus($id_pegawai)
        {
            $this->Riwayatkerja_model->hapusDataRiwayatkerja($id_pegawai);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('riwayatkerja');
        }
        public function tambah()
        {
            $data['judul'] = 'Form Tambah Riwayat Kerja';
    
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('departemen', 'Departemen', 'required');
            $this->form_validation->set_rules('riwayat_pendidikan', 'Riwayat_Pendidikan', 'required');
            $this->form_validation->set_rules('riwayat_pengalaman', 'Riwayat_Pengalaman', 'required');
    
            if($this->form_validation->run() == FALSE){
                $this->load->view('templates/header', $data);
                $this->load->view('riwayatkerja/tambah');
                $this->load->view('templates/footer');
            } else{
               $this->Riwayatkerja_model->tambahDataRiwayatkerja();
               $this->session->set_flashdata('flash', 'Ditambahkan');
               redirect('riwayatkerja');
        }
}
}
