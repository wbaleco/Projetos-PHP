<?php
class Usuario{
    public $nm_usuario,$ds_email,$ds_senha;
    
    //o erro tava aqui o tempo todo olha o que eu tive que fazer mudar
    //o nome dos campos para os campos iguais ao do banco ai funciono.
    public function __construct($nm_usuario,$ds_email,$ds_senha){
        $this->nm_usuario = $nm_usuario;
        $this->ds_email =$ds_email;
        $this->ds_senha = $ds_senha;
    }
    // os parametros da função são os nomes das colunas da tabela
    
    public function getNome(){
        return $this->nm_usuario;
    }
    
    public function getEmail(){
        return $this->ds_email;
    }
    
    public function getSenha(){
        return $this->ds_senha;
    }
    
}