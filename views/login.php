

<?php

include_once ('layout/head.php');

?>

<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/Sistema_Pedidos/model/Auth_modelo.php');



?>



<?php

include_once "layout/nav.php";

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

<div class="col-md-1"></div> 

<div class="col-md-5">

            <br>
                
                
                
                    <div class="row borde" >  
                        <div class="col-md-12 mx-auto">
                            <div class="card rounded-0" >
                                <div class="card-header">
                                    <h3 class="mb-0">Inicia sesión </h3>
                                </div>
                                    <div class="card-body">
                                    <form action="" method="POST" id=frm_login>
                                            <div class="form-group" id="user">
                                                <label for="exampleInputUser1">Usuario</label>
                                                <input type="text" name="user" class="form-control" aria-describedby="userHelp" placeholder="Ingrese su Usuario" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group" id="password">
                                                <label for="exampleInputPassword1">Contraseña</label>
                                                <input type="password" name="password" class="form-control" placeholder="Ingrese su Contraseña" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="login" class="btn btn-primary">Ingresar</button>
                                            </div>
                                            <div class="form-group" id="alert">
                            
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
        

</div>
<div class="col-md-1"></div> 
<div class="col-md-5">
<br>
    <div class="row borde">
        <div class="col-md-12 mx-auto">
            <div class="card rounded-0" >
                <div class="card-header">
                    <h3 class="mb-0">No tengo una cuenta</h3>
                </div>
                <div class="card-body">
                    <br><br><br>
                    <div class="form-group">
                            <a href="<?php echo DIR?>views/micuenta/registro" class="btn btn-danger">Registrarse</a>
                     </div>
                    <br><br><br><br>
                    
                </div>
        </div>
    </div>

</div> 


<div class="col-md-1"></div>


   </div>
   </div>



 
<?php

include_once "layout/footer.php";

?>
