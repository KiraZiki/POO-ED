<?php

require "carro.php";

$carro1 = new Carro("Classic", "Cinza", "CPF-7521", 4);
$carro2 = new Carro("Civic", "Grafite", "FDS-1212", 4);
$carro3 = new Carro("Ferrari", "Vermelho", "RGB-0001", 2);

$carro1->ligar();
$carro1->acelerar();
$carro1->frear();
$carro1->acionarSeta("Esquerda");

?>