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
			<h1>Codeando</h1>		</div>

	</div>

	<div id="page">
		<div id="page-bgtop"><div class="inner_copy"></div>
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
					  <h2 class="title">Foro</h2>
						<p>Bienvenido a nuestro foro, es este foro podrás consultar, comentar y compartir temas de discusión con nuestra comunidad.</p>
                      <p>En la tabla lateral derecha podrás consultar temas en nuestro foro</p>
                        <p>En esta <a href="createma.php">liga</a> podrás compartir temas de discusión</p>
                        <p>Este espacio es tuyo.
                          <?PHP
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link, "temas");
$result=mysqli_query($link, "select * from tema");
echo"<table>";
echo"<tr><td><h2>Temas</h2></td></tr>";
$cont=1;

while($row=mysqli_fetch_array($result))
{
	$id=$row['ID'];
	$ti=$row['titulo'];
	if($cont%2==0) $col='#000000';
	else $col='#000000';
	echo"<tr bgcolor= $col><td><A href='vercon.php?id=$id'><h3>$ti</h3></A></td></tr>";
	$cont++;
}
mysqli_close($link);
?>
                        </p>
						<div class="entry">
						  <p>&nbsp;</p>
						</div>
					</div>


					<table width="90%" border="0" cellspacing="2" cellpadding="2">
<form name="f" action="guardar.php" method="POST">
  
    <input type="hidden" name="identificador" value="<?=$id?>">
    <tr> 
      <td width="30%" align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="30%" align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="30%" align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="30%" align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" align="center">&nbsp;</td>
    </tr>
  </form>
</table>
					

					<div style="clear:both">&nbsp;</div>
				</div>
				<div style="clear:both">&nbsp;</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>