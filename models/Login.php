<?php
class Model extends CI_Model{
    
    public function insert(Usuario $usu){
        $data['nm_usuario'] = $usu->getNome();
        $data['ds_email'] = $usu->getEmail();
        $data['ds_senha'] = $usu->getSenha();
        $this->db->insert('Usuario', $data);
        echo ("Cadastro realizado com sucesso");
    }
        
    public function searchAll(){
        $query = $this->db->query("select * from Usuario");
        return $query->result();
    }
    
}