<?php 


Class Connexion{


	static public function conectar(){

		/* Primer parametro PDO

		Nombre del servidor

		PDO("NombreServidor;", "NombreBasesDeDatos", "nombre Usuario de la base de datos", "Contraseña"); 


		 */
		

		$link=new PDO("mysql:host=localhost;dbname=cursophp", 
			        "root", 
			         "");

		$link->exec("set names utf8");

		return $link;

	}




}
 ?>