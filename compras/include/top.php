<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Instituto Lanari | <?php echo $titulo; ?></title>
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.1/dist/cerulean/bootstrap.min.css">
	
	<link rel="stylesheet" href="../img/icono.png">
	</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">Instituto Lanari</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarColor01">
		      <ul class="navbar-nav me-auto">
		        <li class="nav-item">
		          <a class="nav-link active" href="..\">Volver
		            <span class="visually-hidden">(previo)</span>
		          </a>
		        </li>
		      </ul>
	<?php  if ($titulo <> "proveedores") { ?>
		
		      <form class="d-flex ">
		       	
		       		<a href="logout.php"> <button type="button" class="btn btn-primary">Cerrar Sesión</button></a>
		      
		      </form>
	<?php } ?>
			    </div>
		  </div>
		</nav>
