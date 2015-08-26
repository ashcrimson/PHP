<?php
if($_POST['buscar_rut']=="" && $_POST['buscar_nombre']=="")
{
	$sql="SELECT * FROM persona";
	$res=mysql_query($sql);
	$num_rows=mysql_num_rows($res);
}
?>
<form id="form4" name="form4" method="post" runat="server">
<div id="containercontent">
<div id="estilo_cabezera_persona">
<div id="div_cabezera_rut">R.U.T</div>
<div id="div_cabezera_nom">Nombre</div>
<div id="div_cabezera_aps">Apellidos</div>
<div id="div_cabezera_sexo">Sexo</div>
<div id="div_cabezera_email">Email</div>
<div id="div_cabezera_acciones">Acciones</div>
</div>
<div id="estilo_scrollbar">
<?php
if($num_rows>0)
{
	while($datos=mysql_fetch_array($res))
	{
		?>
        <div id="estilo_datos_busqueda">
        <div id="div_datos_rut"><?php echo $datos['rut'];?></div>
        <div id="div_datos_nom"><?php echo $datos['nombre'];?></div>
        <div id="div_datos_aps"><?php echo $datos['apellidos'];?></div>
        <div id="div_datos_sexo"><?php echo $datos['sexo'];?></div>
        <div id="div_datos_email"><?php echo $datos['email'];?></div>
        <div id="div_datos_acciones">
        <a href="javascript:editar('<?php echo $datos['rut'];?>');"><img src="public/images/editar.png" border="0" /></a>
        <a href="javascript:eliminar('<?php echo $datos['rut'];?>');"><img src="public/images/eliminar.png" width="18" height="18" border="0" /></a>
        </div>
        </div>
		<?php
	}
}
else
{
	?><div id="estilo_resultado_busqueda">No existen resultados en esta busqueda</div><?php
}
?>
</div>
</div>
</form>