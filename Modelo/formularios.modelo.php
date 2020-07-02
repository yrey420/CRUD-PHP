<?php 
require_once "conexion.php";



Class ModeloFormulario{

	/* Registro */


	static public function mdlRegistro($tabla, $datos){

		/* statement: Declaracion */
		

		$stmt = Connexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES(:nombre, :email, :password)");

		/* bindParam(); vincula una variable php a un parametro de sustitucioncon nombre o de signode interrogación correspondientede la sentencia SQL que fue usada para preparar la sentencia */


		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);



		if ($stmt->execute()){
			return "ok";
		}

		else{
			print_r(Connexion::conectar()->errorInfo());
		}

		$stmt->close();
		$stmt=null;
		}

	/* Seleccionar Registros */

	static public function mdlSeleccionarRegistros($tabla, $item, $valor){

		if ($item==null && $valor==null) {
			
			$stmt= Connexion::conectar()->prepare("SELECT * FROM $tabla ");

			$stmt->execute();
			return $stmt->fetchAll();
		}
		else{

			$stmt= Connexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();
			
			return $stmt->fetch();
		}


		$stmt->close();
		$stmt=null;
	}



	static public function mdlActualizarRegistros($tabla, $datos){

		/* statement: Declaracion */
		

		$stmt = Connexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email, password=:password WHERE id=:id");

		


		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);



		if ($stmt->execute()){
			return "ok";
		}

		else{
			print_r(Connexion::conectar()->errorInfo());
		}

		$stmt->close();
		$stmt=null;
		}

	/* ELIMINAR REGISTRO MODELO */
	
	static public function mdlEliminarRegistro($tabla, $valor){	


		$stmt = Connexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
		$stmt->bindParam(":id", $valor, PDO::PARAM_INT);

		if ($stmt->execute()){
			return "ok";
		}

		else{
			print_r(Connexion::conectar()->errorInfo());
		}

		$stmt->close();
		$stmt=null;
	}
			
}

 ?>