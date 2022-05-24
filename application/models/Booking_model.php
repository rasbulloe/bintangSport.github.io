<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_model extends CI_Model
{

    public function getAllBooking($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('tjadwal');
        $this->db->join('lapang', 'tjadwal.kdLapang = lapang.kdLapang', 'LEFT');
        $this->db->join('jam', 'tjadwal.kdJam = jam.kdJam', 'LEFT');
        $this->db->order_by('tglJadwal', 'desc');

        return $this->db->get('', $limit, $start)->result_array();
    }

    public function countAllBooking()
    {
        return $this->db->get('tjadwal')->num_rows();
    }


    public function getAllBookingByUser()
    {
        $user = $this->session->userdata('email');
        $this->db->select('*');
        $this->db->from('tjadwal');
        $this->db->join('lapang', 'tjadwal.kdLapang = lapang.kdLapang');
        $this->db->join('jam', 'tjadwal.kdJam = jam.kdJam', 'LEFT');
        $this->db->where('namaPemesan', $user);
        $this->db->order_by('transaction_time', 'desc');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getAllJam()
    {
        $this->db->select('*');
        $this->db->from('jam');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getAllLapang()
    {
        $this->db->select('*');
        $this->db->from('lapang');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getAllBokingById($order_id)
    {
        // return $this->db->get_where('tjadwal', ['order_id' => $order_id])->row_array();
        $this->db->select('*');
        $this->db->from('tjadwal');
        $this->db->join('lapang', 'tjadwal.kdLapang = lapang.kdLapang');
        $this->db->join('jam', 'tjadwal.kdJam = jam.kdJam', 'LEFT');
        $this->db->where('order_id', $order_id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function getHargaById($kdJam)
    {
        return $this->db->get_where('jam', ['kdJam' => $kdJam])->result();
    }

    public function invoice_no()
    {

        $this->db->select('RIGHT(tjadwal.order_id,4) as kode', FALSE);
        // $this->db->order_by('kode_transaksi', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tjadwal');      //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada      
            $kode = 1;
        }

        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "INV-" . date('dmy-') . $kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;
    }


    public function addBoking()
    {
        $invoice = $this->Booking_model->invoice_no();

        // $kdBoking = $invoice;
        $payment = 'Cash';
        $transaction = date('d-m-Y-T');
        $namaPemesan = $this->input->post('namaPemesan');
        $userBoking = $this->input->post('namaTeam');
        // $tglInvoice = $this->input->post('tglInvoice');
        $kontak = $this->input->post('kontak');
        $tglJadwal = $this->input->post('tglJadwal');
        // $namaPemesan = $this->input->post('namaPemesan');
        $kdLapang = $this->input->post('lapangMain');
        $kdJam = $this->input->post('jamMain');


        $data = [
            'namaPemesan' => $namaPemesan,
            'userBoking' => $userBoking,
            'kontak' => $kontak,
            'tglJadwal' => $tglJadwal,
            'kdLapang' => $kdLapang,
            'kdJam' => $kdJam,
            'payment_type' => $payment,
            'transaction_time' => $transaction,
            'bank' => '-',
            'va_number' => '-'
        ];

        $cariTgl = $this->db->get_where('tjadwal', ['tglJadwal' => $tglJadwal, 'kdLapang' => $kdLapang, 'kdJam' => $kdJam])->row_array();

        if ($cariTgl) {
            $this->session->set_flashdata('gagalBooking', '<div class="alert alert-danger" role="alert">Jadwal Sudah ADA!</div>');
            redirect('Booking');
        } else {
            $this->db->insert('tjadwal', $data);
            $this->session->set_flashdata('tambahBooking', '<div class="alert alert-success" role="alert">New Booking Added!</div>');
            redirect('Booking');
        }
    }


    public function batalBooking($id)
    {
        // $this->load->helper('date');
        // $format = date('Y-m-d H:i:s');

        $this->db->where('order_id', $id);
        $this->db->set('status', 2);
        // $this->db->set('updated_at', $format);
        $this->db->update('tjadwal');
    }

    public function lunasBooking($id)
    {
        // $this->load->helper('date');
        // $format = date('Y-m-d H:i:s');

        $this->db->where('order_id', $id);
        $this->db->set('status', 1);
        // $this->db->set('updated_at', $format);
        $this->db->update('tjadwal');
    }

    public function tot_penghasilan()
    {
        $this->db->select_sum('gross_amount');
        $query = $this->db->get('tjadwal');
        if ($query->num_rows() > 0) {
            return $query->row()->gross_amount;
        } else {
            return 0;
        }
    }

    public function tot_pesanan()
    {
        $this->db->select('*');
        $query = $this->db->get('tjadwal');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function pesanan_pending()
    {
        $this->db->select('status_code');
        $query = $this->db->get('tjadwal');
        $this->db->where('status_code', 201);
        if ($query->num_rows() > 0) {
            return $query->num_rows;
        } else {
            return 0;
        }
    }
}
