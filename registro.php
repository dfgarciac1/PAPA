?php 
conexion();
function conexion(){
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

}

 
$Nombre=$_GET['nombre'];
$Edad=$_GET['Edad'];
$Correo=$_GET['Correo'];
$Contraseña=$_GET['Contraseña'];

echo "<h2>Informacion Recibida </h2>";
echo "El nombre del usuario es ".$Nombre."<br/>";
echo "La Edad del usuario es ".$Edad."<br/>";
echo "El Correo del usuario es ".$Correo."<br/>";
echo "La Contraseña del usuario es ".$Contraseña."<br/>";
?>  
