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
    
}

class Motorista extends Usuario{
    public $ENDERECO,$BAIRRO,$CIDADE,$ESTADO,$CEP,$TELEFONE,$CPF;
    
    public function __construct($ENDERECO,$BAIRRO,$CIDADE,$ESTADO,$CEP,$TELEFONE,$CPF){
       
        $this->ENDERECO = $ENDERECO;
        $this->BAIRRO = $BAIRRO;
        $this->CIDADE = $CIDADE;
        $this->ESTADO =$ESTADO;
        $this->CEP = $CEP;
        $this->ESTADO = $ESTADO;
        $this->CEP =$CEP;
        $this->TELEFONE = $TELEFONE;
        $this->CPF = $CPF;
    }
        
    }
    class Cliente extends Usuario{
    public $CNPJ,$INSCRICAOESTADUAL,$ENDERECO,$BAIRRO,$CIDADE,$ESTADO,$CEP,$TELEFONE;
    
  
    public function __construct($CNPJ,$INSCRICAOESTADUAL,$ENDERECO,$BAIRRO,$CIDADE,$ESTADO,$CEP,$TELEFONE){
        parent::__construct();
        $this->CNPJ =$CNPJ;
        $this->INSCRICAOESTADUAL = $INSCRICAOESTADUAL;
        $this->ENDERECO = $ENDERECO;
        $this->BAIRRO =$BAIRRO;
        $this->CIDADE = $CIDADE;
        $this->ESTADO = $ESTADO;
        $this->CEP =$CEP;
        $this->TELEFONE = $TELEFONE;
        
    }
   
    
}

