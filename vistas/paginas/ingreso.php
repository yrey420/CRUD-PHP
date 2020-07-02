<h1>Ingreso</h1>

<div class="d-flex justify-content-center text-center">
	<form class="was-validated p-5 bg-light" method="post">

		<div class="form-group">
			<label for="email" >Email:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="email" class="form-control" id="email" placeholder="Enter Email" name="ingresoEmail" required>
			</div>
			<br>

		</div>
		
		<div class="form-group">	
			<label for="pwd">Password:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>
				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="ingresoPwd" required>
			</div>
							
		</div>
		
			<?php  

			/* INSTANCIA LA CLASE DE UN METODO NO ESTÁTICO */
			$ingreso= new ControladorFormularios();
			$ingreso->ctrIngreso();


			

			
			 ?>
			<button type="submit" class="btn btn-primary">ingresar</button>

	</form>
</div>