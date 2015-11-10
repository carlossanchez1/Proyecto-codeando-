<?php
include("conexion.php");

$autor = $_POST["autor"];
$titulo = $_POST["titulo"];
$mensaje = $_POST["mensaje"];
$fecha = $_POST["fecha"];
 
// Grabamos el mensaje en la base.
//$sql = "INSERT  foros (autor, titulo, mensaje,fecha) "+ "VALUES ('$autor','$titulo','$mensaje','$fecha')";
$sql = "INSERT  INTO foros (autor, titulo, mensaje,fecha) VALUES ('$autor','$titulo','$mensaje','$fecha')";

$result = mysql_query($sql);
echo "datos guardados exitosamente";
//$rs = mysql_query($sql, $conexion);

//$ult_id = mysql_insert_id($conexion);

?>