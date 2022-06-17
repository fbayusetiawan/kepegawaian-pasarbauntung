<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_m extends CI_Model
{

    function getPegawaiAktif()
    {
        $this->db->where('isActive', '1');
        $this->db->where('statusKepegawaian', '1');
        return $this->db->get('pegawai')->num_rows();
    }

    function getPegawaiAktif2()
    {
        $this->db->where('isActive', '1');
        $this->db->where('statusKepegawaian', '2');
        return $this->db->get('pegawai')->num_rows();
    }
    
    function getPegawaiAktif3()
    {
        $this->db->where('isActive', '1');
        $this->db->where('statusKepegawaian', '3');
        return $this->db->get('pegawai')->num_rows();
    }

    function getCutiAktif()
    {
        $this->db->where('verify', '2');
        return $this->db->get('cuti')->num_rows();
    }

    function getPrestasi()
    {
        // $this->db->where('verify', '2');
        return $this->db->get('prestasi_detail')->num_rows();
    }

    function getNaikPangkat()
    {
        // $this->db->where('verify', '2');
        return $this->db->get('naikpangkat')->num_rows();
    }
}

/* End of file */
