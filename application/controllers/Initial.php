<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Initial extends CI_Controller {

	function __construct() {
        parent::__construct();

        $this->load->model('grocery_crud_model');

    }

	public function index() {
		$data['title'] = "Instik - Initial Page";

		$this->load->view('pages/initial_page', $data);
	}

	public function login($message = null) {
		$data['message'] = $message;
		$data['title'] = "Instik - Login Page";

		$this->load->view('pages/login', $data);
	}

	public function register($message = null) {
		$data['message'] = $message;
		$data['title'] = "Instik - Register Page";

		$this->load->view('pages/register', $data);
	}

}
