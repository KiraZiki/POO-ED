<?php 

class carro{

    private $modelo;
    private $cor;
    private $placa;
    private $numeroPortas;

    //Getters e Setters
    function set_modelo($modelo){
        $this->modelo = $modelo;
    }
    function get_modelo(){
        return($this->modelo);
    }
    function set_cor($cor){
        $this->cor = $cor;
    }
    function get_cor(){
        return($this->cor);
    }
    function set_placa($placa){
        $this->placa = $placa;
    }
    function get_placa(){
        return($this->placa);
    }
    function set_numeroPortas($numeroPortas){
        $this->numeroPortas = $numeroPortas;
    }
    function get_numeroPortas(){
        return($this->numeroPortas);
    }

}

?>