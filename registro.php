
<?php 

$destino= "ticaspaspi@gmail.com" ; 
$Nombre=$_GET['nombre'];
$Edad=$_GET['Edad'];
$Correo=$_GET['Correo'];
$Contraseña=$_GET['Contraseña'];

$contenido="Nombre".$Nombre."\nEdad".$Edad;
mail($destino,"Contacto",$contenido);
header("Genero.html");

?>  
