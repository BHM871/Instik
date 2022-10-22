<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('grocery_crud_model');
    }

    public function feed() {
        $data['title'] = 'Initial - Feed Page'; 

        if(count($_POST) != 0){
            $data['user'] = $_POST;

            if(count($data['user']) === 2){
                $data['user'] = $this->login($data['user']);

                if($data['user'] !== $_POST){
                    redirect(base_url().'initial/login?error='.$data['user']);
                    return;
                }
            } else {
                $data['user'] = $this->register($data['user']);

                if($data['user'] !== $_POST){
                    redirect(base_url().'initial/register?error='.$data['user']);
                    return;
                }
            }

        }

        $this->load->view('pages/feed', $data);
    }

    public function about() {
        $data['title'] = "Insta - About Page";

        $this->load->view('pages/about', $data);
    }

    private function login($user) {
        $crud = new Grocery_crud_model();
        $crud->set_basic_table('usuario');
        $users = $crud->get_list()->results_array();

        foreach ($users as $item) {

            if($item['email'] === $user['email'] &&
            $item['senha'] === $user['password']) {
                return $user;
            }
        }

        return 'Email ou se nha incorretos';
    }

    private function register($user) {
        $crud = new Grocery_crud_model();
        $crud->set_basic_table('usuario');
        $users = $crud->get_list()->results_array();

        foreach ($users as $item) {
            if($item['email'] === $user['email'] &&
            $item['senha'] === $user['senha']) {
                return "User já existe";
            }
        }

        $output = $user;

        $user['data_criacao'] = date_format(date_create(), 'dd-MM-yyyy');
        $user['data_login'] = date_format(date_create(), 'dd-MM-yyyy');
        $user['is_log'] = 1;

        $userIsSuccess = $crud->db_insert($user);

        if(!$userIsSuccess){
            return "Erro ao criar user";
        }

        return $output;
    }

}
