<?php
include("global.php");
require_once("zebra.php");



$query = "SELECT * FROM alumnos ";

$res = $con->query($query);

$num_registros = mysqli_num_rows($res);



$paginacion = new Zebra_Pagination();
$paginacion->records($num_registros);




	
	
			


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<img   src="imagen/info.png" width="250"/>
							<!--<h1>Jane Doe</h1>-->
							
			  </header>
        
   
        
			<h2>Inscriptos <font  color="#804040"><br><h1><?php 
		echo $num_registros + 1; ?></h1> Alumnos.</font></h2>
        
        <form action="home1.php" method="get">
							<div class="fields">
								<div class="field">
									<input name="Nombre" type="text" placeholder="Por Dni...">
								</div>
								
						
							</div>
							<ul class="actions special">
								<li><input value="Consultar!" type="submit" style="background:#D2D2D2"></li>
							</ul>
						</form>
                      
        
      
		
		<br>
         	</section>
<footer id="footer">
						<ul class="copyright">
							
						</ul>
			  </footer>

			</div>

		<!-- Scripts -->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html> 
