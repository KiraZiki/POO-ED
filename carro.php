<?php

class carro{

    //atributos
    public $modelo;
    public $cor;
    public $placa;
    public $numeroPortas;

    function __construct($modelo, $cor, $placa, $numeroPortas){
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->placa = $placa;
        $this->numeroPortas = $numeroPortas;
    }

    //Métodos
    function ligar(){
        echo "O carro " . $this->modelo . " está ligado!";
    }
    function acelerar(){
        echo "O carro " . $this->modelo . " stá acelerando...";
    }function frear(){
        echo "O caerro " . $this->modelo . " está freando...";
    }
    function trocarMacha(){
        echo "O caerro " . $this->modelo . " está trocou de macha!";
    }

    function acionarSeta($orientacao){
        if($orientacao == "esquerda") echo $this->medelo . ", seta para esquerda acionado...";
        else if($orientacao == "direita") echo $this->medelo . ", seta para direita acionado...";
        else echo "Prudentino!";
    }

}



?>