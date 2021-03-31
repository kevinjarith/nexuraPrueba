
<?php   
     require_once "ClaseVehiculo.php"; 

    $usuarioModel = new InsertarModelo();  

    //capturo la información que viene por metodo post de la Vista.

    $Color      = $_POST['Color'];
    $Tipo       = $_POST['Tipo'];
    $Diseno     = $_POST['Diseno'];
    $Capacidad  = $_POST['Capacidad'];
    $Modelo     = $_POST['Modelo'];
    $Garantia   = $_POST['Garantia'];
    $Marca      = $_POST['CodigoMarca'];

    //Ejecuto el metodo de insertar de la clase instanciada por el objeto usuarioModel
    $a_users    = $usuarioModel->Insertar($Color, $Tipo, $Diseno, $Capacidad, $Modelo, $Garantia,$Marca);   

    //header("location:VistaInsertar.php?resultado=ok");

    echo $a_users;
 ?>