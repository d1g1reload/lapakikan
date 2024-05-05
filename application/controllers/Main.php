<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{


	public function index()
	{
		$data['title'] = "Lapak Ikan";
		$data['content'] = "app/home";
		$this->load->view('layouts/main', $data);
	}

	function page_auth()
	{
		$data['title'] = "Akun";
		$data['content'] = "app/auth/welcome";
		$this->load->view('layouts/main', $data);
	}

	function page_login()
	{
		$data['title'] = "Login";
		$data['content'] = "app/auth/login";
		$this->load->view('layouts/main', $data);
	}

	function page_forgot()
	{
		$data['title'] = "Lupa Password";
		$data['content'] = "app/auth/forgot";
		$this->load->view('layouts/main', $data);
	}

	function page_registration()
	{
		$data['title'] = "Registrasi Akun";
		$data['content'] = "app/auth/registration";
		$this->load->view('layouts/main', $data);
	}

	function page_otp()
	{

		$data['title'] = "OTP";
		$data['content'] = "app/auth/otp";
		$this->load->view('layouts/main', $data);
	}
}
