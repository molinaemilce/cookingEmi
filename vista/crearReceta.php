<!-- Header -->
<?php include("header.php") ?>
<!-- Fin header -->

<?php 
require_once "../controlador/recetaControlador.php";
?>

<section class="container contenedor_recetascrear pt-4">
<div class="titulo_crear">
    <p>
        En la cocina tienes que pasarlo bien. No es una obligación, sino una oportunidad de pasarlo bien y crecer como persona. Si disfrutas al hacerlos, tus platos te saldrán estupendamente.
    <br>
    Como ves, todo puede inspirarte una nueva, y exquisita, receta. ¿Cuándo te pones el delantal? Dale creá 😋👇
    </p>
</div>


    <?php
    if (isset($_GET['o'])) {
        include('enviado.php');
    } else { ?>

        <form action="" method="POST" class="contenedor-form col-11 col-sm-8 col-md-7  col-lg-5 mx-auto">

            <div class="form-floating mb-3">
                <input type="text" name="titulo" class="form-control" id="floatingInput" placeholder="Nombre">
                <label for="floatingInput">Titulo</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="duracion" class="form-control" id="floatingInput" placeholder="Nombre">
                <label for="floatingInput">Duración</label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" name="ingredientes" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Escribe los ingredientes ...</label>
            </div>

            <div class="form-floating pt-3">
                <textarea class="form-control" name="descripcion" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Escribe los pasos ...</label>
            </div>

            <div class="pt-3 text-center">
                <input type="submit" name="submit" value="enviar" class="btn btn-enviar" style="background-color: cadetblue;">
            </div>
        </form>
    <?php 
        if(isset($_POST["submit"])){
            $receta = new  RecetaControlador();
            $receta-> crear();
         } 

} ?>
</section>



<!-- Header -->
<?php include("footer.php") ?>
<!-- Fin header -->