<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Codeando</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.onvisible.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Boosting	 by Free CSS Templates</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>


<body>





                                
		
		
			</div>	
<div id="wrapper">
	
  <div id="header">
		<div id="logo">
			<h1><a href="foro.php">Codeando</a></h1C>		</div>

	</div>

	<div id="page">
		<div id="page-bgtop"><div class="inner_copy"></div>
			<div id="page-bgbtm">
				<div id="content">
				  <div class="post">
				    <h2 class="title"><a href=foro.php>Regresa a la página principal</a></h2>
						<p class="meta">
                         <?PHP
$idp=$_GET['id']; 
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"temas");
$result=mysqli_query($link,"select * from tema 
                    where ID=$idp");
$row=mysqli_fetch_array($result);
  
  $ti=$row['titulo'];
  $des=$row['descripcion']; 


echo"<h2>Título:  $ti</h2><br>";

echo "<h3>$des</h3><br>";
mysqli_close($link);


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link, "temas");
$result=mysqli_query($link, "select * from comentario where ID_tema=$idp");

$cont=1;
echo"<p><hr>";
echo"<h4>Comentarios:</h4>";
while($row=mysqli_fetch_array($result))
{
	
	$ti=$row['comentario'];
	
	
	echo	
"$ti<p>";
	$cont++;
}
mysqli_close($link);
?>

<form action="insertaComentario.php" method="post" target="_blank">
<table>
<tr>
<td>Comentario:</td>
<td></textarea>
  <textarea cols="35" rows="4" name="com">  </textarea>
<td>&nbsp;</td></tr>   
<tr><td> </td> <tr><td> </td></tr>
<tr><td> </td>
<input type="hidden" name="id" value=<?php echo $idp?>>
<td><input type="submit" value="comentar" ></td> </tr>

</table>
</form>
                        </p>
						<div class="entry">
						 <h2><br>
</h2>
						 
					      </form>
					</div>
				  </div>
				  <div style="clear:both">&nbsp;</div>
				</div>
				<div style="clear:both">&nbsp;</div>
		
</div>

</body>
</html>