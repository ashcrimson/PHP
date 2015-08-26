// JavaScript Document
$(document).ready(function() 
{
	//Validar R.U.T chileno existente por internet: http://validarut.cl/
	//valida rut persona
	$('#rut').Rut(
	{
		on_error: function()
		{
			alert('Rut incorrecto');
			$('#rut').focus(); 
		},
		format_on: 'keyup'
	});
	//valida buscador rut	
	$('#buscar_rut').Rut(
	{
		on_error: function()
		{
			alert('Rut incorrecto');
			$('#buscar_rut').focus(); 
		},
		format_on: 'keyup'
	});
	
	$('#button1').click(function() 
	{
		guardar();
    });
	
	$('#button2').click(function()
	{
		cancelar();
    });
	
	$('#button3').click(function() 
	{
		buscar_rutpersona(); 
    });
	
	$('#button4').click(function() 
	{
		buscar_nompersona(); 
    });
});

function mostrar()
{
    $.ajax({
		url:'procesos.php',
		type:'POST',
		data:'accion=index',
		success: function(datos) 
		{	
		     $('#resultado').html(datos);
		}
	});
}

function guardar()
{
	if($('#rut').val()!="" && $('#nombre').val()!="" && $('#apellidos').val()!="" && $('#sexo').val()!="" 
	&& $('#email').val()!="")
	{
		if($('#rut_antidisabled').val()!="")
		{
			var datos1='accion=modificar&nombre='+$('#nombre').val()+'&apellidos='+$('#apellidos').val()+
			'&sexo='+$('#sexo').val()+'&email='+$('#email').val()+'&rut_antidisabled='+$('#rut_antidisabled').val();
		}
		else
		{
			var datos1='accion=ingresar&rut='+$('#rut').val()+'&nombre='+$('#nombre').val()+
			'&apellidos='+$('#apellidos').val()+'&sexo='+$('#sexo').val()+'&email='+$('#email').val();
		}
		$.ajax({
			url:'procesos.php',
			type:'POST',
			data:datos1,
			success: function(datos)
			{
				alert("Datos almacenados correctamente");
				limpiar();
				$('#resultado').html(mostrar());
			}
		});
	}
	else
	{
		alert("Debe ingresar todos los campos");
	}
}

function eliminar(rut)
{
	if(confirm("Realmente Desea Eliminar este Registro?"))
	{
		$.ajax({
			url:'procesos.php',
			type:'POST',
			data:'accion=eliminar&delete_rut='+rut,
			success: function(datos)
			{
				alert("Datos eliminados correctamente");
				$('#resultado').html(mostrar());
			}
		});
	}
}

function editar(rut)
{
	$.ajax({
		url:'procesos.php',
		type:'POST',
		dataType:'json',
		data:'accion=editar&rut='+rut,
		success: function(respuesta)
		{
			$('#rut_antidisabled').val(rut);
			$('#rut').val(respuesta.rut1);
			$('#rut').attr('disabled','false');
			$('#nombre').val(respuesta.nombre);
			$('#apellidos').val(respuesta.apellidos);
			$('#sexo').val(respuesta.sexo);
			$('#email').val(respuesta.email);
		}
	});
}

function buscar_rutpersona()
{
	if($('#buscar_rut').val()!="")
	{
		$.ajax({
			url:'procesos.php',
			type:'POST',
			data:'accion=buscar_rut&buscar_rut='+$('#buscar_rut').val(),
			success: function(datos)
			{
				$('#resultado').html(datos);
				document.form2.buscar_rut.value="";
			}
		});
	}
	else
	{
		alert("Debe ingresar R.U.T");
	}
}

function buscar_nompersona()
{
	if($('#buscar_nombre').val()!="")
	{
		$.ajax({
			url:'procesos.php',
			type:'POST',
			data:'accion=buscar_nom&buscar_nombre='+$('#buscar_nombre').val(),
			success: function(datos)
			{
				$('#resultado').html(datos);
				document.form3.buscar_nombre.value="";
			}
		});
	}
	else
	{
		alert("Debe ingresar Nombre");
	}
}

function verificar_rut_persona(valor_rut)
{
	$.ajax(
	{
		url:'procesos.php',
		type:'POST',
		data:'accion=existe_rut&id='+valor_rut,
		success: function(opciones)
		{
			if(opciones==1)
			{
				alert("El rut "+valor_rut+" esta registrado. Ingrese uno nuevo");
				document.getElementById('rut').focus();
			}
		}
	});
}

function cancelar()
{
	location.href='index.php';
}

function limpiar()
{
	document.form1.rut.value="";
	document.form1.rut.disabled=false;
	document.form1.nombre.value="";
	document.form1.apellidos.value="";
	document.form1.sexo.value="";
	document.form1.email.value="";
	document.form1.rut_antidisabled.value="";
}

//Validador de email
function direccionEmail(theElement, nombre_del_elemento )
{
	var evaluar = theElement.value;
	var filter=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if (evaluar.length == 0 ) return true;
	if (filter.test(evaluar))
	return true;
	else
	alert("E-mail incorrecto");
	theElement.focus();
	return false;
}

//Validador de letras Link: http://devcate.blogspot.com/2012/10/validar-solo-numeros-o-texto-con.html
function validar_letras() 
{
	if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
	event.returnValue = false;
}