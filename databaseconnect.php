<?php
$usuario = "root";
$nombre_base_de_datos = "factura";
$inNombre = $_POST['inNombre'];
$inEmail = $_POST['inEmail'];
$inContacto = $_POST['inContacto'];
$inMensaje = $_POST['inMensaje'];
$slSolicitud = $_REQUEST['slSolicitud'];

if(isset( $_POST['inNombre']) && !empty( $_POST['inNombre']) &&
    isset( $_POST['inEmail']) && !empty( $_POST['inEmail']) &&
    isset( $_POST['inContacto']) && !empty( $_POST['inContacto']) &&
    isset( $_POST['inMensaje']) && !empty( $_POST['inMensaje']))
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
        $sentencia = $base_de_datos->prepare("INSERT INTO cliente(inNombre, inEmail, inContacto, inMensaje, slSolicitud) VALUES (?,?,?,?,?);");
        $resultado = $sentencia->execute([$inNombre, $inEmail, $inContacto, $inMensaje, $slSolicitud]); # Pasar en el mismo orden de los ?
        #execute regresa un booleano. (1)True en caso de que todo vaya bien, (0)falso en caso contrario.
        #Con eso podemos evaluar

        if($resultado === TRUE)
        {
            echo "Su informacion fue enviada correctamente! Gracias por visitarnos..";
            header("Location: index.html");            
        }
        else{
            echo "Algo salió mal. Por favor verifica que la tabla exista";
        }
    }
?>