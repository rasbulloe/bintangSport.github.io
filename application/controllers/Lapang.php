<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapang extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Management Lapang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lapang'] = $this->db->get('lapang')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('lapang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = "Management Lapang";
        $data['lapang'] = $this->db->get('lapang')->result_array();
        $this->load->model('Lapang_model');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_lapang', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Desc', 'required');
        // $this->form_validation->set_rules('gambar', 'Gambar', 'required');

        if ($this->form_validation->run() == true) {
            $this->Lapang_model->addLapang();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Lapang Added!</div>');
            redirect('lapang');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lapang/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function edit($kdLapang)
    {
        $data['lapang'] = $this->db->get('lapang')->result_array();
        $this->load->model('Lapang_model');

        $this->form_validation->set_rules('nama_lapang', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Desc', 'required');
        // $this->form_validation->set_rules('gambar', 'Gambar', 'required');

        if ($this->form_validation->run() == true) {
            $this->Lapang_model->editLapang($kdLapang);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Lapang Added!</div>');
            redirect('lapang');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lapang/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function hapus($kdLapang)
    {
        $data['lapang'] = $this->db->get('lapang')->result_array();
        $this->load->model('Lapang_model');
        $this->Lapang_model->deleteLapang($kdLapang);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Lapang Deleted!</div>');
        redirect('lapang');
    }
}
