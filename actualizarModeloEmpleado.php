
<?php  
    require_once "ClaseEmpleado.php"; 

    $usuarioModel = new ActualizarModelo();  

    //capturo la información que viene por metodo post de la Vista.
    $id        = $_POST["id"];    
    $nombre    = $_POST["nombre"];
    $email     = $_POST['email'];
    $sexo      = $_POST['sexo'];
    $area_id   = $_POST['area_id'];
    if(isset($_POST['boletin'])){
      $campoBoletin = 1;
    }else{
      $campoBoletin = 0;
    }
    $boletin   = $campoBoletin;
    $descripcion  = $_POST['descripcion'];
    $rol  = $_POST['rol'];
    //Ejecuto el metodo de insertar de la clase instanciada por el objeto usuarioModel
    
    $a_users    = $usuarioModel->Actualizar($id, $nombre, $email, $sexo, $area_id, $boletin, $descripcion);   
    
    //header("location:VistaInsertar.php?resultado=ok");
    
    echo $a_users;

  ?> 
