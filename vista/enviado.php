<div class="container__contenido mx-auto ">
            <img src="../img/enviado.svg" style="width:300px;" alt="">
            <p>Se ha enviado con exito</p>
            <?php
            if(isset($_GET['e'])){ ?>
                <a href="./contacto.php">Volver atrás</a>
           <?php  }else {  ?>
                <a href="./crearReceta.php">Volver atrás</a>
            <?php  }   ?>
            
</div>