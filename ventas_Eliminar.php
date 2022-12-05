<?php
$usuario = "root";
$nombre_base_de_datos = "distribuidora";

$VenCodigo = $_GET['VenCodigo'];
$VenIdFactura = $_GET['VenIdFactura'];

if(isset($_GET['VenCodigo']) && isset($_GET['VenIdFactura']))
    {
        try{
            $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario);
        }catch(Exception $e){
            echo "Ocurrió algo con la base de datos: " . $e->getMessage();
        }

        $VenCodigo = $_GET['VenCodigo'];
        $VenIdFactura = $_GET['VenIdFactura'];

        $sentencia = $base_de_datos->prepare("DELETE FROM ventas WHERE VenCodigo = :VenCodigo AND VenIdFactura = :VenIdFactura");
        $sentencia->bindParam(':VenCodigo', $VenCodigo);
        $sentencia->bindParam(':VenIdFactura', $VenIdFactura);
        $resultado = $sentencia->execute();
        
        #execute regresa un booleano. (1)True en caso de que todo vaya bien, (0)falso en caso contrario.
        #Con eso podemos evaluar

        if($resultado === TRUE)
        {
            echo "Su informacion fue enviada correctamente! Gracias por visitarnos..";
            header("Location: ventas.php");            
        }
        else{
            echo "Algo salió mal. Por favor verifica que la tabla exista";
        }
    }
?>