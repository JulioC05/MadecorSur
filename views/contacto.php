<?php

//include_once "../model/Contacto_modelo.php";

?>


<?php

include_once "layout/head.php";

?>
<?php

include_once "layout/nav.php";

?>

<!-- Hero-area -->
<div class="hero-area section">

<!-- Backgound Image -->
<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo DIR?>assets/img_web/fondo2.jpg)"></div>
<!-- /Backgound Image -->

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <ul class="hero-area-tree">
                <li><a href="#">Inicio</a></li>
                <li>Contacto</li>
            </ul>
            <h1 class="white-text">Contáctanos</h1>

        </div>
    </div>
</div>

</div>
<!-- /Hero-area -->


<!-- Contact -->
<div id="contact" class="section">

<!-- container -->
<div class="container">

    <!-- row -->
    <div class="row">

        <!-- contact form -->
        <div class="col-md-6">
            <div class="contact-form">
                <h4>Contáctenos</h4>
                <form action="../model/Contacto_modelo.php" method="POST">
                    <input class="input" type="text" name="nombre" placeholder="Nombre" required>
                    <input class="input" type="email" name="email" placeholder="Email" required>
                    <input class="input" type="text" name="asunto" placeholder="Asunto" required>
                    <textarea class="input" name="mensaje" placeholder="Escriba el mensaje"></textarea>
                    <input type="submit" class="main-button icon-button pull-right" value="Enviar Mensaje" name="Enviar">
                </form>
            </div>
        </div>
        <!-- /contact form -->

        <!-- contact information -->
        <div class="col-md-5 col-md-offset-1">
            <h4>Información de Contacto</h4>
            <ul class="contact-details">
                <li><i class="fa fa-envelope"></i>Madecor.21.Sur@gmail.com</li>
                <li><i class="fa fa-phone"></i>997-632-908</li>
                <li><i class="fa fa-map-marker"></i>Sector 1 Mz O Lote 3 Grupo 23A - Villa el salvador</li>
            </ul>

            <!-- contact map-->
            <div id="contact-map">
            <img src="<?php echo DIR?>assets/img_web/ubicacion.PNG" alt="" width="600px"/>
            </div>
            <!--/contact map -->

        </div>
        <!-- contact information -->

    </div>
    <!-- /row -->

</div>
<!-- /container -->

</div>
<!-- /Contact -->
<?php

include_once "layout/footer.php";

?>
