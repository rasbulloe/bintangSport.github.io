<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Booking_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['tot_penghasilan'] = $this->Booking_model->tot_penghasilan();
        $data['tot_pesanan'] = $this->Booking_model->tot_pesanan();
        $data['tot_pelanggan'] = $this->db->get_where('user', ['role_id' => 2])->num_rows();
        $data['pesanan_pending'] = $this->Booking_model->pesanan_pending();

        $keywordTgl = $this->input->post('keywordTgl');

        if ($keywordTgl == null) {

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
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data['cari11'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 1, 'kdLapang' => 1])->row_array();
            $data['cari21'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 2, 'kdLapang' => 1])->row_array();
            $data['cari31'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 3, 'kdLapang' => 1])->row_array();
            $data['cari41'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 4, 'kdLapang' => 1])->row_array();
            $data['cari51'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 5, 'kdLapang' => 1])->row_array();
            $data['cari61'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 6, 'kdLapang' => 1])->row_array();
            $data['cari71'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 7, 'kdLapang' => 1])->row_array();
            $data['cari81'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 8, 'kdLapang' => 1])->row_array();
            $data['cari91'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 9, 'kdLapang' => 1])->row_array();
            $data['cari101'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 10, 'kdLapang' => 1])->row_array();
            $data['cari111'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 11, 'kdLapang' => 1])->row_array();
            $data['cari121'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 12, 'kdLapang' => 1])->row_array();
            $data['cari131'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 13, 'kdLapang' => 1])->row_array();

            $data['cari12'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 1, 'kdLapang' => 2])->row_array();
            $data['cari22'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 2, 'kdLapang' => 2])->row_array();
            $data['cari32'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 3, 'kdLapang' => 2])->row_array();
            $data['cari42'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 4, 'kdLapang' => 2])->row_array();
            $data['cari52'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 5, 'kdLapang' => 2])->row_array();
            $data['cari62'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 6, 'kdLapang' => 2])->row_array();
            $data['cari72'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 7, 'kdLapang' => 2])->row_array();
            $data['cari82'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 8, 'kdLapang' => 2])->row_array();
            $data['cari92'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 9, 'kdLapang' => 2])->row_array();
            $data['cari102'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 10, 'kdLapang' => 2])->row_array();
            $data['cari112'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 11, 'kdLapang' => 2])->row_array();
            $data['cari122'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 12, 'kdLapang' => 2])->row_array();
            $data['cari132'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 13, 'kdLapang' => 2])->row_array();

            $data['cari13'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 1, 'kdLapang' => 3])->row_array();
            $data['cari23'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 2, 'kdLapang' => 3])->row_array();
            $data['cari33'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 3, 'kdLapang' => 3])->row_array();
            $data['cari43'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 4, 'kdLapang' => 3])->row_array();
            $data['cari53'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 5, 'kdLapang' => 3])->row_array();
            $data['cari63'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 6, 'kdLapang' => 3])->row_array();
            $data['cari73'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 7, 'kdLapang' => 3])->row_array();
            $data['cari83'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 8, 'kdLapang' => 3])->row_array();
            $data['cari93'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 9, 'kdLapang' => 3])->row_array();
            $data['cari103'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 10, 'kdLapang' => 3])->row_array();
            $data['cari113'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 11, 'kdLapang' => 3])->row_array();
            $data['cari123'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 12, 'kdLapang' => 3])->row_array();
            $data['cari133'] = $this->db->get_where('tjadwal', ['tglJadwal' => $keywordTgl, 'kdJam' => 13, 'kdLapang' => 3])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function tambahRole()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('role', 'Role', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Role added!</div>');
            redirect('admin/role');
        }
    }


    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }

    public function add()
    {
        $data['title'] = 'Add Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id' => $id,
                'role' => $this->input->post('role', true)
            ];
            $this->db->where('id', $data['id']);
            $this->db->update('user_role', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Role Success!</div>');
            redirect('admin/role');
        }
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus Role Success!</div>');
        redirect('admin/role');
    }
}
