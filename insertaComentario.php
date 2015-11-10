<html>
<head><title> Comentarios</title>
<body>
<h2>Coemntarios </h2>
<hr>
<?PHP
$comen=$_REQUEST['com'];
$id=$_REQUEST['id'];

echo "Comentario= $comen<br>";
echo "ID= $id<br>";

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link, "temas");

mysqli_query($link,"insert into
	comentario(ID_tema,comentario)
	values('$id','$comen')");


?>
</form>
</body>
</html>