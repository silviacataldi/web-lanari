<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" href="../config/estilos.css">
</head>
<body>
	<?php 
		include("../config/db.php");
		if (isset($_POST['enviar'])) {
			$usuario= $_POST['nombre'];
			$password= $_POST['pass'];
			$sql= "SELECT * FROM usuarios WHERE usuario='".$usuario."' and pass='".md5($password)."'";
			$resultado= $conn->query($sql);
			if ($fila= $resultado->fetch_assoc()) {
				echo "<script language='javascript'>
				location.assign('datos.php');
				</script>";				
			}else{
				echo "<script language='javascript'>
				alert('Usuario o Contraseña Incorrectos');
				location.assign('index.php');
				</script>";
			}
		}else{

	 ?>
	<div class="container">
		<br><br>
		<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			
			<div class="card text-white bg-dark">
				<div class="card-header">LOGIN</div>
				<div class="card-body">
					
					
					<form class="form-group" action="<?php $_SERVER['PHP_SELF'] ?>" method= 'POST'>
						
					<input type="text" name="nombre" class="form-control" placeholder="Usuario" required>
					<br>
					
					<input class="form-control" type="password" name="pass" placeholder="Contraseña" required>
					<br>
					<input type="submit" name="enviar" value="Ingresar" class="btn btn-primary btn-block">
					</form>
				</div>
			</div>			
		</div>
		
	</div>
</div>
<?php 
	}
 ?>
</body>
</html>