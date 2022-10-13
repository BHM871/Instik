<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "Main.php";


class Initial extends CI_Controller {

	public function index() {
		$data['title'] = "Insta - Initial Page";

		$this->load->view('pages/initial_page', $data);
	}

	public function login() {
		$data['title'] = "Insta - Login Page";

		$this->load->view('pages/login', $data);
	}

	public function new_login() {
		$data = $_POST;

		$this->load->model('profile_model');
		$exist = $this->profile_model->login($data);
		
		if ($exist) {
			redirect('main/feed');
		} else {
			redirect('login');
		}
		
	}

	public function register() {
		$data['title'] = "Insta - Register Page";

		$this->load->view('pages/register', $data);
	}

	public function new_register() {
		$data = $_POST;

		$this->load->model('profile_model');
		$this->profile_model->register($data);
	}

}
