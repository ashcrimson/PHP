<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

?>

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
			<label for="username">Usuario</label>
			<input type="text" class="form-control" placeholder="Usuario" name="username">
			</div>
			<div class="form-group">
			<label for="password">Password</label>
			<input type="text" class="form-control" placeholder="Password" name="password">
			</div>
			</div>
			
			
			<button type="submit" class="btn btn-danger">Ingresar</button>

		</form>
		&nbsp;
		
		<?php 
	if($_POST['submit']) {
	$dbCon = mysqli_connect("localhost", "liam_suparobo", "ebkyh6p1", "liam_suparobo");

if(mysqli_connect_errno()) {
	echo "Failed to connect: " . mysqli_connect_error();
} 
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);

	$sql = "SELECT id, username, password FROM users WHERE username = '$username'";
	$query = mysqli_query($dbCon, $sql);

	if ($query) {
		$row = mysqli_fetch_row($query);
		$userId = $row[0];
		$dbUsername = $row[1];
		$dbPassword = $row[2];
	}

	if($username == $dbUsername && $password == $dbPassword) {
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $userId;
		header('Location: index.php');
	} else {
		echo "Incorrect username or password.";
	}

}
			$mensaje="";
			$conexion = mysql_connect("localhost", "liam_suparobo", "ebkyh6p1") or die ("Problemas de conexion");
			mysql_select_db("liam_suparobo", $conexion) or die ("Base de Datos Incorrecta");
			mysql_query("insert into juegos(titulo, plataforma, year,link) values('$titulo', '$plataforma', $year,'$link')") ;
			$sql="SELECT * FROM juegos";
			$records=mysql_query($sql);
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

			while($juegos=mysql_fetch_assoc($records)) {
				echo "<tr class='success'>";
				echo "<td>".$juegos['id']."</td>";
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