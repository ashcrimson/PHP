<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>
			SUPAROBO
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<style>
		h2 {
			color:#0000ff;
		}

		h4 {
			color:#0000ff;
		}


		form {
			color: #0000ff;
		}
		</style>
	</head>
	<body style="background-image: url(srwog.jpg); background-repeat: no-repeat; background-size:cover; background-position: center;">
		<audio src="SRW OGs- Trombe! (Ext.).mp3" autoplay>
<p>If you are reading this, it is because your browser does not support the audio element.     </p>
<embed src="SRW D - Theme of Josh [Desire & Drumfire].mp3" width="180" height="90" hidden="true" />
</audio>
		<div class="container">
			<div class="jumbotron">
			<h2>Lista de títulos SRW</h2>
			<p>Ingresa los títulos en el formulario para que aparezcan en la tabla</p>
			</div>
		<form role="form" name="formulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<div class="form-group">
			<label for="titulo">Título</label>
			<input type="text" class="form-control" placeholder="Título" name="titulo">
			</div>
			<div class="form-group">
			<label for="plataforma">Plataforma</label>
			<input type="text" class="form-control" placeholder="Plataforma" name="plataforma">
			</div>
			<div class="form-group">
			<label for="year">Año</label>
			<input type="text" class="form-control" placeholder="Año" name="year">
			</div>
			<div class="form-group">
			<label for="year">Link</label>
			<input type="text" class="form-control" placeholder="Link" name="link">
			</div>
			
			
			<button type="submit" class="btn btn-danger">Ingresa Juego</button>

		</form>
		&nbsp;
		<form action="upload.php" method="post" enctype="multipart/form-data">
    Sube un archivo:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Subir Archivo" name="submit">
</form>
		<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$mensaje="<h4>Juego ingresado correctamente</h4>";
			echo $mensaje;
			$titulo = $_POST[titulo];
			$plataforma = $_POST[plataforma];
			$year = $_POST[year];
			$link = $_POST[link];
			
			}
			$mensaje="";
			$conexion = mysql_connect("localhost", "liam_suparobo", "ebkyh6p1") or die ("Problemas de conexion"); // localhost es el servidor, lia_suparobo es el usuario y ebkyh6p1 es la password
			mysql_select_db("liam_suparobo", $conexion) or die (mysql_error()); // selecciona la base de datos liam_suparobo que se llama igual que el usuario
			mysql_query("insert into juegos(titulo, plataforma, year,link) values('$titulo', '$plataforma', $year,'$link')") ; // insertar en la tabla juegos en las siguientes columnas en parentesis en el mismo orden, los siguientes valores en parentesis con el mismo orden
			$sql="SELECT * FROM juegos"; // mostrar todo de juegos
			$records=mysql_query($sql); // guardar todo en una variable, ahora vamos más abajo
			mysql_close($conexion);
			
			
		?>
		
	
	<div class="table-responsive">		
	<table class="table table-bordered table-hover table-condensed">
		<thead>
		<tr class="danger">
			<th>ID</th>
			<th>Título</th>
			<th>Plataforma</th>
			<th>Año</th>
			<th>Rom</th>
			
		</tr>
	</thead>
		<tbody>
		<?php

			while($juegos=mysql_fetch_assoc($records)) { // se recorre toda la tabla (variable records) con un while y con una función llamada fetch_assoc y se mete todo en una tabla html y el indice es una variable llamada $juegos
				echo "<tr class='success'>";
				echo "<td>".$juegos['id']."</td>"; // en cada echo está el nombre de la columna que tienes en phpmyadmin entre parentesis cuadrados
				echo "<td>".$juegos['titulo']."</td>";
				echo "<td>".$juegos['plataforma']."</td>";
				echo "<td>".$juegos['year']."</td>";
				echo "<td><a href=".$juegos['link'].">Descargar</a></td>";
				echo "</tr>";
			
			}	
		?>
	</tbody>
	</table>
</div>
</div>
	</body>
</html> 