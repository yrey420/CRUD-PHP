<h1>Registro</h1>
<div class="d-flex justify-content-center text-center">
	<form class="was-validated p-5 bg-light" method="post">
		<div class="form-group">
			<label for="uname">Username:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user-astronaut"></i>
					</span>
				</div>
				<input type="text" class="form-control" id="uname" placeholder="enter username" name="registroName" required>
			</div>
		</div>
		<div class="form-group">	
			<label for="pwd">Password:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>
				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="registroPwd" required>
			</div>

			<div class="valid-feedback"> valido.</div>
			<div class="invalid-feedback">Por favor rellene este espacio</div>

		</div>
		<div class="form-group">
			<label for="email" >Email:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="email" class="form-control" id="email" placeholder="Enter Email" name="registroEmail" required>
			</div>
			<br>


			<?php  

			/* INSTANCIA LA CLASE DE UN METODO NO ESTÁTICO */
			//$registro= new ControladorFormularios();
			//$registro->ctrRegistro();

			/* INSTANACIA LA CLASE DE UN METODO ESTÁTICO*/

			$registro= ControladorFormularios::ctrRegistros();

			if ($registro == "ok") {

				echo '<script>

				if (window.history.replaceState){
					window.history.replaceState(null, null, window.location.href)
				}
				</script>';
			

				echo '<div class="alert alert-success">Usuario registrado</div>';
				# code...

			}	


			
			 ?>
			<button type="submit" class="btn btn-primary">submit</button>

		</div>

	</form>
</div>