<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    // public function index()
    // {
    //     // $this->load->view('templates/header', $data);
    //     // $this->load->view('templates/sidebar', $data);
    //     // $this->load->view('templates/topbar', $data);
    //     $data['transaksi'] = $this->db->get_where('transaksi', ['jam_mulai' => date('H:i', 1600)]);
    //     $this->load->view('user/index', $data);
    //     // $this->load->view('templates/footer');
    // }

    public function index()
    {
        $data['title'] = 'Bintang Sport';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jadwalLapang'] =  $this->db->get_where('tjadwal', ['tglJadwal' => date('d-m-Y')])->row_array();

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


        $this->load->view('pelanggan/header', $data);
        $this->load->view('pelanggan/topbar', $data);
        $this->load->view('pelanggan/index', $data);
        $this->load->view('pelanggan/footer');
    }

    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user');
        }
    }


    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
}
