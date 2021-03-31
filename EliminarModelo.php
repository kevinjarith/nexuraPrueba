
<?php  
   require_once "ClaseVehiculo.php"; 

    $usuarioModel = new EliminarModelo();  

    //capturo la información que viene por metodo post de la Vista.
    $CodigoVehiculo = $_POST["CodigoVehiculo"];
    //Ejecuto el metodo de insertar de la clase instanciada por el objeto usuarioModel
    $a_users  = $usuarioModel->eliminar($CodigoVehiculo);   

    //header("location:VistaInsertar.php?resultado=ok");

    echo $a_users;
  ?> 
	