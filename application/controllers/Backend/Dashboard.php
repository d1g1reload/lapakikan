<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();



        if (!$this->session->userdata('isLoggedIn')) {

            $this->session->set_flashdata('failed', 'maaf silahkan login terlebih dahulu');

            redirect('auth/login');
        }


        if ($this->session->userdata('is_status') == 0) {

            $this->session->set_flashdata('failed', 'maaf akun anda belum terverifikasi');

            redirect('auth/login');
        }

        if ($this->session->userdata('is_status') == 3) {

            $this->session->set_flashdata('failed', 'Maaf akun anda kami blokir.');

            redirect('auth/login');
        }
    }

    function index()
    {

        $data['content_admin'] = "app/backend/dashboard";
        $this->load->view('layouts/admin', $data);
    }

    function product_detail()
    {
        $data['content_admin'] = "app/backend/produk/detail";
        $this->load->view('layouts/admin', $data);
    }
}
