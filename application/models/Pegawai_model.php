<?php

class Pegawai_model extends CI_Model {
   
    public function getAllPegawai()
    {
        return $this->db->get('data_pribadi')->result_array();
    }

    public function tambahDataPegawai()
    {
        $data =[
            "nama"  =>$this->input->post('nama',true),
            "nip"  =>$this->input->post('nip',true),
            "alamat"  =>$this->input->post('alamat',true),
            "tanggal_lahir"  =>$this->input->post('tanggal_lahir',true),
            "jabatan"  =>$this->input->post('jabatan',true),
            "departemen"  =>$this->input->post('departemen',true),
            "tahun_bergabung"  =>$this->input->post('tahun_bergabung',true),
        ];

        $this->db->insert('data_pribadi', $data);
    }
    public function hapusDataPegawai($id_pribadi)
    {
        // $this->db->where('id_pribadi', $id_pribadi);
        $this->db->delete('data_pribadi',['id_pribadi' => $id_pribadi]);
    }
    public function getPegawaiById($id_pribadi)
    {
        return $this->db->get_where('data_pribadi',['id_pribadi' => $id_pribadi])->row_array();
    }
    public function ubahDataPegawai()
    {
        $data =[
            "nama"  =>$this->input->post('nama',true),
            "nip"  =>$this->input->post('nip',true),
            "alamat"  =>$this->input->post('alamat',true),
            "tanggal_lahir"  =>$this->input->post('tanggal_lahir',true),
            "jabatan"  =>$this->input->post('jabatan',true),
            "departemen"  =>$this->input->post('departemen',true),
            "tahun_bergabung"  =>$this->input->post('tahun_bergabung',true),
        ];

        $this->db->where('id_pribadi',$this->input->post('id_pribadi'));
        $this->db->update('data_pribadi', $data);
    }
    public function cariDataPegawai($keyword)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('nip', $keyword);
            $this->db->or_like('jabatan', $keyword);
            return $this->db->get('data_pribadi')->result_array();
        }
    }



}