<?php
$usuario = "root";
$nombre_base_de_datos = "factura";
$inUsuario = $_POST['inUsuario'];
$inPassword = $_POST['inPassword'];

/*
isset  pregunta si la variable tiene un valor
!empty pregunta si la variable no esta vacia
si inUsuario esta con algun valor? Y la variable in insuario esta doferente de vacia? 
*/

if(isset( $_POST['inUsuario']) && !empty( $_POST['inUsuario']) &&
    isset( $_POST['inPassword']) && !empty( $_POST['inPassword']))
    {
        try{
            $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario);
        }catch(Exception $e){
            echo "Ocurrió algo con la base de datos: " . $e->getMessage();
        }

        $stmt = $base_de_datos->prepare("SELECT COUNT(*) FROM usuarios WHERE inUsuario = ? AND inPassword = ? AND inRol = 'Administrador'");
        $stmt->execute([$inUsuario, $inPassword]);
        $count = $stmt->fetchColumn();
        if($count > 0)
        {
            header("Location: Administracion.html");            
        }
        else{
            function_alert("We welcome the New World");
            echo '<script>alert("Usuario o clave invalido!!! intente Nuevamente")</script>';
            header("Location: login.html");            
        }
    }  

    function function_alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
?>