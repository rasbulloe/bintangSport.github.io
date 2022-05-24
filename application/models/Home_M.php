<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_M extends CI_Model
{

    public function getDate()
    {
        $this->db->select('*');
        $this->db->from('tJadwal');
        $this->db->where('tglJadwal' == date('Y-m-d'));
        // $this->db->order_by('kdJam', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
}
