<?PHP
$idp=$_GET['id']; 
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"temas");
$result=mysqli_query($link,"select * from tema 
                    where ID=$idp");
$row=mysqli_fetch_array($result);
  
  $ti=$row['titulo'];
  $des=$row['descripcion']; 


echo"Titulo = $ti <br>";
echo"Descripción = $des <br>";
mysqli_close($link);

?>
<html>
<head><title> Tema</title>
<body>
<h2>Comentarios </h2>
<hr>
<br>
<form action="insertaComentario.php" method="post"enctype="multipart/form-data">
<table>
<tr>
<td>Comentario:</td>
<td></textarea>
<td><textarea cols=35 rows=4 name="com">  </textarea>
</td></tr>   
<tr><td> </td> <tr><td> </td></tr>
<tr><td> </td>
<input type="hidden" name="id" value=<?php echo $idp?>>
<td><input type="submit" value="enviar"></td> </tr>

</table>
</form>

<?PHP
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link, "temas");
$result=mysqli_query($link, "select * from comentario");
echo"<table>";
echo"<tr><td> Num Tema</td><td>Titulo</td></tr>";
$cont=1;

while($row=mysqli_fetch_array($result))
{
	
	$id=$row['ID_tema'];
	$ti=$row['comentario'];
	if($cont%2==0) $col='#ECF6CE';
	else $col='#D8F781';
	echo"<tr bgcolor= $col><td> $id</td><td><A href='insertacomentario.php?id=$id'>$ti</A></td></tr>";
	$cont++;
}
mysqli_close($link);
?>
</body>
</html>