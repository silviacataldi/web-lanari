<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Turnos solicitados</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	
</head>
<body>
	<?php 
		include("../config/db.php");
	 ?>
	 <?php 
	 		$id= (isset($_POST['id']))?$_POST['id']:"";
	 		$estado= (isset($_POST['accion']))?$_POST['accion']:"";
		
			$sql= "UPDATE datos SET estado= '$estado' WHERE id= '$id'";
			if ($conn->query($sql) === TRUE) {
				
			}else{
				echo "Error". $conn->error;
			}	
	  ?>
  <p></p>
<div class="table-responsive">
<table class="table-bordered" id="datos">
	<thead class="thead-dark">
		<th>ID</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>DNI</th>
		<th>Especialidad</th>
		<th>Profesional</th>
		<th>Deriva</th>
		<th>OS</th>
		<th>Estado</th>
		<th>WSP</th>
		<th>Primera vez</th>
		<th>Fecha</th>
		<th>Hora</th>
		<th>Comentario</th>
		<th>Acciones</th>

	</tr>
	</thead>	
	<tbody>

	<?php foreach ($conn ->query("SELECT * FROM datos") as $row) { ?>

		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['nombre'] ?></td>
			<td><?php echo $row['apellido'] ?></td>
			<td><?php echo $row['dni'] ?></td>
			<td><?php echo $row['especialidad'] ?></td>
			<td><?php echo $row['profesional'] ?></td>
			<?php 
				if ($row['deriva']) {
					$derivar = "Si";
				} else {
					$derivar ="No";
				}
				
			 ?>
			<td><?php echo $derivar ?></td>
			<td><?php echo $row['os'] ?></td>
			<td><?php echo $row['estado'] ?></td>
			<td><?php echo "<a href= 'https://wa.me/+54911" . $row['wsp'] ."'>".$row['wsp']. " </a>" ?></td>
				<?php 
				if ($row['primera']) {
					$prim = "Si";
				} else {
					$prim ="No";
				}
				
			 ?>
			<td><?php echo $prim ?> </td>	
			<td><?php echo $row['fecha'] ?></td>
			<td><?php echo $row['hora'] ?></td>
			<td><?php echo $row['comentario'] ?></td>
			<td> 
				<form method="POST">
					<input type="hidden" name="id" value= <?php echo $row['id'] ?> >
					<input type="submit" name="accion" value="P" data-toggle="tooltip" data-placement="top" title="Pendiente">
					<input type="submit" name="accion" value="A" data-toggle="tooltip" data-placement="top" title="Asignado">
					<input type="submit" name="accion" value="R" data-toggle="tooltip" data-placement="top" title="Rechazado">
					<input type="submit" name="accion" value="N" data-toggle="tooltip" data-placement="top" title="No hay turnos">
				</form>

			</td>			
		</tr>
		</tbody>

	<?php } ?>
</table>
</div>
<!-- Fin tabla de datos -->


  
	
</body>
</html>