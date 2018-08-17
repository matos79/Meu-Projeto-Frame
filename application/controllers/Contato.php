<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class contato extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Contatos_model','contatos'); 
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
//        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['contatos'] = $this->contatos->listar();
        $this->load->view('contato', $dados);
//        $this->load->view('template/footer');
    }
    public function inserir(){
        $dados['nome'] = $this->input->post('nome');
        $dados['email'] = $this->input->post('email');
        $this->contatos->inserir($dados);
        redirect('contato');
    }

    public function excluir($id){
        $this->contatos->deletar($id);
        redirect('contato');
    }
    public function  editar ($id){
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['contatoEditar'] = $this->contatos->editar($id);
        //$this->load->view('template/header');
        $this->load->view('contatoEditar',$data);
        //$this->load->view('template/footer');
        
    }
    public function  atualizar () {
        $data['id'] = $this->input->post('id');
        $data['nome'] = $this->input->post('nome');
        $data['email'] = $this->input->post('email');
        $this->contatos->atualizar($data);
        redirect('contato');
    }
}




