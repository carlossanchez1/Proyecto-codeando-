<html>
<head><title> Inserta Tema</title>
<body>
<h2>Insertar una nuevo Tema </h2>
<hr>
<?PHP
$ti=$_REQUEST['titulo'];
$des=$_REQUEST['desc'];

echo "Titulo= $ti<br>";

echo "Descripcion= $des<br>";


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link, "temas");

mysqli_query($link,"insert into
	tema(titulo, descripcion)
	values('$ti','$des')");

?>
</form>
</body>
</html>