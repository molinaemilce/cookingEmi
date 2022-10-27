<?php

class ContactoControlador
{


    public function crear()
    {
        $nombre_form = $_POST["nombre"];
        $apellido_form = $_POST["apellido"];
        $email_form = $_POST["email"];
        $mensaje_form = $_POST["mensaje"];


        $cuerpo_mail = "Nombre: " . $nombre_form . "\r\n" . "Apellido: " . $apellido_form . "\r\n" . "Correo electrónico: " . $email_form . "\r\n" . "Mensaje: " . $mensaje_form;
        // $header = "From:noreply@example.com"."\r\n";
        // $header = "Reply-To: noreply@example.com"."\r\n";
        // $header = "X-Mailer: PHP/".phpversion();

        //Funcion mail 1)Destino a donde se envian los mails,2)Asunto,3)cuerpo de mail
        @mail("emilcedaiana117@gmail.com", "Mensajo enviado de misitio", $cuerpo_mail);


        //Conexion a base de datos al 000webhost

        //1)localhost2)usuario 3)contraseña 4)nombre db
        // $conexion = mysqli_connect("localhost","id19701902_naranja","9Mm??oNXfw&{(Hey","id19701902_contacto") or exit ("No se pudo conectar la base de datos");
        //Conexion al mysqlphpmyadmin
        $conexion = mysqli_connect("localhost", "root", "", "tabla1") or exit("No se pudo conectar a base de datos");

        mysqli_query($conexion, "INSERT INTO contacto VALUES (DEFAULT,'$nombre_form','$apellido_form','$email_form','$mensaje_form')");


        mysqli_close($conexion);

        //Contraseña webhost:base de datos : aLI<b?8HPYT?VWw!
        //Despues de  apretar el submit
        header("Location: ../vista/contacto.php?e=ok");  //a donde va a ir el correo
    }
}
