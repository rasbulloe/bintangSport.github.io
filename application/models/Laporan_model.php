<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    public function dataLaporanByTgl($awal, $akhir)
    {
        $this->db->select('*');
        $this->db->from('tjadwal');
        $this->db->join('lapang', 'tjadwal.kdLapang = lapang.kdLapang', 'LEFT');
        $this->db->join('jam', 'tjadwal.kdJam = jam.kdJam', 'LEFT');
        $this->db->where('tglJadwal >=', $awal);
        $this->db->where('tglJadwal <=', $akhir);
        $this->db->order_by('transaction_time', 'desc');

        return $this->db->get()->result_array();
    }

    public function tampil_data() {
        return $this->db->get('tJadwal');
    }
}
