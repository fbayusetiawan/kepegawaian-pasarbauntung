<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kontrak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kontrak_m', 'primaryModel');
    }
    public $titles = 'Perpanjang Kontrak';
    public $vn = 'Kontrak';

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

    function aktif()
    {
        $object = [
            'verify' => '4'
        ];
        $this->db->where('idKontrak', $this->uri->segment(4));
        $this->db->update('kontrak', $object);
        redirect('admin/' . $this->vn);
    }

    function surat()
    {
        $data['title'] = $this->titles;
        $id = $this->uri->segment(4);
        $data['row'] = $this->primaryModel->getDataSuratById($id);
        $this->load->view($this->vn . '/sk', $data);
    }

    // sisi pegawai 
    function pengajuan()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Tambah Data " . $this->titles;
        $this->template->load('template', $this->vn . '/pengajuan', $data);
    }

    function pengajuanAction()
    {
        $this->primaryModel->pengajuan($this->uploadFile());
        redirect('admin/' . $this->vn . '/riwayat');
    }

    public function Riwayat()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Data " . $this->titles;
        $data['data'] = $this->primaryModel->getAllDataByPegawai();

        $this->template->load('template', $this->vn . '/riwayat', $data);
    }

    function uploadFile()
    {
        $config['encrypt_name']         = TRUE;
        $config['upload_path']          = './upload/berkas/';
        $config['allowed_types']        = 'jpg|png|pdf|doc';
        $config['max_size']             = 5120; // imb
        $this->load->library('upload', $config);
        // proses upload
        $this->upload->do_upload('berkas');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }
}

/* End of file Rt.php */
