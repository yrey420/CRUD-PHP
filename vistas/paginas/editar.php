<?php 
if (isset($_GET["id"])) {
	# code...

	$item= "id";
	$valor=$_GET["id"];

	$usuario= ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
	
}


 ?>


<h1>editar</h1>

<h1>THIS IS THE FIRST WITH VSCODE</h1>



<div class="d-flex justify-content-center text-center">
	<form class="was-validated p-5 bg-light" method="post">
		<div class="form-group">
			
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user-astronaut"></i>
					</span>
				</div>
				<input type="text" class="form-control" id="uname" value="<?php echo $usuario["nombre"]; ?>" placeholder="enter username" name="actName" >
			</div>
		</div>
		<div class="form-group">	
			
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>
				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="actPwd" >
				<input type="hidden" name="passwordActual" value="<?php echo $usuario["password"];?>" >
				<input type="hidden" name="idUsuario" value="<?php echo $usuario["id"];?>" >

			</div>

			

		</div>
		<div class="form-group">
			
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="email" class="form-control" id="email" placeholder="Enter Email" value="<?php echo $usuario["email"]?> "name="actEmail" >
			</div>
			<br>


			<?php  


			$actualizar=ControladorFormularios::ctrActulizarRegistros();
			

			if ($actualizar == "ok") {

				echo '<script>

				if (window.history.replaceState){
					window.history.replaceState(null, null, window.location.href)
				}
				</script>';
			

				echo '<div class="alert alert-success">Usuario actualizado</div>
				

				<script>

				setTimeout(function(){

					window.location="index.php?pagina=inicio";



				},3000)

				</script>';

			}	
			 

			
			 ?>
			<button type="submit" class="btn btn-primary">Update</button>

		</div>

	</form>
</div>