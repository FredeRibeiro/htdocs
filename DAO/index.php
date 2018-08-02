<?php

require_once("config.php");

//Carrega um usuario.
//$root = new Usuario();
//$root->loadById(3);
//echo $root;
//////////////////////////////////////////////////////////////////////////
//Carrega uma lista de usuarios;
//$lista = Usuario::getList();
//echo json_encode($lista);
//////////////////////////////////////////////////////////////////////////
//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("");
//echo json_encode($search);
//////////////////////////////////////////////////////////////////////////
//Carrega um unsuario usando login e senha
//$usuario = new Usuario();
//$usuario->login("root","123456");
//echo $usuario;
//////////////////////////////////////////////////////////////////////////
//Utilizando a Procedure para inserir dados. 
 //$aluno = new Usuario("Frederico", "frede1089");
 //$aluno->insert();
 //echo $aluno;
//////////////////////////////////////////////////////////////////////////
//Alterando os dados dentro do banco. 
$usuario = new Usuario();

$usuario->loadById(7);

$usuario->update("Frede", "301089");

echo $usuario;
 ?>