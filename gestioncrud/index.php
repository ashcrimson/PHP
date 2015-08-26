<?php
include("config/configure.php");
conectar_base(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="public/css/css_persona.css" rel="stylesheet" type="text/css" />
<script type="application/javascript" src="public/js/jquery-1.7.min.js"></script>
<script type="application/javascript" src="public/js/rut.js"></script>
<script src="public/js/funciones.js" type="text/javascript"></script>
</head>

<body>
<h1 id="h1_title">Gestion de Personas</h1>
<div id="formulario">
<form id="form1" name="form1" method="post" action="">
<div id="formulario_lado1">
R.U.T<br />
Nombre<br />
Apellidos<br />
Sexo<br />
Email
</div>
<div id="formulario_lado2">
<input type="text" id="rut" name="rut" size="25" value="<?php echo $rut1;?>" <?php if($_POST['rut']!=""){?> disabled <?php }else{?> onblur="verificar_rut_persona(this.value);" <?php }?> />
<input type="hidden" id="rut_antidisabled" name="rut_antidisabled" value="<?php echo $_POST['rut'];?>" /><br />
<input type="text" id="nombre" name="nombre" size="25" value="<?php echo $nombre;?>" onkeypress="validar_letras()" /><br />
<input type="text" id="apellidos" name="apellidos" size="25" value="<?php echo $apellidos;?>" onkeypress="validar_letras()" /><br />
<select id="sexo" name="sexo">
<option value="">Seleccione</option>
<option value="Masculino" <?php if($sexo=="Masculino") echo "selected" ?>>Masculino</option>
<option value="Femenino" <?php if($sexo=="Femenino") echo "selected" ?>>Femenino</option>
</select><br />
<input type="text" id="email" name="email" size="25" value="<?php echo $email;?>" onBlur="return direccionEmail(email,'email' );" />
</div>
<div id="formulario_lado3">
<input type="button" id="button1" name="button1" value="Guardar" />
<input type="button" id="button2" name="button2" value="Cancelar" />
</div>
</form>
</div>
<div id="buscadores">
<div id="buscador1">
<form id="form2" name="form2" method="post" action="">
<div id="buscador1_lado1">R.U.T</div>
<div id="buscador1_lado2"><input type="text" id="buscar_rut" name="buscar_rut" size="25" /></div>
<div id="buscador1_lado3"><input type="button" id="button3" name="button3" value="Buscar" /></div>
</form>
</div>
<div id="buscador2">
<form id="form3" name="form3" method="post" action="">
<div id="buscador2_lado1">Nombre</div>
<div id="buscador2_lado2"><input type="text" id="buscar_nombre" name="buscar_nombre" size="25" /></div>
<div id="buscador2_lado3"><input type="button" id="button4" name="button4" value="Buscar" /></div>
</form>
</div>
</div>
<h3 id="h3_title_lista">Lista de Personas</h3>
<div id="resultado"><?php include("consulta.php");?></div>
<div id="div_pie_pagina">Realizado por Leitmotif &copy; <?php echo date('Y');?></div>
</body>
</html>