<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php echo '<p>Hola Mundo</p>'; 

  $servername = "localhost:3306";
  $database = "donpacho";
  $username = "root";
  $password = "2126";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database) or die("Error en la conexion");
  $Nombre=$_GET['Nombre'];
  echo "hola".$Nombre;
  $correo=(string)$_GET['correo'];
  $pass=$_GET['pass'];
  $sql = "INSERT INTO usuarios (nombre, correo, pass)
	VALUES ('$Nombre', '$correo' ,'$pass')";
  if ($conn->query($sql) == TRUE) {
	  echo "New record created successfully";
	  } else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
	}

mysqli_close($conn);

?>
 </body>
</html>

