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
 <<section class="service_section layout_padding-bottom">
  <div class="container">
    <div class="custom_heading-container">
        <h3 class= " ">
          Proveedores 
        </h3>           
     </div> 
   </div>    
 </section>
         <div class="container mt-10">
                    <div class="row"> 
                        
                        <div class="align-self-start">
                            <h3>Ingrese datos</h3>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="codigo" placeholder="Codigo">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="Email" placeholder="Email">
                                    
                                    <input type="submit" class="btn btn-danger">
                                </form>
                        </div>
            
                        
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
            echo "<td>".$res["ProEditar"]. "</td>";
            


            echo "</tr>";
          }   
          ?>
           <?php
          ?>
           
        <tr> 
           <th><a href="actualizar.php?id=<?php echo $row['Pro_Codigo'] ?>" class="btn btn-info">Editar</a></th>
           <th><a href="delete.php?id=<?php echo $row['Pro_Codigo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
        </tr>
        <?php
        ?>
         
        </tbody>
      </table>    
    </div>    
  </div>
</section>
<!-- end service section -->


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