<?php   
     require_once "ClaseEmpleado.php"; 
?> 
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Prueba nexura</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
			<?php  
				require_once "ClaseEmpleado.php"; 
			
				$usuarioModel = new ConsultarModelo();  
			
				//Ejecuto el metodo de insertar de la clase instanciada por el objeto usuarioModel			 
				$listAreas = $usuarioModel->consulta_areas();
				$listRoles = $usuarioModel->consulta_roles();
						
		   ?> 
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
					<div class="overlay overlay-bg"></div>	
					<div class="container">
						<div class="row fullscreen d-flex align-items-center justify-content-center">
							<div class="banner-content col-lg-7 col-md-6 ">
								<h6 class="text-white "></h6>
								<h1 class="text-white text-uppercase">
									Lista de empleados			
								</h1>
								<p class="pt-20 pb-20 text-white">
									Puedes consultar todos los empleamos que tenemos actualmente.
								</p>
								<a href="index.php" class="primary-btn text-uppercase">Consultar empleados <i class="fa fa-search"></i> </a>
							</div>
							<div class="col-lg-5  col-md-6 header-right">
								<h4 class="text-white pb-30">Registro del empleado</h4>
								<form method="Post" action="insertarEmpleado.php">
									<div class="from-group">
										<input class="form-control txt-field" type="text" name="nombre" id="nombre" placeholder="Nombre completo" required>
										<input class="form-control txt-field" type="email" name="email" id="email" placeholder="Correo electronico" required>
										<h4 class="text-white">Sexo</h4><br>
										<label class="text-white"><input type="radio" name="sexo" value="M" required> Masculino</label><br>
										<label class="text-white"><input type="radio" name="sexo" value="F" required> Femenino</label><br><br>	
										<h4 class="text-white">Area</h4><br>
										<select id="area_id" class = "form-control" name="area_id" required>
											<option value="">Seleccione..</option>
											<?php
											foreach ($listAreas as $row_area){ 
												echo("<option value=".$row_area["idareas"].">".$row_area["nombre"]."</option>");												
											} ?>
										</select><br><br>
										<h4 class="text-white">Descripción</h4><br>
										<textarea class="form-control txt-field" name="descripcion" id="" cols="10" rows="4" required></textarea>
										<label class="text-white"><input type="checkbox" name="boletin" value="1"> Deseo recibir boletin informativo</label><br><br>
										<h4 class="text-white">Roles</h4><br>
										
										<?php
											foreach ($listRoles as $row_rol){ 
												echo("<label class='text-white'><input type='radio' name='rol' required value=".$row_rol["id"]."> ".$row_rol["nombre"]."</label><br>");												
											} ?><br>										
									<div class="form-group row">											
										<div class="col-md-12">
											<button class="btn btn-default btn-lg btn-block text-center text-uppercase">Registrar Cliente <i class="fa fa-edit"></i></button>
										</div>
									</div>
								</form>
							</div>											
						</div>
					</div>					
				</section>
				<!-- End banner Area -->

				<header id="header" id="home">
						<div class="container">
							<div class="row align-items-center justify-content-between d-flex">									  
								<nav id="nav-menu-container">
								<ul class="nav-menu">		
											
									<li class="menu-active"><a href="index.php">Lista de empleados 	</a></li>												          
								</ul>
								</nav><!-- #nav-menu-container -->		    		
							</div>
						</div>

				</header><!-- #header -->		
		<div>	
	</div>			

			<script src="https://kit.fontawesome.com/9820523549.js" crossorigin="anonymous"></script>
			<script src="js/vendor/jquery-3.3.1-min.js"></script>
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>

	


<script src = "js/jquery-3.1.1.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#lb_pais').on('change', function(){
				if($('#lb_pais').val() == ""){
					
				
					$('#Ciudad').empty();
					$('<option value = "">Selecciona un departamento</option>').appendTo('#Ciudad');
					$('#Ciudad').attr('disabled', 'disabled');
				}else{
				
					$('#Ciudad').removeAttr('disabled', 'disabled');
					$('#Ciudad').load('ConsultarModeloCliente.php?CodigoDepartamento=' + $('#lb_pais').val());
				}
		});
	});
</script>
