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

		$this->load->view('pages/initial_page', $data);
	}

	public function login($message = null) {
		$data['message'] = $message;
		$data['title'] = "Insta - Login Page";

		$this->load->view('pages/login', $data);
	}

	public function new_login() {
		$data = $_POST;

		$crud = new Grocery_crud_model();

		$crud->set_basic_table('users');
		$output = $crud->get_list();

		$exist = false;
		$userOut = null;

		foreach ($output as $user) {
			if ($user['email'] === $data['email'] &&
				$user['password'] === $data['password']) {

				$exist = true;
				$userOut = $user;

			}
		} 
		
		if($exist) {
			$this->feed($userOut);
		} else {
			$this->login('Email ou Senha incorretos');
		}
	}

	public function feed($user = null) {
			$data['user'] = $user;
			$data['title'] = "Insta - Feed Page";
	
			$this->load->view('pages/feed', $data);
	}

	public function register($message = null) {
		$data['message'] = $message;
		$data['title'] = "Insta - Register Page";

		$this->load->view('pages/register', $data);
	}

	public function new_register() {
		$data = $_POST;

		$crud = new Grocery_crud_model();

		$crud->set_basic_table('users');
		$users = $crud->get_list();

		$exist = false;

		foreach ($users as $user) {
			if ($user['email'] === $data['email'] ||
				$user['id']  === $data['id']) {

				$exist = true;

			}
		}

		if ($exist) {
			$this->register('Usuário já cadastrado');
			return;
		}

		$isSuccess = $crud->db_insert($data);

		if (!$isSuccess) {
			$this->register('Houve algum erro ao realizar cadastro');
		} else {
			$this->feed($data);
		}

	}

}
