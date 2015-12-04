<?php

class Escala{
    public $CLIENTE, $MOTORISTA, $DATA, $LOCAL, $HORA;
    
    public function __construct($CLIENTE, $MOTORISTA, $DATA, $LOCAL,$HORA){
        $this->CLIENTE = $CLIENTE; 
        $this->MOTORISTA = $MOTORISTA; 
        $this->DATA = $DATA;
        $this->HORA = $HORA;
        $this->LOCAL = $LOCAL;
       
    }
}