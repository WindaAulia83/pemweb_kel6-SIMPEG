<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profilperusahaan_model extends CI_Model
{
    public function get_user_by_email($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('login')->row_array(); // Ambil satu baris data
    }
}
