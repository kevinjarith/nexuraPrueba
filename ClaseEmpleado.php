
<?php  
require_once "Modelo.php"; 

class InsertarModelo extends Modelo 
{   
    public $nombre;
    public $email;
    public $sexo;
    public $area_id;
    public $boletin;
    public $descripcion;

    public function __construct($nombre="nombre", $email="email", $sexo="sexo", $area_id="area_id", $boletin="boletin", $descripcion="descripcion") 
    {  
        $this->nombre = $nombre;
        $this->email = $email;
        $this->sexo = $sexo;
        $this->area_id = $area_id;
        $this->boletin = $boletin;
        $this->descripcion = $descripcion;  
        parent::__construct(); 
    } 

    public function Insertar($nombre, $email, $sexo, $area_id, $boletin, $descripcion) 
    { 
        $sql_insertar = "INSERT INTO empleados (nombre, email, sexo, area_id, boletin, descripcion) VALUES ('".$nombre."', '".$email."', '".$sexo."', '".$area_id."', '".$boletin."','".$descripcion."')";
        $result = $this->_db->query($sql_insertar); 
        header("Location:index.php");
        return $sql_insertar; 
    } 


    public function InsertarEmpleadoRol($idEmpleado,$idRol) 
    { 
        $sql_insertar = "INSERT INTO empleado_rol (empleado_id,rol_id) VALUES ('".$idEmpleado."','".$idRol."')";
        $result = $this->_db->query($sql_insertar); 
        header("Location:index.php");
        return $sql_insertar; 
    } 


} 

class ConsultarModelo extends Modelo{

       public function consulta_empleados() 
    { 
        $sql_insertar = "SELECT e.id, e.nombre, e.email, e.sexo, a.nombre as nombreArea, e.boletin FROM empleados e JOIN areas a ON a.idareas = e.area_id";
        $result = $this->_db->query($sql_insertar); 
        $users = $result->fetch_all(MYSQLI_ASSOC); 
        
        return $users; 
    }

    public function consulta_areas()
	{
		$sql_select_pais = $this->_db->query('SELECT * From areas');
		$lista_pais = $sql_select_pais->fetch_all(MYSQLI_ASSOC);
		return $lista_pais;
    }

    public function consulta_roles()
	{
		$sql_select_pais = $this->_db->query('SELECT * From roles');
		$lista_pais = $sql_select_pais->fetch_all(MYSQLI_ASSOC);
		return $lista_pais;
    }
    
    public function consulta_empleadoid($id)
	{
		$sql_select_pais = $this->_db->query('SELECT * From empleados Where id ='.$id);
		$lista_pais = $sql_select_pais->fetch_all(MYSQLI_ASSOC);
		return $lista_pais;
    }
    
       
    public function ultimoRegistro()
	{
		$sql_select_pais = $this->_db->query('SELECT id From empleados ORDER BY id DESC LIMIT 1');
		$lista_pais = $sql_select_pais->fetch_all(MYSQLI_ASSOC);
		return $lista_pais;
    }
    
    public function consulta_idrol($idEmpleado)
	{
		$sql_select_pais = $this->_db->query('SELECT rol_id From empleado_rol WHERE empleado_id = '.$idEmpleado);
		$lista_pais = $sql_select_pais->fetch_all(MYSQLI_ASSOC);
		return $lista_pais;
	}

}

class ActualizarModelo extends Modelo 
{           
    public $id;
    public $nombre;
    public $email;
    public $sexo;
    public $area_id;
    public $boletin;
    public $descripcion;    

    public function __construct($id="id",$nombre="nombre", $email="email", $sexo="sexo", $area_id="area_id", $boletin="boletin", $descripcion="descripcion") 
    {          
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->sexo = $sexo;
        $this->area_id = $area_id;
        $this->boletin = $boletin;
        $this->descripcion = $descripcion;          
        parent::__construct(); 
    }  
    
    public function Actualizar($id, $nombre, $email, $sexo, $area_id, $boletin, $descripcion) 
    { 
        
        $sql_Actualizar = ("UPDATE empleados SET nombre='".$nombre."', email='".$email."', sexo='".$sexo."', area_id='".$area_id."', boletin='".$boletin."', descripcion='".$descripcion."' WHERE id =".$id);        
        $result = $this->_db->query($sql_Actualizar); 
        header("Location:index.php");      
        return $sql_Actualizar; 
    } 
} 

class EliminarModelo extends Modelo 
{       
    public $id;

    public function __construct($id="id") 
    {  
        $this->id = $id;
        parent::__construct(); 
    } 

       public function eliminar($id) 
    { 
        $sql_Eliminar = ("DELETE FROM empleados WHERE id=".$id);
        $result = $this->_db->query($sql_Eliminar); 
        header("Location:index.php"); 
        return $sql_Eliminar; 
    } 
} 

  ?> 

