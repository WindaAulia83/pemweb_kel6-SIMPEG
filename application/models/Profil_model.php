<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model {

    // Mendapatkan data profil perusahaan
    public function get_profil() {
        $query = $this->db->get('profile_perusahaan');
        return $query->row_array(); // Mengembalikan satu baris data sebagai array
    }
}
