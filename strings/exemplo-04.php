<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";



$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

var_dump($q);

echo "<br>";

var_dump($texto);

echo "<br>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2);

?>