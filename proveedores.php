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
              Proveedores
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
                 <a class="nav-link" href="index.html">LogOut</a>
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
          Proveedores 
        </h3>           
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
          $busqueda=$conexion->prepare("SELECT * FROM proveedor");
          $busqueda->execute();
          $resultado = $busqueda->fetchAll();
      ?>
      
      <table class="table">
        <caption>
        
        </caption>
        <thead class="table-dark">
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
           
            
          </tr>
        </thead>
        <tbody>
          <?php
          foreach($resultado as $res)
          {
            echo "<tr>";
              echo "<td>".$res["ProCodigo"]."</td>";
              echo "<td>".$res["ProNombre"]."</td>";
              echo "<td>".$res["ProTelefono"]."</td>";
              echo "<td>".$res["ProEmail"]."</td>"; 
              echo "<td><a href='' class='fa-solid fa-pen'></a></td>";
              echo "<td><a href='' class='fa-solid fa-trash-can'></a></td>";
            echo "</tr>";
          }   
          ?>
           <?php
          ?>
          
          <!-- echo "<td><a href='delete.php?id=".$row["0"]."'><img id='img_tab_edit' src='../Imagenes/borrar.png'/></a></td>"; -->
        <?php
        ?>
        </tbody>
      </table>    
    </div>    
  </div>
</section>
<!-- end service section -->


 <!-- contact section -->

 <section class="contact_section layout_padding">
    <div class="custom_heading-container">
      <h3 class=" ">
        Formulario de Nuevo Porveedor
      </h3>
    </div>
    <div class="custom_heading-container">
      <h6 class=" ">
        Ingresa los datos del nuevo proveedor
      </h6>
    </div>
    <div class="container layout_padding2-top">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="pendiente" method="post" name="formulario">
            <div>
              <input type="text" placeholder="Nombre" id="inNombre" name="inNombre">
            </div>
            <div>
              <input type="email" placeholder="Correo Electronico" id="inEmail" name="inEmail">
            </div>
            <div>
              <input type="text" placeholder="Telefono" id="inContacto" name="inContacto">
            </div>
            <div>
              <select name="slSolicitud" id="slSolicitud">
                <option value="" disabled selected>Tipo de Solicitud</option>
                <option value="Factura">Factura</option>
                <option value="Pedido">Pedido</option>
                <option value="Precios">Precios</option>
              </select>
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Dejanos aqui tu mensaje" id="inMensaje"
                name="inMensaje">
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



<!-- end service section -->

    <!-- info section -->
    <!-- info section -->
    <section class="info_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info-logo">
              <li>   
               <a href="service.html">
                    Servicios
                  </a>
              </li>
 
                <li>
                  <a href="contact.html">
                    Contactenos
                  </a>
                </li>
            </div>
          </div>
        </div>
      </div>          
    </section>
    <!-- end info_section -->
    <!-- end info_section -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>