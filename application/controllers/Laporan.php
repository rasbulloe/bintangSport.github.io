<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Laporan_model');
    }

    public function index()
    {

        $this->form_validation->set_rules('awalTgl', 'awal', 'required');
        $this->form_validation->set_rules('akhirTgl', 'akhir', 'required');


        if ($this->form_validation->run() == TRUE) {

            $awal = $this->input->post('awalTgl');
            $akhir = $this->input->post('akhirTgl');

            $data['title'] = 'Laporan Pemesanan';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['laporan'] = $this->Laporan_model->dataLaporanByTgl($awal, $akhir);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laporan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $awal = date('d-m-Y');
            $akhir = date('d-m-Y');

            $data['title'] = 'Laporan Pemesanan';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['laporan'] = $this->Laporan_model->dataLaporanByTgl($awal, $akhir);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laporan/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function dataLaporan()
    {

        $this->form_validation->set_rules('awalTgl', 'awal', 'required');
        $this->form_validation->set_rules('akhirTgl', 'akhir', 'required');
        $awal = $this->input->post('awalTgl');
        $akhir = $this->input->post('akhirTgl');

        if ($this->form_validation->run() == true) {
            $data['title'] = 'Laporan Pemesanan';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['laporan'] = $this->Laporan_model->dataLaporanByTgl($awal, $akhir);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laporan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Masukan tanggal awal atau tanggal akhir!</div>');
        }
    }

    public function export($jenis='pdf')
    {
        $this->form_validation->set_rules('awalTgl', 'awal', 'required');
        $this->form_validation->set_rules('akhirTgl', 'akhir', 'required');
        $awal = $this->input->post('awalTgl');
        $akhir = $this->input->post('akhirTgl');

        if ($this->form_validation->run() == true) {
            // if ($jenis=='pdf') {
            $datacontent['sewa'] = $this->Laporan_model->dataLaporanByTgl($awal, $akhir);
            $html = $this->load->view('laporan/laporan_sewa', $datacontent, TRUE);
            echo $html;
            // }
        } else {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Masukan tanggal awal atau tanggal akhir!</div>');
        }
    }
}
