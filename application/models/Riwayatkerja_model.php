<?php

class Riwayatkerja_model extends CI_Model
{
    public function getAllRiwayatkerja()
    {
        // Mengambil semua data dari tabel riwayatkerja
        return $this->db->get('riwayat_kerja')->result_array();
    }
    public function tambahDataRiwayatkerja()
    {
        $data =[
            "nama"  =>$this->input->post('nama',true),
            "departemen"  =>$this->input->post('departemen',true),
            "riwayat_pendidikan"  =>$this->input->post('riwayat_pendidikan',true),
            "riwayat_pengalaman"  =>$this->input->post('riwayat_pengalaman',true),
        ];

        $this->db->insert('riwayat_kerja', $data);
    }
    public function getRiwayatkerja($limit, $start, $keyword=null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('departemen', $keyword);
            $this->db->or_like('riwayat_pendidikan', $keyword);
        }
        return $this->db->get('riwayat_kerja', $limit, $start)->result_array();
    }
    public function countAllRiwayatkerja()
    {
        return $this->db->get('riwayat_kerja')->num_rows();
    }
    public function getRiwayatkerjaById($id_pegawai)
    {
        return $this->db->get_where('riwayat_kerja',['id_pegawai' => $id_pegawai])->row_array();
    }
    public function ubahDatariwayatkerja()
    {   
        $data =[
            "nama"  =>$this->input->post('nama',true),
            "departemen"  =>$this->input->post('departemen',true),
            "riwayat_pendidikan"  =>$this->input->post('riwayat_pendidikan',true),
            "riwayat_pengalaman"  =>$this->input->post('riwayat_pengalaman',true),
        ];

        $this->db->where('id_pegawai',$this->input->post('id_pegawai'));
        $this->db->update('riwayat_kerja', $data);
    }
    public function hapusDataRiwayatkerja($id_pegawai)
    {
        // $this->db->where('id_pribadi', $id_pribadi);
        $this->db->delete('riwayat_kerja',['id_pegawai' => $id_pegawai]);
    }
   
}
