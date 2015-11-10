<html>
<head><title> Mostrar informacion</title>
<body>
<h2> Datos del foro</h2>
<hr>
<?PHP
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link, "temas");
$result=mysqli_query($link, "select * from tema");
echo"<table>";
echo"<tr><td> Num Tema</td><td>Titulo</td></tr>";
$cont=1;

while($row=mysqli_fetch_array($result))
{
	$id=$row['ID'];
	$ti=$row['titulo'];
	if($cont%2==0) $col='#ECF6CE';
	else $col='#D8F781';
	echo"<tr bgcolor= $col><td> $id</td><td><A href='contenido.php?id=$id'>$ti</A></td></tr>";
	$cont++;
}
mysqli_close($link);
?>
</body>
</html>

