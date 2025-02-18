<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- <title>Instituto Lanari</title> -->
        <title><?php echo "Instituto Lanari | ". $title; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/include/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
        <script src="js/scripts.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="/css/styles.css" rel="stylesheet" />
        <link href="/css/footer.css" rel="stylesheet" />
        
    </head>
    <body>
        <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
        <a href="/"><img  src="/img/n-logo.jpg" style="padding-right: 40px;"></a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <!-- Menú Institucional-->
                <li class="nav-item"> <a class="nav-link" href="/">Inicio</a> </li>
                <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Institucional  </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/contenido/institucional/autoridades.php"> Autoridades</a></li>
                    <li><a class="dropdown-item" href="/contenido/institucional/historia.php"> Historia</a></li>
                    <li><a class="dropdown-item" href="/contenido/institucional/lanari.php"> Dr. Alfredo Lanari</a></li>
                    <li><a class="dropdown-item" href="/contenido/institucional/docencia.php"> Docencia e Investigación</a></li>     
                    <li><a class="dropdown-item" href="/contenido/institucional/jornadas.php"> Jornadas Científicas</a></li>
                    <li><a class="dropdown-item" href="/contenido/institucional/etica.php"> Comité de Ética</a></li>   
                    </ul>
                </li>
                <!-- Menú áreas-->
                <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Áreas  </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/contenido/areas/clinica/clinica.php"> Clínica Médica</a></li>         
                        <li><a class="dropdown-item" href="/contenido/areas/bioquimica/bioquimica.php"> Diagnóstico Bioquímico</a></li>
                        <li><a class="dropdown-item" href="/contenido/areas/cirugia.php"> Cirugía </a></li>
                        <li><a class="dropdown-item" href="/contenido/areas/imagenes.php"> Diagnóstico por Imágenes</a></li>
                        <li><a class="dropdown-item" href="/contenido/areas/consultorios.php"> Consultorios Externos</a></li>
                        <li><a class="dropdown-item" href="/contenido/areas/enfermeria.php"> Enfermería</a></li>
                    </ul>
                </li>
                <!-- Menú educación-->
                <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Educación  </a>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="dropdown-menu" style="columns:2;">
                                    <li><strong> General</strong></li>
                                    <li><a class="dropdown-item" href="/contenido/educacion/ateneos.php"> Ateneos</a></li>
                                    <li><a class="dropdown-item" href="/contenido/educacion/catedra.php"> Cátedra/UDH </a></li>
                                    <li><a class="dropdown-item" href="/contenido/educacion/asesoria.php"> Asesoría Metodológica y Estadística </a></li> 
                                    <li><a class="dropdown-item" href="/contenido/educacion/especializacion.php"> Especialización </a></li>
                                    <li><a class="dropdown-item" href="/contenido/educacion/rotantes.php"> Rotantes </a></li>
                                    <li><a class="dropdown-item" href="/contenido/educacion/licencias.php"> Solicitud de Licencia </a></li>
                                    <li><strong>Residencia</strong></li>
                                    <li><a class="dropdown-item" href="/contenido/educacion/clinica.php"> Clínica Médica</a></li>
                                    <li><a class="dropdown-item" href="/contenido/educacion/cirugia.php"> Cirugía </a></li>
                                    <li><a class="dropdown-item" href="/contenido/educacion/bioquimica.php"> Bioquímica </a></li> 
                                    <li><a class="dropdown-item" href="/contenido/educacion/nefrologia.php"> Nefrología</a></li>
                                    <li><a class="dropdown-item" href="/contenido/educacion/investigacion.php"> Investigación Clínica </a></li>
                                    <li><a class="dropdown-item" href="/contenido/educacion/imagenes.php"> Diagnóstico por Imágenes </a></li>         
                                </ul>
                            </div>
                        </div>
                </li>
                <!-- Menú investigación -->
                <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Investigación  </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/contenido/investigacion/endocrinologia.php"> Endocrinología Experimental</a></li>
                    <li><a class="dropdown-item" href="/contenido/investigacion/hematologia.php"> Hematología Investigación </a></li>
                    <li><a class="dropdown-item" href="/contenido/investigacion/nefrologia.php"> Nefrología Experimental </a></li>
                    <li><a class="dropdown-item" href="https://idim.org.ar" target="_blank"> IDIM (UBA / CONICET) </a></li>             
                    </ul>
                </li>
                <li class="nav-item"> <a class="nav-link" href="/compras/proveedores.php">Proveedores</a> </li>
            </ul>
        </div> <!-- navbar-collapse.// -->
    </div> <!-- container-fluid.// -->
</nav>
