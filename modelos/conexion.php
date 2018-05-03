<?php

class Conexion{

	static public function conectar(){
		try{
      
		$link = new PDO('mysql:host=localhost:33065;dbname=pos;charset=UTF8','root','123');
}
catch (PDOException $e){

	echo 'se a producido un error:' .$e->getMessage();

	die();
}
		

		return $link;

	}

}