<?php
$usuario = "root";
$nombre_base_de_datos = "distribuidora";


$ProCodigo = $_POST['ProCodigo'];

if(isset($_POST['ProCodigo'] ))

    {
        try{
            $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario);
        }catch(Exception $e){
            echo "Ocurrió algo con la base de datos: " . $e->getMessage();
        }

        if(isset($_POST['ProCodigo'])){

            $sentencia = $base_de_datos->prepare("UPDATE proveedor SET ProNombre = ?, ProTelefono = ?, ProEmail =? WHERE  ProCodigo=?;");
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
        }
    }
?>