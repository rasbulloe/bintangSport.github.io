<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapang_model extends CI_Model
{
    public function addLapang()
    {
        $nama_lapang = $this->input->post('nama_lapang');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar'];

        if ($data['gambar'] = '') {
            # code...
        } else {
            $config['upload_path']      = './assets/lapang';
            $config['allowed_types']    = 'gif|jpg|png';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                echo 'Upload gagal';
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = [
            'nama_lapang' => $nama_lapang,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar
        ];

        $this->db->insert('lapang', $data);
    }

    public function editLapang($id_lapang)
    {
        $data = [
            'kdLapang' => $id_lapang,
            'nama_lapang' => $this->input->post('nama_lapang'),
            'deskripsi' => $this->input->post('deskripsi'),
        ];
        $this->db->where('kdLapang', $id_lapang);
        $this->db->update('lapang', $data);
    }

    public function deleteLapang($id_lapang)
    {
        $this->db->where('kdLapang', $id_lapang);
        $this->db->delete('lapang');
    }
}
