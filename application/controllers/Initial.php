<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Initial extends CI_Controller {

	function __construct() {
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

	public function register($message = null) {
		$data['message'] = $message;
		$data['title'] = "Insta - Register Page";

		$this->load->view('pages/register', $data);
	}

//	public function verific($user) {
//		$data = $user;
//
//		$crud = new Grocery_crud_model();
//
//		$crud->set_basic_table('usuario');
//		$users = $crud->get_list();
//
//		$exist = false;
//		$output = null;
//
//		if(count($data) > 2){
//
//			foreach ($users as $user) {
//				if ($user['email'] === $data['email']) {
//
//					$exist = true;
//					$output = $user;
//
//				}
//			}
//
//			if ($exist) {
//				$this->register('Usuário já cadastrado');
//				return;
//			}
//
//			$isSuccess = $crud->db_insert($data);
//
//			if (!$isSuccess) {
//				$this->register('Houve algum erro ao realizar cadastro');
//				return;
//			} 
//
//			$data = $output;
//			$data['is_log'] = 1; 
//			$crud->db_update($data, $data['id']);
//
//		} else {
//
//			foreach ($users as $user) {
//				if ($user['email'] === $data['email'] &&
//				$user['senha'] === $data['password']) {
//
//					$exist = true;
//					$output = $user;
//
//				}
//			} 
//		
//			if(!$exist) {
//				$this->login('Email ou senha incoretos');
//				return;
//			} 
//
//			$data = $output;
//
//		}
//		return $data;
//	}

}
