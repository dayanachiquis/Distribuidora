<?php
$usuario = "root";
$nombre_base_de_datos = "distribuidora";

$ProCodigo = $_POST['ProCodigo'];
$inNombre = $_POST['inNombre'];
$inTelefono = $_POST['inTelefono'];
$inEmail = $_POST['inEmail'];

if(isset( $_POST['ProCodigo']) && !empty( $_POST['ProCodigo']) &&
    isset( $_POST['inNombre']) && !empty( $_POST['inNombre']) &&
    isset( $_POST['inTelefono']) && !empty( $_POST['inTelefono']) &&
    isset( $_POST['inEmail']) && !empty( $_POST['inEmail']))
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
        $sentencia = $base_de_datos->prepare("INSERT INTO proveedor(ProCodigo, ProNombre, ProTelefono, ProEmail) VALUES (?,?,?,?);");
        $resultado = $sentencia->execute([$ProCodigo, $inNombre, $inTelefono, $inEmail]); # Pasar en el mismo orden de los ?
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