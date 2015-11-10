<?php
include("conexion.php");
mysql_query("SET NAMES 'utf8'");

$consulta=mysql_query("SELECT * FROM foros ");
$datos = mysql_num_rows($consulta); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Boosting	 by Free CSS Templates</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>


<body>
<div id="wrapper">
	
	<div id="header">
		<div id="logo">
			<h1><a href="#">Codeando</a></h1C>
		</div>
	</div>

	<div id="page">
		<div id="page-bgtop"><div class="inner_copy"></div>
			<div id="page-bgbtm">
				<div id="content">






					<div class="post">
						<h2 class="title"><a href="#">BIENVENIDO A CODEANDO</a></h2>
					</div>










					<div class="post">
						<?php
						while($fila=mysql_fetch_array($consulta)){

						?>

						<h2 class="title"><a href="#"><?php  echo $fila ['titulo'];   ?></a></h2>

						
						<p class="meta"><span class="date"><?php  echo $fila ['fecha'];   ?></span><span class="posted"><?php  echo $fila ['autor'];   ?> </span></p>
						<div style="clear:both">&nbsp;</div>
						<div class="entry">
							<?php  echo $fila ['mensaje'];   ?>
							<p class="links"><a href="#">Leer mas</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Comentarios</a></p>
						</div>
						<?php 
					}
					?>

					</div>









					<table width="90%" border="0" cellspacing="2" cellpadding="2">
<form name="f" action="guardar.php" method="POST">
    <input type="hidden" name="identificador" value="<?=$id?>">
    <tr> 
      <td width="30%" align="right">Autor </td>
      <td><input type="text" name="autor"></td>
    </tr>
    <tr> 
      <td width="30%" align="right">Titulo</td>
      <td><input type="text" name="titulo" value=""></td>
    </tr>
    <tr> 
      <td width="30%" align="right">Mensaje</td>
      <td><textarea name="mensaje" cols="50" rows="5"></textarea></td>
    </tr>
    <tr> 
      <td width="30%" align="right">Fecha </td>
      <td><input type="text" name="fecha"></td>
    </tr>
    <tr> 
      <td colspan="2" align="center"><input type="submit" name="Submit" value="Enviar Mensaje"></td>
    </tr>
  </form>
</table>
					

                  



































					
					<div style="clear:both">&nbsp;</div>
				</div>
				<div id="sidebar">
					<ul>
						<li>
							<div id="search" >
								<form method="get" action="#">
									<div>
										<input type="text" name="s" id="search-text" value="" />
										<input type="submit" id="search-submit" value="GO" />
									</div>
								</form>
							</div>
							<div style="clear:both">&nbsp;</div>
						</li>
						<li>
							<h2>Aliquam tempus</h2>
							<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
						</li>
						<li>
							<h2>Categories</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
						<li>
							<h2>Blogroll</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
						<li>
							<h2>Archives</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div style="clear:both">&nbsp;</div>
			</div>
		</div>
	</div>
</div>
<div id="footer"><div class="fleft"><p>Copyright statement.</p></div><div class="fright"><p>Encuentre m&aacute;s plantillas web gratis <a href="http://www.mejoresplantillasgratis.es" target="_blank">en MPG</a>.</p></div><div class="fcenter"><p>Design by: Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></p></div><div class="fclear"></div></div>	
</body>
</html>