$mensaje="<h4>Juego ingresado correctamente</h4>";
			echo $mensaje;
			$titulo = $_POST[titulo];
			$plataforma = $_POST[plataforma];
			$year = $_POST[year];
			$link = $_POST[link];
			
			
			$mensaje="";
			$conexion = mysql_connect("localhost", "liam_suparobo", "ebkyh6p1") or die ("Problemas de conexion");
			mysql_select_db("liam_suparobo", $conexion) or die ("Base de Datos Incorrecta");
			mysql_query("insert into juegos(titulo, plataforma, year,link) values('$titulo', '$plataforma', $year,'$link')") ;
			$sql="SELECT * FROM juegos";
			$records=mysql_query($sql);
			mysql_close($conexion);
			