<?php
$servidor='localhost';									    //
$usuario='liam_calendario';											//
$pass='ebkyh6p1';											        // Nos conectamos a
$bd='liam_calendario';											// la base de datos
															//
$conexion = new mysqli($servidor, $usuario, $pass, $bd);	//
$conexion->set_charset('utf8'); // Los datos vendran en formato utf-8

if ($conexion->connect_errno) {                                            //
	echo "Error al conectar la base de datos {$conexion->connect_errno}";  // Mostramos algun posble error
}                                                                          //

$base_url="http://leitmotif.cl/calendario/"; // Url donde estara el proyecto

?>