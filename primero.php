<?php
echo "<h1>Datos</h1>";
$conexion = @mysqli_connect("localhost", "root", "");
if ($conexion) {
	echo "<h2>Conexion establecida</h2>";
$base = @mysqli_select_db($conexion, "hospital");
if($base) {
	echo "<h2>Base de datos encontrada</h2>";
}else{
	echo "<h2>No existe la base de datos</h2>";
    }
}else {
	echo "<h2>Falla en la conexion</h2>";
}

?>