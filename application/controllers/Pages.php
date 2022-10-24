<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    private $userSession = [];

    public function __construct() {
        parent::__construct();

        $this->load->model('grocery_crud_model');
    }

    public function feed() {
        $data['title'] = 'Instik - Feed Page'; 

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
        $data['title'] = "Instik - About Page";

        $this->load->view('pages/about', $data);
    }

    private function login($user) {
        $crud = new Grocery_crud_model();
        $crud->set_basic_table('usuario');
        $users = $crud->get_list();
        $users = (array)$users;

        $verific = $this->verific_email_senha($users, $user);
        if($verific !== null){
            $output = $user;

            $user['is_log'] = 1;
            
            return $output;
        }

        return 'Email ou senha incorretos';
    }

    private function register($user) {
        $crud = new Grocery_crud_model();
        $crud->set_basic_table('usuario');
        $users = $crud->get_list();
        $users = (array)$users;

        $verific = $this->verific_email($users, $user);
        if($verific !== null){
            return 'Usuario já existe';
        }

        $output = $user;

        $insert['nome'] = $user['nome'];
        $insert['email'] = $user['email'];
        $insert['senha'] = $user['senha'];
        
        $insert['data_criacao'] = date_create()->format('D, d M Y H:i:s');
        $insert['data_login'] = date_create()->format('D, d M Y H:i:s');
        $insert['is_log'] = 1;

        $userIsSuccess = $crud->db_insert($insert);

        if(!$userIsSuccess){
            return "Erro ao criar usuario";
        }

        return $output;
    }

    private function verific_email($users, $user) {
        foreach ($users as $item) {

            $item = (array)$item;

            if($item['email'] === $user['email']) {
                return $item;
            }
        }
        return null;
    }

    private function verific_email_senha($users, $user) {
        foreach ($users as $item) {

            $item = (array)$item;

            if($item['email'] === $user['email'] &&
            $item['senha'] === $user['senha']) {
                return $item;
            }
        }
        return null;
    }

}
