<?php
$usuario = "root";
$nombre_base_de_datos = "distribuidora";

$ProCodigo = $_GET['ProCodigo'];

if(isset($_GET['ProCodigo'] ))
    {
        try{
            $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario);
        }catch(Exception $e){
            echo "Ocurrió algo con la base de datos: " . $e->getMessage();
        }

        if(isset($_GET['ProCodigo'])){
            $ProCodigo = $_GET['ProCodigo'];
            $sentencia = $base_de_datos->prepare("DELETE FROM proveedor WHERE ProCodigo = :ProCodigo");
            $sentencia->bindParam(':ProCodigo', $ProCodigo);
            $resultado = $sentencia->execute();
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
        }
    }
?>