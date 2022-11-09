<?php
$usuario = "root";
$nombre_base_de_datos = "distribuidora";

$ProCodigo = $_POST['ProCodigo'];

if(isset($_POST['ProCodigo'] ))
 include 'Proveedores.php';
    $Procodigo = $_POST['Procodigo'];
    $ProNombre = $_POST['ProNombre'];
    $ProTelefono = $_POST['ProTelefono'];
    $ProEmail = $_POST['ProEmail'];
    {
        try{
            $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario);
        }catch(Exception $e){
            echo "Ocurrió algo con la base de datos: " . $e->getMessage();
        }

       
            $sentencia = $base_de_datos->prepare("UPDATE persona WHERE ProNombre = ?, ProTelefono = ?, ProEmail =? WHERE  Procodigo=?; ")
            $resultado = $sentencia->execute([$ProNombre, $ProTelefono, $ProEmail, $ProCodigo]);
           }        
        
        #execute regresa un booleano. (1)True en caso de que todo vaya bien, (0)falso en caso contrario.
        #Con eso podemos evaluar

        if($resultado === TRUE)
        {
            echo "Su informacion fue enviada correctamente! Gracias por visitarnos..";
            header("Location: proveedores.php");            
        }
        else{
            echo "Algo salió mal. Por favor verifica que la tabla exista";
            exit ()
        }

    
?>