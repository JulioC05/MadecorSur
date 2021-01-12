
<?php

include_once "../layout/head.php";

?>

<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/Sistema_Pedidos/model/Registro_modelo.php');



?>



<?php

include_once "../layout/nav.php";

?>


<!-- Hero-area -->
<div class="hero-area section">

<!-- Backgound Image -->
<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo DIR?>assets/img_web/fondo4.jpeg)"></div>
<!-- /Backgound Image -->

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <ul class="hero-area-tree">
                <li><a href="#">Inicio</a></li>
                <li>Registro</li>
            </ul>
            <h1 class="white-text">Mi cuenta</h1>

        </div>
    </div>
</div>

</div>
<!-- /Hero-area -->
<style >
.borde { 
  border-width: 1px;
  border-style: solid;
  border-color: #DBD0D0;
}

</style>

<br>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <br>
            <form action="" method="POST">
              <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombres</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="correo" placeholder="Correo" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
              </div>
              
              <button type="submit" class="btn btn-danger" name="registro">Guardar</button>
            </form>
        </div>
    </div>
</div>

<?php

include_once "../layout/footer.php";

?>
