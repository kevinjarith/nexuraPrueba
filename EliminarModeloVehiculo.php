<?php  
   require_once "ClaseEmpleado.php"; 

    $usuarioModel = new EliminarModelo();  

    //capturo la información que viene por metodo post de la Vista.
    $id = $_GET['Eliminar'];
    //Ejecuto el metodo de insertar de la clase instanciada por el objeto usuarioModel
    $a_users  = $usuarioModel->eliminar($id);   

    //header("location:VistaInsertar.php?resultado=ok");

    echo $a_users;
  ?> 