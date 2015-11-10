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
 <a href="./php/logout.php"><font color="red">Cerrar sesión</font></a>	
	</div>

	<div id="page">
		<div id="page-bgtop"><div class="inner_copy"></div>
			<div id="page-bgbtm">
				<div id="content">
				  <div class="post">
				    <h2 class="title"><a href=foro.php>Regresa a la página principal</a></h2>
						<p class="meta">
                          <?PHP
$ti=$_REQUEST['titulo'];
$des=$_REQUEST['desc'];

echo"<h2>Título:  $ti</h2><br>";

echo "$des<br>";


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link, "temas");

mysqli_query($link,"insert into
	tema(titulo, descripcion)
	values('$ti','$des')");

?>
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
		</div>
	</div>
</div>
<div id="footer"><div class="fleft"><p>Copyright statement.</p></div><div class="fright"><p>Encuentre m&aacute;s plantillas web gratis <a href="http://www.mejoresplantillasgratis.es" target="_blank">en MPG</a>.</p></div><div class="fcenter"><p>Design by: Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></p></div><div class="fclear"></div></div>	
</body>
</html>