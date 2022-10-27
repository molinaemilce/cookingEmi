<?php

class RecetaControlador
{


    public function crear()
    {

        //Info que viene de un formulario
        $titulo_form = $_POST["titulo"];
        $duracion_form = $_POST["duracion"];
        $ingredientes_form = $_POST["ingredientes"];
        $descripcion_form = $_POST["descripcion"];


        //onexion a base de datos     1)localhost2)usuario 3)contraseña 4)nombre db
        // $conexion = mysqli_connect("localhost","id19701902_naranja","9Mm??oNXfw&{(Hey","id19701902_contacto") or exit ("No se pudo conectar la base de datos");
        $conexion = mysqli_connect("localhost", "root", "", "tabla1") or exit("No se pudo conectar a base de datos");

        mysqli_query($conexion, "INSERT INTO recetas VALUES (DEFAULT,'$titulo_form','$duracion_form','$ingredientes_form','$descripcion_form')");


        mysqli_close($conexion);

        //Contraseña webhost:base de datos : aLI<b?8HPYT?VWw!
        //Despues de  apretar el submit
        header("Location: ../vista/crearReceta.php?o=ok");  //a donde va a ir el correo
    }
}
