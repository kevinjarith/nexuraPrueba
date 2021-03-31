
<?php   
   require_once "ClaseEmpleado.php"; 

   $usuarioModel = new InsertarModelo();      

   //capturo la información que viene por metodo post de la Vista.
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
   
   //busca el ultimo insertado
   
   //Ejecuto el metodo de insertar de la clase instanciada por el objeto insertarEmpleado
   $a_users = $usuarioModel->Insertar($nombre, $email, $sexo, $area_id, $boletin, $descripcion);     

   $consul = new ConsultarModelo();
   $resultadodatos = $consul->ultimoRegistro();
   $idempleado = $resultadodatos[0]["id"];
   
   $rolinsert = $usuarioModel->InsertarEmpleadoRol($idempleado,$rol);      
   
   //header("location:VistaInsertar.php?resultado=ok");
   echo $rolinsert;
   echo $a_users;
 ?>