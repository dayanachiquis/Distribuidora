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
              Producto
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
                <li class="nav-item">
                 <a  href="index.html">LogOut</a>
                </li>
            </button>
          </form>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

 <!-- service section -->
 <section class="service_section layout_padding-bottom">
  <div class="container">
    <div class="custom_heading-container">
      <h3 class= " ">
          Producto       
    </div>    
  </div>
</section>
<!-- end service section -->

 <!-- service section -->
 <section class="service_section layout_padding-bottom">
  <div class="container">
    <div class="custom_heading-container">
    <?php
      $conexion=new PDO("mysql:host=localhost;dbname=distribuidora;","root");
          $busqueda=$conexion->prepare("SELECT * FROM producto");
          $busqueda->execute();
          $resultado = $busqueda->fetchAll();
      ?>
      <table class="table">
        <caption>
          
        </caption>
        <thead class="table-dark">
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th> 
            <th scope="col">Proveedor</th>
            <th scope="col">Precio</th>
            <th scope="col">Venta</th>
            <th scope="col">Existencia</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Editar</th>

          
            
          </tr>
        </thead>
        <tbody>
          <?php
          foreach($resultado as $res)
          {
            echo "<tr>";
              echo "<td>".$res["ProCodigo"]."</td>";
              echo "<td>".$res["ProDescripcion"]."</td>";
              echo "<td>".$res["ProProveedor"]."</td>";
              echo "<td>".$res["ProPrecio"]."</td>"; 
              echo "<td>".$res["ProVenta"]."</td>"; 
              echo "<td>".$res["ProExistencia"]."</td>"; 
              echo "<td><a href='' class='fa-solid fa-pen'></a></td>";
              echo "<td><a href='proveedores_Eliminar.php?ProCodigo=".$res['ProCodigo']."' class='fa-solid fa-trash-can'></a></td>";
            echo "</tr>";
          }    
          ?>
           <?php
          ?>
          
          <!-- echo "<td><a href='delete.php?id=".$row["0"]."'><img id='img_tab_edit' src='../Imagenes/borrar.png'/></a></td>"; -->
         
          </tbody>
      </table>    
    </div>    
  </div>
</section>
<!-- end service section -->


<section class="contact_section layout_padding">
    <div class="custom_heading-container">
      <h3 class=" ">
        Ingresar de Datos
      </h3>
    </div>
    <div class="custom_heading-container">
      <h6 class=" ">
        
      </h6>
    </div>
    <div class="container layout_padding2-top">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="producto_Nuevo.php" method="post" name="formulario">
            <div>
              <input type="text" placeholder="Codigo" id="ProCodigo" name="ProCodigo">
            </div>
             <div>
              <input type="text" placeholder="Descripcion" id="inDescripcion" name="inDescripcion">
            </div>
            <div>
              <input type="text" placeholder="Proveedor" id="ProProveedor" name="ProProveedor">
            </div>
            <div>
              <input type="text" placeholder="Precio" id="inprecio" name="inprecio">
            </div>
            <div>
              <input type="text" placeholder="Venta" id="inVenta" name="inVenta">
            </div>
            <div>
              <input type="text" placeholder="Existencia" id="inExistencia" name="inExistencia">
            </div>
            <div class="d-flex justify-content-center ">
              <button>
                Enviar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

    
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
                <a href="proveedores.php">
                  Proveedores
                </a>
              </li>
              <li>
                <a href="venta.php">
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
  <!-- end info_section -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>