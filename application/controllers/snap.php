<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$params = array('server_key' => 'SB-Mid-server-vcUTjRgW1N7WWo5zwRSEo0iD', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');
		$this->load->helper('custom_helper');
		$this->load->model('Booking_model');
	}

	public function index()
	{
		$this->load->view('checkout_snap');
	}

	public function bayar()
	{

		// PAGINATION
		// CONFIG
		$config['base_url'] = 'http://localhost/ProjectTA/snap/bayar/index';
		$config['total_rows'] = $this->Booking_model->countAllBooking();
		$config['per_page'] = 5;

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




		$data['title'] = 'Bintang Sport';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['jadwalLapang'] =  $this->db->get_where('tjadwal', ['tglJadwal' => date('d-m-Y')])->row_array();


		$this->load->model('Booking_model');

		$data['start'] = $this->uri->segment(3);
		$data['booking'] = $this->Booking_model->getAllBooking($config['per_page'], $data['start']);

		$data['jam'] = $this->Booking_model->getAllJam();
		$data['lapang'] = $this->Booking_model->getAllLapang();
		$data['bookingById'] = $this->Booking_model->getAllBookingByUser();


		$this->load->view('pelanggan/header', $data);
		$this->load->view('pelanggan/topbar', $data);
		$this->load->view('pembayaran/index', $data);
		$this->load->view('pelanggan/footer');
	}

	public function export($jenis = 'pdf', $order_id)
	{
		if ($jenis == 'pdf') {
			$data['title'] = 'Invoice Bintang Sport';
			$data['invoice'] = $this->Booking_model->getAllBokingById($order_id);
			$html = $this->load->view('pelanggan/invoice', $data, true);
			generatePdf($html);
		}
	}

	public function getHarga()
	{
		$this->load->model('Booking_model');
		$kdJam = $this->input->post('id');
		$data = $this->Booking_model->getHargaById($kdJam);

		foreach ($data as $row) {
			$output = '<option value="' . $row->harga . '"> ' . $row->harga . '</option>';
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function token()
	{

		$namaPemesan = $this->input->post('namaPemesan');
		$namaTeam = $this->input->post('namaTeam');
		$noTelf = $this->input->post('noTelf');
		$tglMain = $this->input->post('tglMain');
		$lapangMain = $this->input->post('lapangMain');
		$jamMain = $this->input->post('jamMain');
		$jmlBayar = $this->input->post('jmlBayar');


		// Required
		$transaction_details = array(
			'order_id' => rand(),
			'gross_amount' => $jmlBayar, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
			'id' => 'a1',
			'price' => $jmlBayar,
			'quantity' => 1,
			'name' => "Pembayaran Lapang Futsal " . $namaTeam
		);

		// Optional
		// $item2_details = array(
		// 	'id' => 'a2',
		// 	'price' => 20000,
		// 	'quantity' => 2,
		// 	'name' => "Orange"
		// );

		// Optional
		$item_details = array($item1_details);

		// Optional
		// $billing_address = array(
		// 	'first_name'    => "Andri",
		// 	'last_name'     => "Litani",
		// 	'address'       => "Mangga 20",
		// 	'city'          => "Jakarta",
		// 	'postal_code'   => "16602",
		// 	'phone'         => "081122334455",
		// 	'country_code'  => 'IDN'
		// );

		// // Optional
		// $shipping_address = array(
		// 	'first_name'    => "Obet",
		// 	'last_name'     => "Supriadi",
		// 	'address'       => "Manggis 90",
		// 	'city'          => "Jakarta",
		// 	'postal_code'   => "16601",
		// 	'phone'         => "08113366345",
		// 	'country_code'  => 'IDN'
		// );

		// Optional
		$customer_details = array(
			'first_name'    => $namaPemesan,
			'email'         => "andri@litani.com",
			'phone'         => $noTelf,
			// 'billing_address'  => $billing_address,
			// 'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
		//ser save_card true to enable oneclick or 2click
		//$credit_card['save_card'] = true;

		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O", $time),
			'unit' => 'minute',
			'duration'  => 30
		);

		$transaction_data = array(
			'transaction_details' => $transaction_details,
			'item_details'       => $item_details,
			'customer_details'   => $customer_details,
			'credit_card'        => $credit_card,
			'expiry'             => $custom_expiry
		);

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
	}


	public function finish()
	{
		$result = json_decode($this->input->post('result_data'), true);

		$namaPemesan = $this->input->post('namaPemesan');
		$namaTeam = $this->input->post('namaTeam');
		$noTelf = $this->input->post('noTelf');
		$tglMain = $this->input->post('tglMain');
		$lapangMain = $this->input->post('lapangMain');
		$jamMain = $this->input->post('jamMain');

		$data = [
			'order_id' => $result['order_id'],
			'gross_amount' => $result['gross_amount'],
			'payment_type' => $result['payment_type'],
			'transaction_time' => $result['transaction_time'],
			'bank' => $result['va_numbers'][0]['bank'],
			'va_number' => $result['va_numbers'][0]['va_number'],
			'pdf_url' => $result['pdf_url'],
			'status_code' => $result['status_code'],
			'namaPemesan' => $namaPemesan,
			'userBoking' => $namaTeam,
			'kontak' => $noTelf,
			'tglJadwal' => $tglMain,
			'kdLapang' => $lapangMain,
			'kdJam' => $jamMain
		];

		$cariTgl = $this->db->get_where('tjadwal', ['tglJadwal' => $tglMain, 'kdLapang' => $lapangMain, 'kdJam' => $jamMain])->row_array();

		if ($cariTgl) {
			$this->session->set_flashdata('gagalBooking', '<div class="alert alert-danger" role="alert">Jadwal Sudah ADA!</div>');
			redirect('snap/bayar');
		} else {
			$this->db->insert('tjadwal', $data);
			$this->session->set_flashdata('tambahBooking', '<div class="alert alert-success" role="alert">New Booking Added!</div>');
			redirect('snap/bayar');
		}
		// $simpan = $this->db->insert('tJadwal', $data);
		// if ($simpan) {
		// 	echo "Sukses";
		// } else {
		// 	echo "Gagal";
		// }
	}
}
