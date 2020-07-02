<?php 

if (!isset($_SESSION["validarIngreso"])) {

	echo '<script>window.location="index.php?pagina=ingreso"</script>';
	return;

	# code...
}

else{


	if ($_SESSION["validarIngreso"] != "ok") {
		# code...

		echo '<script>window.location="index.php?pagina=ingreso"</script>';
		return;
	}

	
}

$usuarios= ControladorFormularios::ctrSeleccionarRegistros(null, null);

?>
<h1>Inicio</h1>

<table class="table table-dark table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>E-mail</th>
			<th>fecha</th>
			<th>acciones</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($usuarios as $key => $value):
			# code...
		?>
		<tr>
			<td><?php echo ($key+1); ?></td>
			<td><?php echo $value["nombre"]; ?></td>
			<td><?php echo $value["email"]; ?></td>
			<td><?php echo $value["fecha"]?></td>
			
			<td>
				<div class="btn-group">

					<div >
					

					<a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn btn-outline-warning">
						<i class="fas fa-pencil-alt"></i>
					</a>

					</div>

					
					<form method="post">
						
						<input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
						<button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>

						<?php 	

						$eliminar= new ControladorFormularios();
						$eliminar->ctrEliminarRegistro();

						 ?>
					</form>

					
					
				</div>
			</td>
		</tr>

	<?php endforeach ?>
			
		
	</tbody>
</table>