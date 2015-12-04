<?php
class Motorista{
    public $ENDERECO,$BAIRRO,$CIDADE,$ESTADO,$CEP,$TELEFONE,$CPF;
    
    //o erro tava aqui o tempo todo olha o que eu tive que fazer mudar
    //o nome dos campos para os campos iguais ao do banco ai funciono.
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