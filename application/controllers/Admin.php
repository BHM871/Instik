<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->library('grocery_CRUD');
    }

    private function crud() : Grocery_CRUD {
        $crud = new Grocery_CRUD;
        $crud->set_language('pt-br.portuguese');
        return $crud;
    }

    private function output($crud) {
        $output = $crud->render();

        $this->load->view('example', (array) $output);
    }

    public function usuarios() {

        $crud = $this->crud();

        $crud->set_table('usuario');
        $crud->set_subject('Usuário');

        $crud->set_relation('is_log', 'is_log', 'on_or_offline');

        $crud->display_as('is_log', 'Logado');
        $crud->display_as('data_criacao', 'Data de criação');
        $crud->display_as('data_login', 'Data do último login');
        $crud->columns([
            'id',
            'nome',
            'email',
            'senha',
            'data_criacao',
            'data_login',
            'is_log'
        ]);

        $crud->edit_fields([
            'nome',
            'email',
            'senha',
            'is_log',
            'data_login'
        ]);
        $crud->add_fields([
            'nome',
            'email',
            'senha',
            'data_criacao',
            'data_login',
            'is_log'
        ]);

        $crud->set_rules('nome', 'Nome', 'required', ['required' => 'Nome é obrigatório']);
        $crud->set_rules('email', 'Email', 'required|valid_email', ['required' => 'Email é obrigatório', 'valid_email' => 'Preencha com um email válido']);
        $crud->set_rules('senha', 'Senha', 'required', ['required' => 'Coloque uma senha']);
        $crud->set_rules('data_login', 'Data do último login', 'required');
        
        $this->output($crud);
    }

    public function perfis() {

        $crud = $this->crud();
        
        $crud->set_table('perfil');
        $crud->set_subject('Perfil');

        $crud->set_relation('id_user', 'usuario', 'email');

        $crud->display_as('foto', 'Imagem perfil');
        $crud->display_as('data_nascimeto', 'Data de Nascimento');
        $crud->display_as('numero_seguidores', 'Seguidores');
        $crud->display_as('numer_publicacao', 'Posts');
        $crud->display_as('bio', 'Biografia');
        $crud->display_as('id_user', 'Usuário');
        $crud->columns([
            'id',
            'nome',
            'foto',
            'telefone',
            'bio',
            'numero_seguidores',
            'numero_publicacao',
            'id_user'
        ]);

        $crud->set_field_upload('foto', 'assets/uploads/files/images');
        $crud->edit_fields([
            'nome',
            'foto',
            'telefone',
            'bio',
            'numero_seguidores',
            'numer_publicacao'
        ]);
        $crud->add_fields([
            'nome',
            'foto',
            'telefone',
            'data_nascimento',
            'bio',
            'numero_seguidores',
            'numer_publicacao',
            'id_user'
        ]);

        $crud->set_rules('nome', 'Nome', 'required');
        $crud->set_rules('foto', 'Imagem perfil', 'required');
        $crud->set_rules('data_nascimento', 'Data de nascimento', 'required');
        $crud->set_rules('bio', 'Bioagrafia', 'required');
        $crud->set_rules('numero_seguidores', 'Seguidores', 'required');
        $crud->set_rules('numer_publicacao', 'Posts', 'required');
        $crud->set_rules('id_user', 'Usuário', 'required');

        $this->output($crud);
    }

    public function publicacoes() {
    
        $crud = $this->crud();

        $crud->set_table('pulblicacao');
        $crud->set_subject('Publicação');

        $crud->set_relation('id_perfil', 'perfil', 'nome');

        $crud->display_as('data_criacao', 'Data de criação');
        $crud->display_as('id_perfil', 'Meu perfil');
        $crud->columns([
            'id',
            'titulo',
            'texto',
            'data_criacao',
            'id_perfil'
        ]);

        $crud->edit_fields([
            'titulo',
            'texto',
            'id_perfil'
        ]);
        $crud->add_fields([
            'titulo',
            'texto',
            'data_criacao',
            'id_perfil'
        ]);

        $crud->set_rules('texto', 'Conteúdo', 'required', ['required' => 'Você precisa inserir um conteúdo para publicar']);
        $crud->set_rules('data_criacao', 'Data de criação', 'required');
        $crud->set_rules('id_perfil', 'Perfil', 'required');

        $this->output($crud);
    }

    public function comentarios() {

        $crud = $this->crud();
        
        $crud->set_table('comentario');
        $crud->set_subject('Comentário');

        $crud->set_relation('id_publi', 'pulblicacao', 'titulo');
        $crud->set_relation('id_perfil', 'perfil', 'nome');

        $crud->display_as('data_criacao', 'Data de criação');
        $crud->display_as('id_publi', 'Publicação');
        $crud->display_as('id_perfil', 'Meu perfil');
        $crud->columns([
            'id',
            'texto',
            'data_criacao',
            'id_publi',
            'id_perfil'
        ]);

        $crud->edit_fields([
            'texto',
            'id_publi',
            'id_perfil'
        ]);
        $crud->add_fields([
            'texto',
            'data_criacao',
            'id_publi',
            'id_perfil'
        ]);

        $crud->set_rules('texto', 'Texto', 'required');
        $crud->set_rules('data_criacao', 'Data de criação', 'required');
        $crud->set_rules('id_publi', 'Publicação', 'required');
        $crud->set_rules('id_perfil', 'Perfil', 'required');
        
        $this->output($crud);
    }

    public function seguidores() {
        
        $crud = $this->crud();

        $crud->set_table('seguidores');
        $crud->set_subject('Seguidor');

        $crud->set_relation('id_user', 'usuario', 'email');
        $crud->set_relation('id_perfil', 'perfil', 'nome');

        $crud->display_as('id_user', 'Seguindo');
        $crud->display_as('data', 'Desde');
        $crud->display_as('id_perfil', 'Meu perfil');
        $crud->columns([
            'id',
            'id_user',
            'data',
            'id_perfil'
        ]);
        
        $crud->edit_fields([
            'data',
            'id_user',
            'id_perfil'
        ]);
        $crud->add_fields([
            'data',
            'id_user',
            'id_perfil'
        ]);

        $crud->set_rules('data', 'Seguindo desde', 'required');
        $crud->set_rules('id_user', 'Usuário', 'required');
        $crud->set_rules('id_perfil', 'Perfil', 'required');

        $this->output($crud);
    }

}