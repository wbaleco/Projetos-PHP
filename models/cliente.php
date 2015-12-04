<?php
class Cliente{
    public $CNPJ,$INSCRICAOESTADUAL,$ENDERECO,$BAIRRO,$CIDADE,$ESTADO,$CEP,$TELEFONE;
    
    //o erro tava aqui o tempo todo olha o que eu tive que fazer mudar
    //o nome dos campos para os campos iguais ao do banco ai funciono.
    public function __construct($CNPJ,$INSCRICAOESTADUAL,$ENDERECO,$BAIRRO,$CIDADE,$ESTADO,$CEP,$TELEFONE){
       
        $this->CNPJ =$CNPJ;
        $this->INSCRICAOESTADUAL = $INSCRICAOESTADUAL;
        $this->ENDERECO = $ENDERECO;
        $this->BAIRRO =$BAIRRO;
        $this->CIDADE = $CIDADE;
        $this->ESTADO = $ESTADO;
        $this->CEP =$CEP;
        $this->TELEFONE = $TELEFONE;
        
    }
    // os parametros da função são os nomes das colunas da tabela
    
    
}