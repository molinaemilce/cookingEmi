<!-- Header -->
<?php include("header.php") ?>
<!-- Fin header -->

<?php

$conexion = mysqli_connect("localhost", "root", "", "tabla1") or exit("No se pudo conectar a base de datos");
$result = mysqli_query($conexion, "SELECT*FROM recetas");


?>

<div class=" pt-3 fondo_receta">
    <div class="container">
        <h1 class="text-center pb-4 text-white">Recetas</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            while ($row = mysqli_fetch_array($result)) { ?>

                <div class="col movimiento">
                    <div class="card h-100 shadow-border">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['titulo'] ?> </h5>
                            <span>Ingredientes:</span>
                            <p class="card-text"><?php echo $row['ingredientes'] ?> </p>
                            <span>Pasos:</span>
                            <p class="card-text"><?php echo $row['descripcion'] ?> </p>
                        </div>
                    </div>
                </div>
            <?php
            } // fin 
            ?>

        </div>
    </div>




</div>


<?php
$nombre = "";
$imagen = "";

if (isset($_GET['producto'])) {
    switch ($_GET['producto']) {
        case 'ct':
            # code...
            $nombre = 'chocotorta';
            $imagen = './img/chocotorta.jpg';
            break;
        case 'tr':
            # code...
            $nombre = 'tarta de ricota';
            $imagen = './img/tarta.jpg';
            break;
        case 'r':
            # code...
            $nombre = 'roll';
            $imagen = './img/roll.jpg';
            break;
    }
}

?>

<div>
    <h2> <?php echo $nombre; ?></h2>

    <img src="<?php echo $imagen ?>" alt="">
</div>


<!-- Footer-->
<?php include("footer.php") ?>
<!-- Fin footer -->