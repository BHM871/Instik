<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('application/controllers/Main.php');

class Initial extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        $this->load->model('grocery_crud_model');

    }

	public function index() {
		$data['title'] = "Insta - Initial Page";

		$this->load->view('templates/head', $data);
		$this->load->view('pages/initial_page', $data);
		$this->load->view('templates/scripts', $data);
	}

	public function login($message = null) {
		$data['message'] = $message;
		$data['title'] = "Insta - Login Page";

		$this->load->view('templates/head', $data);
		$this->load->view('pages/login', $data);
		$this->load->view('templates/scripts', $data);
	}

	public function feed() {
		$data = $_POST;

		$crud = new Grocery_crud_model();

		$crud->set_basic_table('users');
		$output = $crud->get_list();

		$exist = false;

		foreach ($output as $user) {
			if ($user['email'] === $data['email'] &&
				$user['password'] === $data['password']) {

					$exist = true;

			}
		}

		if($exist) {
			$data['user'] = $user;
			$data['title'] = "Insta - Feed Page";
	
			$this->load->view('templates/head', $data);
			$this->load->view('templates/nav', $data);
			$this->load->view('pages/feed', $data);
			$this->load->view('templates/scripts', $data);
		} else {
			$this->login('Email ou Senha incorretos');
		}
		
	}

	public function register() {
		$data['title'] = "Insta - Register Page";

		$this->load->view('templates/head', $data);
		$this->load->view('pages/register', $data);
		$this->load->view('templates/scripts', $data);
	}

	public function new_register() {
		$data = $_POST;

		$this->load->model('profile_model');
		$this->profile_model->register($data);
	}

}
