

<!-- Header -->
<?php if($_SERVER['PHP_SELF'] == DIR."index.php") {?>

    <header id="header" >

<?php

}else{
	
?>

<header id="header" >

<?php } ?>

			<div class="container ">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="#">
							<img src="<?php echo DIR?>assets/img_web/logo_largo_2.png" alt="logo" width="190px">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="<?php echo DIR?>">Inicio</a></li>
						<li><a href="<?php echo DIR?>views/nosotros">Nosotros</a></li>
						<li><a href="<?php echo DIR?>views/producto">Productos</a></li>
						<!--<li><a href="#">Blog</a></li>-->
						<li><a href="<?php echo DIR?>views/contacto">Contacto</a></li>
                        <!--
						<li >
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Mi Cuenta
        				</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							
						<?php if(isset($_SESSION['usuario'])){ ?>
						&nbsp;&nbsp;<a href="<?php echo DIR?>views/micuenta/" class="dropdown-item">Inicio</a>
						&nbsp;&nbsp;<a href="<?php echo DIR?>views/micuenta/perfil" class="dropdown-item">Administra tu &nbsp;&nbsp;&nbsp;cuenta</a>
						&nbsp;&nbsp;<a href="<?php echo DIR?>views/micuenta/cerrarsesion" class="dropdown-item">Cerrar Sesión</a>
						<?php }else{ ?>
							&nbsp;&nbsp;<a href="<?php echo DIR?>views/login" class="dropdown-item">Iniciar Sesión</a>
						<?php } ?>	
						
						
						</div>
						</li>
                        -->
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->
		