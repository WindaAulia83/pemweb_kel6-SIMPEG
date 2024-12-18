<?php

class Pegawai extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Pegawai';
        $data['pegawai'] = $this->Pegawai_model->getAllPegawai();
        if($this->input->post('keyword')){
            $keyword = $this->input->post('keyword');
            $data['pegawai'] = $this->Pegawai_model->cariDataPegawai($keyword);
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
    }
  
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pegawai';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('pegawai/tambah');
            $this->load->view('templates/footer');
        } else{
           $this->Pegawai_model->tambahDataPegawai();
           $this->session->set_flashdata('flash', 'Ditambahkan');
           redirect('pegawai');
    }
  }
  
    public function hapus($id_pribadi)
    {
        $this->Pegawai_model->hapusDataPegawai($id_pribadi);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pegawai');
    }
    
    public function detail($id_pribadi)
    {
        $data['judul'] = 'Detail Data Pegawai';
        $data['pegawai'] = $this->Pegawai_model->getPegawaiById($id_pribadi);
        $this->load->view('templates/header',$data);
        $this->load->view('pegawai/detail',$data);
        $this->load->view('templates/footer');

    }
    public function ubah($id_pribadi)
    {
        $data['judul'] = 'Form Ubah Data Pegawai';
        $data['pegawai'] = $this->Pegawai_model->getPegawaiById($id_pribadi);
        $data['jabatan']= ['Manager Departemen', 'Manager Keuangan','Admin','Pegawai'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('pegawai/ubah',$data);
            $this->load->view('templates/footer');
        } else{
           $this->Pegawai_model->ubahDataPegawai();
           $this->session->set_flashdata('flash', 'Diubah');
           redirect('pegawai');
    }
  }
}