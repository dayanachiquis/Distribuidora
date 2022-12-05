<?php
$usuario = "root";
$nombre_base_de_datos = "distribuidora";

$inIdFactura = $_POST['inIdFactura'];
$inCodigo = $_POST['inCodigo'];
$inProducto = $_POST['inProducto'];
$inCantidad = $_POST['inCantidad'];

if( isset( $_POST['inIdFactura']) && !empty( $_POST['inIdFactura']) &&
    isset( $_POST['inCodigo']) && !empty( $_POST['inCodigo']) &&
    isset( $_POST['inProducto']) && !empty( $_POST['inProducto']) &&
    isset( $_POST['inCantidad']) && !empty( $_POST['inCantidad']) )
    {
        try{
            $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario);
        }catch(Exception $e){
            echo "Ocurrió algo con la base de datos: " . $e->getMessage();
        }
        /*
            Al incluir el archivo "databaseconnect.php", todas sus variables están
            a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
            copiado y pegado el código
        */
        $sentencia = $base_de_datos->prepare("INSERT INTO ventas(VenIdFactura, VenCodigo, VenProducto, VenCantidad, VenFecha) VALUES (?,?,?,?, now());");
        $resultado = $sentencia->execute([$inIdFactura, $inCodigo, $inProducto, $inCantidad]); # Pasar en el mismo orden de los ?

        $sentencia = $base_de_datos->prepare("UPDATE producto SET ProExistencia = ProExistencia - ? WHERE ProCodigo = ?;");
        $resultado = $sentencia->execute([$inCantidad, $inCodigo]); # Pasar en el mismo orden de los ?

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