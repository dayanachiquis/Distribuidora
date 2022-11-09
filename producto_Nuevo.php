<?php
$usuario = "root";
$nombre_base_de_datos = "distribuidora";

$ProCodigo = $_POST['ProCodigo'];
$inDescripcion = $_POST['inDescripcion'];
$inProveedor = $_POST['inProveedor'];
$inPrecio = $_POST['inPrecio'];
$inVenta = $_POST['inVenta'];
$inExistencia = $_POST['inExistencia'];

if(isset( $_POST['ProCodigo']) && !empty( $_POST['ProCodigo']) &&
    isset( $_POST['inDescripcion']) && !empty( $_POST['inDescripcion']) &&
    isset( $_POST['inProveedor']) && !empty( $_POST['inProveedor']) &&
    isset( $_POST['inPrecio']) && !empty( $_POST['inPrecio']) &&
    isset( $_POST['inVenta']) && !empty( $_POST['inVenta']) &&
    isset( $_POST['inExistencia']) && !empty( $_POST['inExistencia']))
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
        $sentencia = $base_de_datos->prepare("INSERT INTO producto(ProCodigo, ProDescripcion, ProProveedor, ProPrecio, ProVenta, ProExistencia) VALUES (?,?,?,?,?,?);");
        $resultado = $sentencia->execute([$ProCodigo, $inDescripcion, $inProveedor, $inPrecio,$inVenta, $inExistencia]); # Pasar en el mismo orden de los ?
        #execute regresa un booleano. (1)True en caso de que todo vaya bien, (0)falso en caso contrario.
        #Con eso podemos evaluar

        if($resultado === TRUE)
        {
            echo "Su informacion fue enviada correctamente! Gracias por visitarnos..";
            header("Location: producto.php");            
        }
        else{
            echo "Algo salió mal. Por favor verifica que la tabla exista";
        }
    }
?>