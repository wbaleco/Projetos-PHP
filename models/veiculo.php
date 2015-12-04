<?php
class Veiculo{
    public $FROTA,$FABRICANTE,$CHASSIS,$TIPO,$PLACA,$ANO,$MODELO,$COR,$RENAVAM;
    
    //o erro tava aqui o tempo todo olha o que eu tive que fazer mudar
    //o nome dos campos para os campos iguais ao do banco ai funciono.
    public function __construct($FROTA,$FABRICANTE,$CHASSIS,$TIPO,$PLACA,$ANO,$MODELO,$COR,$RENAVAM){
        $this->FROTA = $FROTA;
        $this->FABRICANTE =$FABRICANTE;
        $this->CHASSIS = $CHASSIS;
        $this->TIPO = $TIPO;
        $this->PLACA =$PLACA;
        $this->ANO = $ANO;
        $this->MODELO = $MODELO;
        $this->COR =$COR;
        $this->RENAVAM = $RENAVAM;
       
        
    }
}