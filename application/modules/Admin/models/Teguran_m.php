<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Teguran_m extends CI_Model
{

    public $namaTable = 'teguran';
    public $pk = 'idTeguran';

    function getAllData()
    {
        return $this->db->get($this->namaTable)->result();
    }


    function getDataById($Value)
    {
        $this->db->where($this->pk, $Value);
        return $this->db->get($this->namaTable)->row();
    }


    function save()
    {
        $object = [
            'idTeguran' => uniqid(),
            'blok' => $this->input->post('blok', TRUE),
            'tanggalTeguran' => $this->input->post('tanggalTeguran', TRUE),
            'kesalahan' => $this->input->post('kesalahan', TRUE),
            'hukuman' => $this->input->post('hukuman', TRUE),
            'biaya' => $this->input->post('biaya', TRUE),
            'terbilang' => $this->input->post('terbilang', TRUE),
            'ns' => noOtomatis('ns', 'ns', 'Teguran'),
            'br' => getRomawi(date('n')),
            'ts' => date('Y'),

        ];
        $this->db->insert($this->namaTable, $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
    }

    function update($Value)
    {
        $object = [
            'blok' => $this->input->post('blok', TRUE),
            'tanggalTeguran' => $this->input->post('tanggalTeguran', TRUE),
            'kesalahan' => $this->input->post('kesalahan', TRUE),
            'hukuman' => $this->input->post('hukuman', TRUE),
            'biaya' => $this->input->post('biaya', TRUE),
            'terbilang' => $this->input->post('terbilang', TRUE),
        ];
        $this->db->where($this->pk, $Value);
        $this->db->update($this->namaTable, $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Rubah</div>');
    }

    function delete($Value)
    {
        $this->db->where($this->pk, $Value);
        $this->db->delete($this->namaTable);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Hapus</div>');
    }
}

/* End of file */
