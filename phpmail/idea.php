<?php
header('Location: index.html');
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$rut = $_POST["rut"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$nombre_empresa = $_POST["nombre_empresa"];
$nombre_proyecto = $_POST["nombre_proyecto"];
$area_proyecto = $_POST["area_proyecto"];
$cuentanos_proyecto = $_POST["cuentanos_proyecto"];
$equipo = $_POST["equipo"];
$experiencia = $_POST["experiencia"];
$dedicacion = $_POST["dedicacion"];
$implementar = $_POST["implementar"];
$antecedentes = $_POST["antecedentes"];
$novedad = $_POST["novedad"];
$dificultad_desarrollo = $_POST["dificultad_desarrollo"];
$soluciones = $_POST["soluciones"];
$dificultades = $_POST["dificultades"];
$necesidad = $_POST["necesidad"];
$tamano = $_POST["tamano"];
$valor = $_POST["valor"];
$capital = $_POST["capital"];
// the message
$msg = "<html>
<head>
<title>Formulario Idea</title>
</head>
<body>
<p><b>Nombre:</b>
<br>
". $nombre ." 
</p>
<p><b>Apellido:</b>
<br>
". $apellido ." 
</p>
<p><b>Cédula Identidad:</b>
<br>
". $rut ." 
</p>
<p><b>E-mail:</b>
<br>
". $email ." 
</p>
<p><b>Teléfono:</b>
<br>
". $telefono ." 
</p>
<p><b>Nombre del emprendimiento o empresa:</b>
<br>
". $nombre_empresa  ." 
</p>
<p><b>Nombre del proyecto:</b>
<br>
". $nombre_proyecto ." 
</p>
<p><b>Área del proyecto:</b>
<br>
". $area_proyecto ." 
</p>
<p><b>Cuéntanos de tu proyecto. ¿Qué es lo que quieren hacer y cómo esperan lograrlo?:</b>
<br>
". $cuentanos_proyecto ." 
</p>
<p><b>Equipo. ¿Quiénes componen el equipo? Escribir breve descripción de los integrantes involucrados en el proyecto:</b>
<br>
". $equipo ." 
</p>
<p><b>¿Qué dedicación tiene cada miembro del equipo a este proyecto? ¿cuál es el rol de cada uno en el proyecto?:</b>
<br>
". $dedicacion ." 
</p>
<p><b>¿Qué problema resuelve con su idea? Dimensione el problema:</b>
<br>
". $implementar ." 
</p>
<p><b>¿Hay antecedentes científicos o comerciales que validen el proyecto?:</b>
<br>
". $antecedentes ." 
</p>
<p><b>¿Cuál es la principal novedad de la propuesta?:</b>
<br>
". $novedad ." 
</p>
<p><b>¿por qué el cobre/litio/molibdeno tienen un rol central en la propuesta de valor de la idea?:</b>
<br>
". $dificultad_desarrollo ." 
</p>
<p><b>¿Existen soluciones similares actualmente en el mercado?:</b>
<br>
". $soluciones ." 
</p>
<p><b>¿Cuáles son las principales dificultades para implementar el proyecto?¿Qué le gustaría lograr con el desarrollo del proyecto?:</b>
<br>
". $dificultades ." 
</p>
<p><b>¿A quién le resuelve una necesidad?¿Quién es el cliente?:</b>
<br>
". $necesidad ." 
</p>
<p><b>¿Cuál es el tamaño de mercado que abarca su proyecto?:</b>
<br>
". $tamano ." 
</p>
<p><b>¿Qué valor genera este proyecto a la industria que pertenece? ¿Ahorran costos? ¿Aumentan ingresos? ¿Aumentan eficiencias? Cuantifique:</b>
<br>
". $valor ." 
</p>
<p><b>¿Necesitas capital para poder desarrollar tu idea? Indique cuánto y para qué:</b>
<br>
". $capital ." 
</p>

</body>
</html>
";

// More headers
$headers .= 'Content-Type: text/html' . "\r\n";;



// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// send email
mail("felipepinoredes@gmail.com","Formulario Idea",$msg, $headers);
}
?>