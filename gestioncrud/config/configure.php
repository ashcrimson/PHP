<?php
function conectar_base()
{
   $conexion=mysql_connect("localhost","liam","ebkyh6p1") or die("Error en La Conexion ".mysql_error());
   mysql_select_db("liam_gestioncrud",$conexion) or die("Error en la Base de Datos ".mysql_error());
   mysql_query("SET NAMES 'utf8'");
   return $conexion;
}
?>