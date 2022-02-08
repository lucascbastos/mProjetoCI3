<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa_model
 *
 * @author lucas.bastos
 */
class Pessoa_model extends CI_Model {
    //put your code here
    
    function __construct() {
        parent::__construct();
    }
    
    function inserir($p){
        return $this->db->insert('pessoa',$p); //pessoa é o nome da tb no BD
    }
    
    function deletar($id){
        $this->db->where('idPessoa',$id);
        return $this->db->delete('pessoa');
    }
    
    function editar($id){
        $this->db->where('idPessoa',$id);
        $result = $this->db->get('pessoa');
        return $result->result();
    }
    
    function atualizar($p){
        $this->db->where('idPessoa',$p['idPessoa']);
        $this->db->set($p);
        return $this->db->update('pessoa');
    }

    /**
     * Este método retorna a lista de pessoas.
     */
    function listar(){
        $this->db->select('*');
        $this->db->from('pessoa');
        $this->db->order_by('nome','ASC');
        $query = $this->db->get();
        return $query->result();
    }
}
