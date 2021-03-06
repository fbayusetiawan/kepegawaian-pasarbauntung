<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Naikpegawai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Naikpegawai_m', 'primaryModel');
    }
    public $titles = 'Pengangkatan Pegawai';
    public $vn = 'Naikpegawai';

    public function index()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Data " . $this->titles;
        $data['data'] = $this->primaryModel->getAllData();
        $this->template->load('template', $this->vn . '/list', $data);
    }

    public function New()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Data " . $this->titles;
        $data['data'] = $this->primaryModel->getAllDataByVerify(1);
        $this->template->load('template', $this->vn . '/new', $data);
    }

    function setujui()
    {
        $this->primaryModel->verif($this->uri->segment(4), 2);
        redirect('admin/' . $this->vn . '/New');
    }
    function tolak()
    {
        $this->primaryModel->verif($this->uri->segment(4), 3);
        redirect('admin/' . $this->vn . '/New');
    }

    function add()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Tambah Data " . $this->titles;
        // $data['row'] = $this->primaryModel->getAllData();
        $this->template->load('template', $this->vn . '/add', $data);
    }

    function addAction()
    {
        $this->primaryModel->save();
        redirect('admin/' . $this->vn);
    }

    function edit()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Tambah Data " . $this->titles;
        $id = $this->uri->segment(4);
        $data['row'] = $this->primaryModel->getDataById($id);
        $this->template->load('template', $this->vn . '/edit', $data);
    }

    function editAction()
    {
        $id = $this->uri->segment(4);
        $this->primaryModel->update($id);
        redirect('admin/' . $this->vn);
    }

    function delete()
    {
        $id = $this->uri->segment(4);
        $this->primaryModel->delete($id);
        redirect('admin/' . $this->vn);
    }

    // sisi pegawai 
    function ajaxpegawai()
    {
        $nik = $_GET['nik'];
        $this->db->where('nik', $nik);
        $this->db->join('devisi', 'devisi.idDevisi = pegawai.idDevisi', 'left');

        $row = $this->db->get('pegawai')->row();
        if (empty($row->namaPegawai)) :
            $data = [
                'namapegawai' => 'Data Pegawai Tidak ditemukan',
                'ttl' => 'Data Pegawai Tidak ditemukan',
                'sekpeg' => 'Data Pegawai Tidak ditemukan',
                
            ];
            echo json_encode($data);
        else :
            $data = [
                'namapegawai' => $row->namaPegawai,
                'ttl' => $row->tempatLahir . ', ' . tgl_indo($row->tanggalLahir),
                'sekpeg' => fd_kepegawaian($row->statusKepegawaian),
            ];
            echo json_encode($data);
        endif;
    }
    function sk()
    {
        $data['title'] = $this->titles;
        $id = $this->uri->segment(4);
        $data['row'] = $this->primaryModel->getDataById($id);
        $this->load->view($this->vn . '/sk', $data);
    }
}

/* End of file Rt.php */
