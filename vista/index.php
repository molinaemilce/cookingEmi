<!-- Header -->
<?php include("./header.php") ?>
<!-- Fin header -->

<?php 
require_once "../controlador/homeControlador.php";
?>
<div class="portada">
    <div class="portada__imagen">
        <h1>Bienvenido/a a <span class="portada__titulo">RECETAS SENCILLAS</span></h1>
    </div>

    <div class="container">
        <div class="descripcion_home">
            <p>
                Si tú mismo preparas tus comidas, probablemente aprendas a disfrutarlas y saborearlas más intensamente, lo cual te ayudará a comer menos y saciarte antes. <br>
                Para saber más presioná los beneficios... 😊👇
            </p>
        </div>

        <div class="row row-cols-1 contenedor_card row-cols-md-4">
            <div class="col ">
                <div class="card">
                        <h5 class=" card__titulo"><a href="index.php?beneficio=1">Comida más nutritiva</a></h5>
                </div>
            </div>
            <div class="col">
                <div class="card">
                        <h5 class=" card__titulo"><a href="index.php?beneficio=2">Educación y creatividad</a></h5>
                </div>
            </div>
            <div class="col">
                <div class="card">
                        <h5 class=" card__titulo"><a href="index.php?beneficio=3">Control de porciones </a></h5>
                </div>
            </div>
            <div class="col">
                <div class="card">
                        <h5 class="card__titulo"><a href="index.php?beneficio=4">Ahorro económico</a></h5>
                  
                </div>
            </div>

        </div>

        <div>
            <!-- Estructuras de control -->
            <?php
            $descripcion="";
            if (isset($_GET['beneficio'])) {
                $home = new ControladorHome(); ?>
            <div class="contenedor__descripcion">
            <?php  $home -> beneficios($_GET['beneficio']); ?>
           </div>
                            
         <?php   }  ?>
           
        </div>
    </div>
</div>

<!-- Footer-->
<?php include("footer.php") ?>
<!-- Fin footer -->