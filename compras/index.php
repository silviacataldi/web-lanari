<?php session_start();?>
<?php
	$titulo="Login";
  $mensaje= "Si no recuerda la contraseña contacte al servicio de Informática del Instituto.";
  $clase= "alert alert-dismissible alert-primary";
  $BTclase= "hidden";
  require("include/db.php");
  //Verifica inicio de sesión
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $_SESSION['usuario'];

        
        // Consulta la tabla de usuarios para verificar las credenciales
        $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '".md5($contrasena)."'";
        $result = $conn->query($query);

        if ($result!== false && $result->num_rows > 0) {
            // Las credenciales son válidas, el usuario ha iniciado sesión           
            
            $_SESSION['usuario']= $usuario;
            header("location:compras.php");
            exit;
        } else {
            // Las credenciales son incorrectas, muestra un mensaje de error

            $mensaje= "Usuario o contraseña Incorrecta. Si no la recuerda contacte al servicio de Informática del Instituto.";
            $clase= "alert alert-dismissible alert-danger";
        }

        // Cierra la conexión a la base de datos
        $conn->close();
    }
    require("include/top.php");
 ?>
<!-- Fin encabezado -->
<br>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/login.PNG"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
          
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" name="usuario" class="form-control form-control-lg" placeholder="Usuario" required>
            <label class="form-label" for="form3Example3"></label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="contrasena" class="form-control form-control-lg"
              placeholder="Contraseña" required>
            <label class="form-label" for="form3Example4"></label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" value="enviar" value="Entrar" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">
           
          </div>

        </form>
        <br>
        <div class="<?php echo $clase; ?>">
          <?php echo $mensaje ?>
        </div>
      </div>
    </div>
  </div>  
</section>
	
	<!-- Pié de página -->
<?php 
	require("include/footer.php");
 ?>
	<!-- Fin pie -->