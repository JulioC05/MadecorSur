
<?php

include_once "../layout/head.php";

?>

<?php


include_once($_SERVER['DOCUMENT_ROOT'].'/Sistema_Pedidos/model/Perfil_modelo.php');

//Requiere Sesión

include_once "../layout/Rsesion.php";

//Requiere Sesión
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
                <li>Login</li>
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
        <div class="col-md-3 ">
            <ul class="nav flex-column">
                <h3>Mi cuenta</h3>
                <li class="nav-item">
                  <a class="nav-link active" href="<?php echo DIR?>views/micuenta/">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo DIR?>views/micuenta/perfil">Administrar cuenta</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="<?php echo DIR?>views/micuenta/cerrarsesion" >Cerrar sesión</a>
                </li>
            </ul>
        </div>
        <div class="col-md-7">
            <br>
            <form action="" method="POST">
              <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $nombre?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php echo $user?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="usuario" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" placeholder="Password" value="">
                </div>
              </div>
              <button type="submit" class="btn btn-danger" name="perfil">Guardar</button>
            </form>
        </div>
    </div>
</div>

<?php

include_once "../layout/footer.php";

?>
