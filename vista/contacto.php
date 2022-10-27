<!-- Header -->
<?php

use App\Http\Controllers\ContactoController;

include("header.php") ?>
<!-- Fin header -->
<?php 
require_once "../controlador/contactoControlador.php";
?>

<section>
  
<div class=" titulo_crear" style="width:600px;">
    <p>
    Deja tu opión sobre las recetas de comida  para que otros usuarios sepan lo que opinas en relación con esta temática y puedan tener más información sobre este tema a partir de tu valoración.
    </p>
    
</div>


    <?php
       if(isset($_GET['e'])){

        include('enviado.php');

        }else{ ?>

            <form action="" method="POST" class="contenedor-form col-11 col-sm-8 col-md-7  col-lg-5 mx-auto" style="background: antiquewhite;">

            <div class="form-floating mb-3">
                <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="Nombre">
                <label for="floatingInput">Nombre</label>
            </div>
        
            <div class="form-floating mb-3">
                <input type="text" name="apellido" class="form-control" id="floatingInput" placeholder="Apellido">
                <label for="floatingInput">Apellido</label>
            </div>
        
            <div class="form-floating mb-3">
                <input type="email"name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
        
            <div class="form-floating">
                <textarea class="form-control" name="mensaje" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Escribe tu opinion...</label>
            </div>
        
            <div class="pt-3 text-center">
                <input type="submit" name="submit" value="submit" class="btn btn-enviar" style="background: #a18585;">
            </div>
            </form>

             <?php
             if(isset($_POST["submit"])){
                $contacto = new  ContactoControlador();
                $contacto-> crear();
             } 
        
        }  ?>
</section>


<!-- Header -->
<?php  include("footer.php")?>
<!-- Fin header -->
