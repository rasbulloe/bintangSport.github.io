<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('Home_M');
        $data['tittle'] = "Bintang Sport";

        $data['cari11'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 1, 'kdLapang' => 1])->row_array();
        $data['cari21'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 2, 'kdLapang' => 1])->row_array();
        $data['cari31'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 3, 'kdLapang' => 1])->row_array();
        $data['cari41'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 4, 'kdLapang' => 1])->row_array();
        $data['cari51'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 5, 'kdLapang' => 1])->row_array();
        $data['cari61'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 6, 'kdLapang' => 1])->row_array();
        $data['cari71'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 7, 'kdLapang' => 1])->row_array();
        $data['cari81'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 8, 'kdLapang' => 1])->row_array();
        $data['cari91'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 9, 'kdLapang' => 1])->row_array();
        $data['cari101'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 10, 'kdLapang' => 1])->row_array();
        $data['cari111'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 11, 'kdLapang' => 1])->row_array();
        $data['cari121'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 12, 'kdLapang' => 1])->row_array();
        $data['cari131'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 13, 'kdLapang' => 1])->row_array();

        $data['cari12'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 1, 'kdLapang' => 2])->row_array();
        $data['cari22'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 2, 'kdLapang' => 2])->row_array();
        $data['cari32'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 3, 'kdLapang' => 2])->row_array();
        $data['cari42'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 4, 'kdLapang' => 2])->row_array();
        $data['cari52'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 5, 'kdLapang' => 2])->row_array();
        $data['cari62'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 6, 'kdLapang' => 2])->row_array();
        $data['cari72'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 7, 'kdLapang' => 2])->row_array();
        $data['cari82'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 8, 'kdLapang' => 2])->row_array();
        $data['cari92'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 9, 'kdLapang' => 2])->row_array();
        $data['cari102'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 10, 'kdLapang' => 2])->row_array();
        $data['cari112'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 11, 'kdLapang' => 2])->row_array();
        $data['cari122'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 12, 'kdLapang' => 2])->row_array();
        $data['cari132'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 13, 'kdLapang' => 2])->row_array();

        $data['cari13'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 1, 'kdLapang' => 3])->row_array();
        $data['cari23'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 2, 'kdLapang' => 3])->row_array();
        $data['cari33'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 3, 'kdLapang' => 3])->row_array();
        $data['cari43'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 4, 'kdLapang' => 3])->row_array();
        $data['cari53'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 5, 'kdLapang' => 3])->row_array();
        $data['cari63'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 6, 'kdLapang' => 3])->row_array();
        $data['cari73'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 7, 'kdLapang' => 3])->row_array();
        $data['cari83'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 8, 'kdLapang' => 3])->row_array();
        $data['cari93'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 9, 'kdLapang' => 3])->row_array();
        $data['cari103'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 10, 'kdLapang' => 3])->row_array();
        $data['cari113'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 11, 'kdLapang' => 3])->row_array();
        $data['cari123'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 12, 'kdLapang' => 3])->row_array();
        $data['cari133'] = $this->db->get_where('tjadwal', ['tglJadwal' => date('Y-m-d'), 'kdJam' => 13, 'kdLapang' => 3])->row_array();

        $this->load->view('Home/index', $data);
    }
}
