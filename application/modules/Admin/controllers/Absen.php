<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Absen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Absen_m', 'primaryModel');
    }
    public $titles = 'Rekapitulasi Absen Bulanan';
    public $vn = 'Absen';

    public function index()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Data " . $this->titles;
        $data['data'] = $this->primaryModel->getAllData();

        $this->template->load('template', $this->vn . '/list', $data);
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

    function detail()
    {
        $id = $this->uri->segment(4);
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Tambah Data " . $this->titles;
        $data['row'] = $this->primaryModel->getDataById($id);
        $data['data'] = $this->primaryModel->getDataPegawai($id);
        $this->template->load('template', $this->vn . '/detail', $data);
    }

    function insertDetail()
    {
        // $hadir = $_GET['h'];
        $izin = $_GET['i'];
        $sakit = $_GET['s'];
        $tk = $_GET['tk'];
        $idPegawai = $_GET['idPegawai'];
        $idAbsen = $_GET['idAbsen'];

        // Validasi 
        $this->db->where('idPegawai', $idPegawai);
        $this->db->where('idAbsen', $idAbsen);
        $cek = $this->db->get('absen_detail')->num_rows();

        $object = [
            'idAbsen' => $idAbsen,
            'idPegawai' => $idPegawai,
            // 'hadir' => $hadir,
            'izin' => $izin,
            'sakit' => $sakit,
            'tanpaKeterangan' => $tk,
            'tanggalInput' => date('Y-m-d'),
        ];
        if ($cek > 0) :
            $this->db->where('idPegawai', $idPegawai);
            $this->db->where('idAbsen', $idAbsen);
            $this->db->update('absen_detail', $object);
        else :
            $this->db->insert('absen_detail', $object);
        endif;
    }

    function getHadir()
    {
        // $tahun_akademik = $_GET['tahun_akademik'];
        $izin = $_GET['i'];
        $sakit = $_GET['s'];
        $tk = $_GET['tk'];
        $idPegawai = $_GET['idPegawai'];
        $idAbsen = $_GET['idAbsen'];
        // return $this->db->get('absen')->num_rows();
        
        $jumlah = $izin - $sakit - $tk;
        $hadir = $jumlah;
        $this->db->where('idPegawai', $idPegawai);
        $this->db->where('idAbsen', $idAbsen);
        // $this->db->where('kodeTahun', $tahun_akademik);
        $data = [
            'hadir' => $hadir,
        ];
        echo json_encode($data);
        $cek = $this->db->get('absen_detail')->num_rows();

        $object = [

            'hadir' => $hadir,

        ];

        if ($cek <= 0) :

        else :
            $this->db->where('idPegawai', $idPegawai);
            $this->db->where('idAbsen', $idAbsen);
            // $this->db->where('kodeTahun', $tahun_akademik);

            $this->db->update('absen_detail', $object);
        endif;
    }

    // sisi pegawai
    public function pegawai()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Data " . $this->titles;
        $data['data'] = $this->primaryModel->getAllDataByIdPegawai();

        $this->template->load('template', $this->vn . '/pegawai', $data);
    }
}

/* End of file Rt.php */
