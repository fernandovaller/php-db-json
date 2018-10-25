<?php

class Conexao {
	private static $instancia;	

	public static function getConexao(){
		if(!self::$instancia){
			self::$instancia = new PDO('mysql:host=localhost;dbname=cursophp', 'root', '');
		}
		return self::$instancia;
	}

}