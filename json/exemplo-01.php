<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Frederico',
	'idade' => 28 
));


array_push($pessoas, array(
	'nome' => 'Paulo',
	'idade' => 52 
));

echo json_encode($pessoas);

 ?>