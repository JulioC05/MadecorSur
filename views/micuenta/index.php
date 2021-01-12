

<?php

include_once "../layout/head.php";

?>

<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/Sistema_Pedidos/model/Auth_modelo.php');

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

<div class="container py-5">
<div class="row">

<div class="col-md-2"></div> 

<div class="col-md-8">

            <br>
                
                
                
                    <div class="row borde" >  
                        <div class="col-md-12 mx-auto">
                            <div class="card rounded-0" >
                                <div class="card-header">
                                    <h3 class="mb-0">¡Bienvenido!</h3>
                                </div>
                                    <div class="card-body">
                                    <a class="btn btn-primary" href="<?php echo DIR?>views/micuenta/perfil">Administrar Cuenta</a>
                                </div>
                            </div>
                        </div>
                        <br><br><br><br><br>
                    </div>
                
                    

</div>



<div class="col-md-2"></div>  

   </div>
   </div>



<?php

include_once "../layout/footer.php";

?>
