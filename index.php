<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="initial-scale=1">
<title>Formulario</title>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/bootstrap-4.css">
</head>
<body>
    
    <?php
        $error = '';
        $enviado = '';
        
        if(isset($_POST['send']))
        {
            $name = $_POST['nombre'];
            $mail = $_POST['correo'];
            $msg = $_POST['mensaje'];
            
            if(!empty($name))
            {
                $name = trim($name);
                $name = filter_var($name,FILTER_SANITIZE_STRING);
                
            }
            else
            {
                $error .= '*Por favor ingresa un <b>Nombre</b><br/>';
            }
            if(!empty($mail))
            {
                $mail = filter_var($mail,FILTER_SANITIZE_EMAIL);
                if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
                {
                    $error .= '*Por favor ingresa un <b>Correo Valido</b><br/>';
                }
            }
            else
            {
                $error .= '*Por favor ingresa un <b>Correo</b><br/>';
            }
            if(!empty($msg))
            {
                $msg = htmlspecialchars($msg);
                $msg = trim($msg);
                $msg = stripslashes($msg);
            }
            else
            {
                $error .= '*Por favor ingres un <b>Mensaje</b><br/>';
            }
            if(!$error)
            {
                $send_to = 'ppomarqc@gmail.com';
                $asunto = 'Practicas PHP';
                $msg_con = "De: $name \n";
                $msg_con .= "Correo: $mail \n";
                $msg_con .= "Mensaje: ".$msg;
                
                //mail($send_to,$asunto,$msg_con);
                $enviado = true;
            }
        }
    
        require("form.php");
    ?>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html> 