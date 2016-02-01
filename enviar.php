<?php

        $Nombre = $_POST['Nombre'];
        $Email = $_POST['Email'];
        $Mensaje = $_POST['Mensaje'];
        $archivo = $_FILES['adjunto'];
        /*
        $nombre_archivo = $_FILES['adjunto']['name'];
        $tipo_archivo = $_FILES['adjunto']['type'];
        $tamano_archivo = $_FILES['adjunto']['size'];
        $temp_archivo = $_FILES['adjunto']['tmp_name'];
        */
        /*if (($Nombre=='' || $Email=='' || $Mensaje=='') && (strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "ai") || strpos($tipo_archivo, "cdr") || strpos($tipo_archivo, "psd")) && ($tamano_archivo < 25600))*/

        if ($Nombre=='' || $Email=='' || $Mensaje==''){

        echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

        }
        else{


            require("archivosformulario/class.phpmailer.php");
            $mail = new PHPMailer();

            $mail->From     = $Email;
            $mail->FromName = $Nombre;
            $mail->AddAddress("ventas@youcardonline.com"); // Dirección a la que llegaran los mensajes.
            $mail-> // aqui falta un parametro para que se pueda enviar el archivo adjunto
        // Aquí van los datos que apareceran en el correo que reciba
            //adjuntamos un archivo
                //adjuntamos un archivo

            $mail->WordWrap = 50;
            $mail->IsHTML(true);
            $mail->Subject  =  "Contacto";
            $mail->Body     =  "Nombre: $Nombre \n<br />".
            "Email: $Email \n<br />".
            "Mensaje: $Mensaje \n<br />";
            $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);

            /*
            https://www.youtube.com/watch?v=UJo6HeAy-LQ
            https://www.youtube.com/watch?v=jwDui54M3rg
            */

        // Datos del servidor SMTP

            $mail->IsSMTP();
            $mail->Host = "ssl://smtp.mail.youcardonline.com";  // Servidor de Salida.
            $mail->SMTPAuth = true;
            $mail->Username = "ventas@youcardonline.com";  // Correo Electrónico
            $mail->Password = "suizo1999"; // Contraseña

            if ($mail->Send())
            echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='javascript:history.back()';</script>";
            else
            echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

        }

?>
