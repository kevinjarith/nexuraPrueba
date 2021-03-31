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
        <title>Prueba Nexura</title>

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
			<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
			
        </head>
        <body>

                <header id="header" id="home">
                        <div class="container">
                            <div class="row align-items-center justify-content-between d-flex">                              
                              <nav id="nav-menu-container">
                                <ul class="nav-menu">								
									<li><a href="empleados.php">Registro de empleados</a></li>		          
                                </ul>
                              </nav><!-- #nav-menu-container -->		    		
                            </div>
                        </div>
						<div>	
					</div>	
                </header><!-- #header -->


				<?php  
					require_once "ClaseEmpleado.php"; 
				
					$usuarioModel = new ConsultarModelo();  
				
					//Ejecuto el metodo de insertar de la clase instanciada por el objeto usuarioModel
					$listEmpleados = $usuarioModel->consulta_empleados();   
				
					//header("location:VistaInsertar.php?resultado=ok");
				
					// echo $a_users;
				?> 

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-10 col-md-8">							
                            <h1 class="text-white">Lista de empleados</h1><br><br>
							<table class="table table-hover table-dark">
								<thead>
									<tr>
									<th scope="col" ><i class="fa fa-user"></i> Nombre</th>
									<th scope="col"><i class="fa fa-envelope-square"></i> Email</th>
									<th scope="col"><i class="fa fa-ankh"></i> Sexo</th>
									<th scope="col"><i class="fa fa-briefcase"></i> Area</th>
									<th scope="col"><i class="fa fa-address-book"></i> Boletin</th>
									<th scope="col">Modificar</th>
									<th scope="col">Eliminar</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($listEmpleados as $row): ?> 
										<tr>
										<th scope="row"><?php echo $row['nombre']; ?></th>
										<td><?php echo $row['email']; ?></td>
										<td>
										<?php 
											if($row['sexo'] == 'F'){
												$sexo = 'Femenino';
											}else if($row['sexo'] == 'M'){
												$sexo = 'Masculino';
											}
											echo $sexo; 
										?></td>
										<td><?php echo $row['nombreArea']; ?></td>
										<td>
										<?php 
											if($row['boletin'] == 1){
												$informar = 'Si';
											}else if($row['boletin'] == 0){
												$informar = 'No';
											}
											echo $informar; 
										?></td>										
										<td class="text-center" ><a href="actualizarEmpleado.php?Envio=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></td>
										<td class="text-center" ><a href="EliminarModeloVehiculo.php?Eliminar=<?php echo $row['id']; ?>"><i class="fa fa-trash-alt text-danger"></a></td>
										</tr>
									<?php endforeach ?> 								
								</tbody>
							</table>
						</div>																	
					</div>
				</div>					
			</section>	

			<!-- End banner Area -->            
			<script src="https://kit.fontawesome.com/9820523549.js" crossorigin="anonymous"></script>
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

