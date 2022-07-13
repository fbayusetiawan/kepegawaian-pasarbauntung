<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontrak_m extends CI_Model
{

    public $namaTable = 'kontrak';
    public $pk = 'idKontrak';

    function getAllData()
    {
        $this->db->join('pegawai', 'pegawai.idPegawai = kontrak.idPegawai', 'left');
        
        return $this->db->get($this->namaTable)->result();
    }

    function getAllDataByPegawai()
    {
        $this->db->where('idPegawai', $this->session->userdata('idUser'));
        return $this->db->get($this->namaTable)->result();
    }

    function getAllDataByVerify($Value)
    {
        $this->db->join('pegawai', 'pegawai.idPegawai = kontrak.idPegawai', 'left');
        $this->db->where('verify', $Value);
        return $this->db->get($this->namaTable)->result();
    }

    function getDataById($Value)
    {
        $this->db->where($this->pk, $Value);
        return $this->db->get($this->namaTable)->row();
    }

    function getAllDataByIdPegawai()
    {
        $this->db->where('idPegawai', $this->session->userdata('idUser'));
        $this->db->join('absen', 'absen.idAbsen = absen_detail.idAbsen', 'left');
        return $this->db->get('absen_detail')->result();
    }

    function getDataSuratById($Value)
    {
        $this->db->where($this->pk, $Value);
        $this->db->join('pegawai', 'pegawai.idPegawai = kontrak.idPegawai', 'left');
        $this->db->join('devisi', 'devisi.idDevisi = pegawai.idDevisi', 'left');
        $this->db->join('golongan', 'golongan.idGolongan = pegawai.idGolongan', 'left');
        $this->db->join('pangkat', 'pangkat.idPangkat = pegawai.idPangkat', 'left');

        return $this->db->get($this->namaTable)->row();
    }

    function pengajuan($berkas)
    {
        $object = [
            'idKontrak' => uniqid(),
            'idPegawai' => $this->session->userdata('idUser'),
            'dariTanggal' => $this->input->post('dariTanggal', TRUE),
            'sampaiTanggal' => $this->input->post('sampaiTanggal', TRUE),
            'berkas' => $berkas,
            'ns' => noOtomatis('ns', 'ns', 'cuti'),
            'br' => getRomawi(date('n')),
            'ts' => date('Y'),
            'verify' => '1',
            'tanggalPengajuan' => date('Y-m-d'),
        ];
        $this->db->insert($this->namaTable, $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
    }

    function verif($Value, $ver)
    {
        $object = [
            'verify' => $ver,

        ];
        $this->db->where('idKontrak', $Value);
        $this->db->update($this->namaTable, $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
    }

    function delete($Value)
    {
        $this->db->where($this->pk, $Value);
        $this->db->delete($this->namaTable);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Hapus</div>');
    }
}

/* End of file */
