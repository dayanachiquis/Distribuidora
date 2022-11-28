<?php
$usuario = "root";
$nombre_base_de_datos = "distribuidora";

$inCodigo = $_POST['inCodigo'];
$inProducto = $_POST['inProducto'];
$inCantidad = $_POST['inCantidad'];
$inFecha = $_POST['inFecha'];
$inPrecio = $_POST['inPrecio'];

if(isset( $_POST['inCodigo']) && !empty( $_POST['inCodigo']) &&
    isset( $_POST['inProducto']) && !empty( $_POST['inProducto']) &&
    isset( $_POST['inCantidad']) && !empty( $_POST['inCantidad']) &&
    isset( $_POST['inFecha']) && !empty( $_POST['inFecha']) &&
    isset( $_POST['inPrecio']) && !empty( $_POST['inPrecio']))
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
        $sentencia = $base_de_datos->prepare("INSERT INTO venta( ProCodigo, ProProducto, ProCantidad, ProFecha, ProPrecio) VALUES (?,?,?,?,?);");
        $resultado = $sentencia->execute([$inCodigo, $inProducto, $inCantidad, $inFecha, $inPrecio ]); # Pasar en el mismo orden de los ?
        #execute regresa un booleano. (1)True en caso de que todo vaya bien, (0)falso en caso contrario.
        #Con eso podemos evaluar

        if($resultado === TRUE)
        {
            echo "Su informacion fue enviada correctamente! Gracias por visitarnos..";
            header("Location: venta.php");            
        }
        else{
            echo "Algo salió mal. Por favor verifica que la tabla exista";
        }
    }
?>