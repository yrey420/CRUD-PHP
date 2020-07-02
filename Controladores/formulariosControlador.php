<?php 

Class ControladorFormularios{
         



         /* Registro de usuarios con las variables POST */


	static public function ctrRegistros(){

		if (isset($_POST["registroName"])) {
			# code...
			

			$tabla= "registros";

			$datos= array("nombre"=>$_POST["registroName"],
				"email"=>$_POST["registroEmail"],
				"password"=>$_POST["registroPwd"]);


			$respuesta= ModeloFormulario :: mdlRegistro($tabla, $datos);
			return $respuesta;
		}




	}


         /* Seleccionar Registros */


       static public function ctrSeleccionarRegistros($item, $valor){

       	$tabla="registros";
       	$respuesta=ModeloFormulario::mdlSeleccionarRegistros($tabla, $item, $valor);

       	return $respuesta;

       }

      /* METODO INGRESO */

      public function ctrIngreso(){

      	
      	if (isset($_POST["ingresoEmail"])){
      		$tabla="registros";
      		$item="email";
      		$valor= $_POST["ingresoEmail"];

      		$respuesta = ModeloFormulario::mdlSeleccionarRegistros($tabla, $item, $valor);

      		

      		if ($respuesta["email"]==$_POST["ingresoEmail"] && $respuesta["password"] ==$_POST["ingresoPwd"]) {

      			$_SESSION["validarIngreso"]="ok";

      			echo '<script>

				if (window.history.replaceState){
					window.history.replaceState(null, null, window.location.href)
				}

				window.location = "index.php?pagina=inicio";
				</script>';
			

				echo '<div class="alert alert-danger">Datos erroneos</div>';
      			# code...
      		}
      		else{

      			echo '<script>

				if (window.history.replaceState){
					window.history.replaceState(null, null, window.location.href)
				}
				</script>';
			

				echo '<div class="alert alert-danger">Datos erroneos</div>';
      		}
      	}



      }

      /* ACTULIZAR REGISTRO CONTROLADOR */
      


      static public function ctrActulizarRegistros(){

		if (isset($_POST["actName"])) {


			if ($_POST["actPwd"]!="") {

				$password=$_POST["actPwd"];
				# code...
			}
			else{
				$password=$_POST["passwordActual"];
			}

			$tabla= "registros";

			$datos= array("id"=>$_POST["idUsuario"],
				"nombre"=>$_POST["actName"],
				"email"=>$_POST["actEmail"],
				"password"=>$_POST["actPwd"]);


			$respuesta= ModeloFormulario::mdlActualizarRegistros($tabla, $datos);
			
			return $respuesta;
			}
		}

/* ELIMINAR REGISTRO CONTROLADOR */



		public function ctrEliminarRegistro(){

			if (isset($_POST["eliminarRegistro"])) {
				$tabla="registros";
				$valor=$_POST["eliminarRegistro"];

				$respuesta= ModeloFormulario::mdlEliminarRegistro($tabla, $valor);


				if ($respuesta=="ok") {

					echo '<script>

					if (window.history.replaceState){
						window.history.replaceState(null, null window.location.href);
					}
					window.location = "index.php?pagina=ingreso";

					</script>';

					echo '<div class="alert alert-success">Usuario eliminado del sistema</div>';
					
				}
			}
		}




	}	

 ?>