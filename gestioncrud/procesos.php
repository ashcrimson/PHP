<?php
include("config/configure.php");
conectar_base();

switch($_POST['accion'])
{
	case 'index':
	                  include("consulta.php");
					  exit;
					  break;
	case 'ingresar':
	                  $sql="INSERT INTO persona SET rut='".$_POST['rut']."', nombre='".$_POST['nombre']."', 
					  apellidos='".$_POST['apellidos']."', sexo='".$_POST['sexo']."', email='".$_POST['email']."'";
					  mysql_query($sql);
					  exit;
					  break;
	case 'modificar':
	                  $sql="UPDATE persona SET nombre='".$_POST['nombre']."', apellidos='".$_POST['apellidos']."', 
					  sexo='".$_POST['sexo']."', email='".$_POST['email']."' WHERE rut='".$_POST['rut_antidisabled']."'";
					  mysql_query($sql);
					  exit;
					  break;
	case 'eliminar':  
	                  $sql="DELETE FROM persona WHERE rut='".$_POST['delete_rut']."'";
					  mysql_query($sql);
					  exit;
					  break;
	case 'editar':  
	                 $respuesta=new stdClass(); 
	                 $sql_persona="SELECT * FROM persona WHERE rut='".$_POST['rut']."'";
					 $res_persona=mysql_query($sql_persona);
					 $datos_persona=mysql_fetch_array($res_persona);
					 $respuesta->rut1=$datos_persona['rut'];
					 $respuesta->nombre=$datos_persona['nombre'];
					 $respuesta->apellidos=$datos_persona['apellidos'];
					 $respuesta->sexo=$datos_persona['sexo'];
					 $respuesta->email=$datos_persona['email'];
					 echo json_encode($respuesta);
					 exit;
					 break;
	case 'buscar_rut':
	                 $sql="SELECT * FROM persona WHERE rut='".$_POST['buscar_rut']."'";
					 $res=mysql_query($sql);
					 $num_rows=mysql_num_rows($res);
					 include("consulta.php");
					 exit;
					 break;
	case 'buscar_nom':
	                 $sql="SELECT * FROM persona WHERE CONCAT(nombre,' ',apellidos) LIKE '%".$_POST['buscar_nombre']."%'";
					 $res=mysql_query($sql);
					 $num_rows=mysql_num_rows($res);
					 include("consulta.php");
					 exit;
					 break;
	case 'existe_rut':
	                 $sql="SELECT rut FROM persona WHERE rut='".$_POST['id']."'";
					 $res=mysql_query($sql);
					 $num_rows=mysql_num_rows($res);
					 
					 if($num_rows>0)
					 {
						 echo 1;
					 }
					 exit;
					 break;
}
?>