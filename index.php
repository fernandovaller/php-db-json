<?php
include 'class/JsonDB.php';
include 'class/Usuarios.php';

$usuarios = array(
	'fernando valler' => 'fernando@email.com',
	'renata' => 'renata@email.com',
	'pedro' => 'pedro@email.com',
	'joão batista' => 'joao@email.com'
);

//instancias
$db = new JsonDB('db.json');

//criando um usuario
//foreach ($usuarios as $user => $email) {	
	$usuario = new Usuarios('valler', 'valler@gmail.com');
//}

//echo get_class($usuario);

//$db->add('2', 'Fernando valler');
//$db->add($usuario->getId(), $usuario->to_array());
//$db->save();

//recuperando um registro
// $usuario = $db->get($usuario->getId());
// echo '<pre>';
// var_dump($usuario);

//recupera todo os registros
$dados = $db->all();
foreach ($dados as $key => $value) {
	var_dump($value);
}


