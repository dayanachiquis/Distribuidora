<?php
$usuario = "root";
$nombre_base_de_datos = "distribuidora";

try{
    $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario);
}catch(Exception $e){
    echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}

$sentencia = $base_de_datos->prepare("UPDATE ventas SET EstadoFactura = 'Cerrado'");
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


?>