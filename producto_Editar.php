<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Distribuidora</title>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <script src="https://kit.fontawesome.com/21c28403f9.js" crossorigin="anonymous"></script>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Editar Datos
            </span>
          </a>

          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            </div>
          </div>
            <form class="nav justify-content-end">
              <button class=nav-link href="index.html">
               <li class="fa-solid fa-arrow-right-from-bracket">
                   <a  href="index.html">Logout</a>
                </li>
              </button>
            </form>            
        </nav>
     </div>
    </header>
  </div>

    <!-- end service section -->


      <?php
      if(!isset ($_GET ['ProCodigo'])){
          header('Location:producto.php?mensaje=error');
          exit();
      }

      $usuario = "root";
      $nombre_base_de_datos = "distribuidora";
      $ProCodigo = $_GET['ProCodigo'];

      try{
        $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario);
      }catch(Exception $e){
          echo "Ocurrió algo con la base de datos: " . $e->getMessage();
      }
   

      $sentencia = $base_de_datos->prepare("SELECT * FROM producto WHERE ProCodigo = ?;");
      $sentencia->execute([$ProCodigo]);
      $producto = $sentencia->fetch(PDO::FETCH_OBJ);


      ?>      
    <section class="contact_section layout_padding">
    <div class="custom_heading-container">
      <h3 class=" ">
        Ingresar  Datos
      </h3>
    </div>
    <div class="custom_heading-container">
      <h6 class=" ">
        
      </h6>
    </div>

        <div class="container mt-10">
            <div class="row ">
               <div class="col-md-10 mx auto">
                
             
                     <form action="producto_editarProceso.php" method="POST" name="formulario">
                       <div>
                         <input type="text" placeholder="Precio" id="ProPrecio" name="ProPrecio"
                         value="<?php echo $producto->ProPrecio; ?>">
                       </div>
                        <div>
                         <input type="text" placeholder="Venta" id="Proventa" name="ProVenta"
                          value="<?php echo $producto->ProVenta; ?>">
                        </div>
                         <div>
                            <input type="text" placeholder="Existencia" id="ProExistencia" name="ProExistencia" 
                             value="<?php echo $producto->ProExistencia; ?>">
                          </div>
                        <div class="d-flex justify-content-center ">
                           <input type="hidden" name="ProCodigo"  value="<?php echo $producto->ProCodigo; ?>">
                           <input type="submit" class="btn btn-primary" value="Editar">                
                         </div>
                      </form>
                  </div>
                </div>
             </div>
         </div>           
   </section>
   

    <!-- info section -->
    <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info-logo">
            <h4>
              Distribuidora de Licores L&D
            </h4>
            <p>
              Somos una empresa dedicada a la comercialización y distribución de licores con presencia en el Municipio
              de Melgar - Tolima.
              Nuestra experiencia y calidad en nuestros productos y servicios nos hacen únicos.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-nav">
            <h4>
              Menu
            </h4>
            <ul>
              <li>
                <a href="Service.html">
                  servicios
                </a>
              </li>
              <li>
                <a href="inventarios.php">
                 Inventarios
                </a>
              </li>
              
              <li>
                <a href="producto.php">
                  Productos
                </a>
              </li>
              <li>
                <a href="ventas.php">
                 ventas
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-contact">
            <h4>
              Informacion de Contacto
            </h4>
            <div class="location">
              <h6>
                Direccion de la Compañia
              </h6>
              <a href="https://www.google.com/search?rlz=1C1GCEA_esCO1015CO1015&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=ALiCzsa--PN_N25k9HzD6KMS24BdiQ896g:1663643717880&q=sicomoro+melgar&rflfq=1&num=10&rldimm=11821027064523561856#rlfi=hd:;si:11821027064523561856;mv:[[4.206029099999999,-74.6415378],[4.1964995,-74.65293030000001]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2">
                <img src="images/location.png" alt="">
                <span>
                  Direccion - Melgar Tolima
                </span>
              </a>
            </div>
            <div class="call">
              <h6>
                Telefono de Servicio:
              </h6>
              <a href="">
                <img src="images/telephone.png" alt="">
                <span>
                  ( 304 33332227 )
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="discover">
            <h4>
              Nuestras Redes Sociales
            </h4>
            <div class="social-box">
              <a href="https://www.facebook.com/">
                <img src="images/facebook.png" alt="">
              </a>
              <a href="https://twitter.com/">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="http://localhost/DistribuidoraLyD/about.html">
                <img src="images/google-plus.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
<!-- end service section -->


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>



      
            
      
