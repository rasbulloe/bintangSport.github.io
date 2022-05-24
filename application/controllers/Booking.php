<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Booking_model');
        // is_logged_in();
    }


    public function index()
    {

        // PAGINATION
        // CONFIG
        $config['base_url'] = 'http://localhost/ProjectTA/Booking/index';
        $config['total_rows'] = $this->Booking_model->countAllBooking();
        $config['per_page'] = 10;

        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);



        $data['title'] = 'Managemen Booking Lapang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['start'] = $this->uri->segment(3);
        $data['booking'] = $this->Booking_model->getAllBooking($config['per_page'], $data['start']);

        $data['jam'] = $this->Booking_model->getAllJam();
        $data['lapang'] = $this->Booking_model->getAllLapang();
        $data['invoice'] = $this->Booking_model->invoice_no();
        $data['bookingById'] = $this->Booking_model->getAllBookingByUser();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('booking/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($order_id)
    {
        $data['title'] = 'Detail Booking Lapang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['view'] = $this->Booking_model->getAllBokingById($order_id);
        // $data['invoice'] = $this->Booking_model->invoice_no();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('booking/detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambahPesanan()
    {
        // PAGINATION
        // CONFIG
        $config['base_url'] = 'http://localhost/ProjectTA/Booking/index';
        $config['total_rows'] = $this->Booking_model->countAllBooking();
        $config['per_page'] = 10;

        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);


        $data['title'] = 'Managemen Booking Lapang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Booking_model');
        $data['booking'] = $this->Booking_model->getAllBooking($config['per_page'], $data['start']);
        $data['jam'] = $this->Booking_model->getAllJam();
        $data['lapang'] = $this->Booking_model->getAllLapang();
        $data['invoice'] = $this->Booking_model->invoice_no();

        $this->form_validation->set_rules('tglJadwal', 'tglMain', 'required');

        if ($this->form_validation->run() == true) {
            $this->Booking_model->addBoking($config['per_page'], $data['start']);
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('booking/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function batal($order_id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Booking_model->batalBooking($order_id);
        redirect('booking/index');
    }

    public function lunas($order_id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Booking_model->lunasBooking($order_id);
        redirect('booking/index');
    }
}
