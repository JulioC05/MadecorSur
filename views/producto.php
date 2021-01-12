<?php 

include('../config/conexion.php');

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
<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo DIR?>assets/img_web/fondo4.jpeg)"></div>
<!-- /Backgound Image -->

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <ul class="hero-area-tree">
                <li><a href="#">Inicio</a></li>
                <li>Productos</li>
            </ul>
            <h1 class="white-text">Catálogo</h1>

        </div>
    </div>
</div>

</div>
<!-- /Hero-area -->

<!-- Page Content -->
<div class="container">
        <div class="row">
        	<br />
        	<h2 align="center"></h2>
        	<br />
            <div class="col-md-3">      
            <h3>Búsqueda Avanzada</h3>  
            <br>
            <br>        				
				<div class="list-group">
					<h3>Precio</h3>
					<input type="hidden" id="hidden_minimum_price" value="100" />
                    <input type="hidden" id="hidden_maximum_price" value="25000" />
                    <p id="price_show">S/ 100 - S/ 25000</p>
                    <div id="price_range"></div>
                </div>				
                
            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
	text-align:center; 
	background: url('<?php echo DIR?>assets/cart/image/loader.gif') no-repeat center; 
	height: 150px;
}
</style>    

<?php

include_once "layout/footer.php";

?>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var tipo_madera = get_filter('tipo_madera');
        var n_puertas = get_filter('n_puertas');
        var n_cajones = get_filter('n_cajones');
        $.ajax({
            url:"<?php echo DIR?>model/Producto_modelo.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, tipo_madera:tipo_madera, n_puertas:n_puertas, n_cajones:n_cajones},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:100,
        max:25000,
        values:[100, 25000],
        step:100,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>