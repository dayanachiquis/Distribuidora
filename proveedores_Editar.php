
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
    <!-- end header section -->

    <?php
    if(isset ($_GET ['ProCodigo'])){
        header('Location:Proveedores.php?mensaje=error');
        exit();
    }
    include_once 'model/Proveedores_Nuevo.php';
    $Procodigo = $_GET['Procodigo'];

    $sentencia = $base_de_datos->prepare("SELECT * FROM persona WHERE ProCodigo = :ProCodigo");
    $sentencia->bindParam(':ProCodigo', $ProCodigo);
    $resultado = $sentencia->execute();
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    ?>
    

  <div class="container">
    <div class="custom_heading-container">
        <h3 class= " ">
          Editar Datos
        </h3>           
     </div> 
   </div>    
     <div class="custom_heading-container">
       <h3 class=" ">
          Ingresar  Datos
         </h3>
</div>
<div class="custom_heading-container">
  <h6 class=" ">
    
  </h6>
</div>
<div class="container layout_padding2-top">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <form action="Proveedor_editarProceso.php" method="post" name="formulario">
        <div>
          <input type="text" placeholder="Codigo" id="ProCodigo" name="ProCodigo">
          
        </div>
        <div>
          <input type="text" placeholder="Nombre" id="inNombre" name="inNombre"
          value="<?php echo $persona- Nombre; ?> ">
        </div>
        <div>
          <input type="text" placeholder="Telefono" id="inTelefono" name="inTelefono"
          value="<?php echo $persona- Telefono; ?> ">
        </div>
        <div>
          <input type="email" placeholder="Email" id="inEmail" name="inEmail" 
          value="<?php echo $persona- Email; ?> ">
        </div>
        <div class="d-flex justify-content-center ">
                <input type="hidden" name="Procodigo" value="<?php echo $persona->Procodigo; ?>">
                <input type="submit" class="btn btn-primary" value="Editar">
         
        </div>
      </form>
    </div>
  </div>
</div>



      
            
      
