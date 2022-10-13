<?php

class Porfile_model extends CI_Model {

    public function login($data) {
        $crud = new Grocery_crud_model();

        $crud->db_table_exists("usuarios");
        $list = $crud->get_list();

        $exist = false;

        foreach ($list as $user) {
            if ($user['email'] === $data['email']) {
                $exist = true;
            }
        }

        return $exist;
    }

    public function register($data) {

        $crud = new Grocery_crud_model();
        $crud->db_table_exists("usuarios");
        $crud->db_insert($data);

    }

}