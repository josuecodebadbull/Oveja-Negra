<html>
<head>
	<title>OVEJA NEGRA</title>
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"> </script>-->
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/birdman.js"></script>
	<script src="js/efectos.js"></script>
	<script src="js/hamburgler.js"> </script> 
	<link rel="stylesheet" href="css/hamburgler.css">
	<script src="js/jquery.stellar.min.js"></script>
	<link href="css/ed-grid.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/index.css">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
			$('body').stellar();    
			$('#titulo').click(function(e) {  
				$.fancybox.open([
				{
					href : 'images/chesudaka/chesudaka.jpeg'
				}, {
					href : 'images/chesudaka/chesudaka2.jpeg'
				}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});
		});
	</script>
</head>
<body style="background-color: black">
	<?php include_once("analyticstracking.php") ?>
	<div  class="caja total bnegro" >    
		<div id="" class="grupo">  
			<div id="pics" class="caja movil-100  altototal2 txtcenter">
				<?php 
				include "menu.php";
				?>
				<div id="titulo" class="caja total borde blanco ">
					<p  class="ti birdman blanco  txtcenter">CHE SUDAKA</p>
					<div class="caja total txtleft">
						<a id="titulo"  class="rotate"><img src="img/gallery.png" width="40" height="40"/></a>
					</div>
				</div>
				<div id="contenedor_menu">
					<div id="icono">
						<a href="javascript:void(0)" class="icon"> 
							<div class="hamburger"> 
								<div class="menui top-menu"></div> 
								<div class="menui mid-menu"></div> 
								<div class="menui bottom-menu"></div> 
							</div> 
						</a>     
					</div>
				</div>        
			</div> 
			<script src="js/jquery.backstretch.js"></script>
			<script>
				$("#pics").backstretch([
					"images/chesudaka/chesudakaportada.jpg",
					"images/chesudaka/chesudakaportada2.jpg"
					], {
						fade: 750,
						duration: 4000
					});
				</script>
				<div class="caja movil-100 tablet-100 web-100  pad-30 ">
					<div id="video" class="caja-total txtcenter ">
						<iframe width="70%" height="100%" src="https://www.youtube.com/embed/JwB0PXM8NMg" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div id="logochesudaka" class="caja movil-100 tablet-100 web-100 pad-30 " data-stellar-background-ratio="1.2">
					<div class="caja movil-100 centrar-contenido tablet-50 web-50 ">                    
						<p class="parra arriba abajo  blanco pad-30 txtjustify ">
							Es una banda con misión, una banda que se entiende a si misma como medio de consciencia colectiva. Su música se convierte en el arma de una lucha pacífica por una sociedad solidaria. La música es el medio para el fin, el idioma para que se comprendan sus mensajes en todo el planeta.<br><br>
						</p>
						<!-- <div class="caja total arriba centrar-contenido">
							<img src="images/chesudaka/chesudakahartha_logo.png" width="200">
						</div> -->    
					</div>
					<div  id="playlist" class="caja movil-100 tablet-50 web-50 pad-30">
						<div class="caja total txtcenter">
							<h4>Tracks</h4> <br> <br>
						</div>
						<div class="grupo movil-tabla">

							<div class="grupo movil-tabla">
								<div class="caja movil-1-3 txtcenter"><h3>Al sistema no le conviene</h3></div>
								<div class="caja movil-2-3  txtcenter pad-10">
									<audio id="medio" controls>
										<source src="audio/chesudaka/AL SISTEMA NO LE CONVIENE.mp3" type="audio/mp3">
											Your browser does not support the audio element.
										</audio>
									</div>
								</div>

								<div class="grupo movil-tabla">
									<div class="caja movil-1-3 txtcenter"><h3>Calle luna</h3></div>
									<div class="caja movil-2-3  txtcenter pad-10">
										<audio controls>
											<source src="audio/chesudaka/CALLE LUNA.mp3" type="audio/mp3">                    
												Your browser does not support the audio element.
											</audio>
										</div>
									</div>

									<div class="grupo movil-tabla">
										<div class="caja movil-1-3 txtcenter"><h3>Mentira politika</h3></div>
										<div class="caja movil-2-3  txtcenter pad-10">
											<audio controls>
												<source src="audio/chesudaka/MENTIRA POLITIKA.mp3" type="audio/mp3">                    
													Your browser does not support the audio element.
												</audio>
											</div>
										</div>

									</div>
								</div>

								<div class="caja total pad-30 ">
									<div class="caja movil-25   ">
										<a href="https://www.facebook.com/chesudaka/?fref=ts" target="_blank">
											<div class="facebook centrar-contenido">
											</div>
										</a>
									</div>
									<div class="caja movil-25   ">
										<a href="https://twitter.com/chesudaka?lang=es" target="_blank">
											<div class="twitter centrar-contenido">
											</div>
										</a>
									</div>

									<div class="caja movil-25  ">
										<a href="https://www.instagram.com/chesudaka/" target="_blank">
											<div class="youtube centrar-contenido">
											</div>
										</a>
									</div>
									<div class="caja movil-25  ">
										<a href="https://www.instagram.com/chesudaka/" target="_blank">
											<div class="instagram centrar-contenido">
											</div>
										</a>
									</div>
								</div>
								<div id="copy" class="caja total pad-30">
									<p class="blanco parra copy">&#169 Oveja Negra <br>Esta pagina es un trabajo intelectual de Agencia Oveja Negra, puede ser reproducida sin ánimo de lucro,
										pero no se concede permiso para modificar de ninguna manera, y la fuente y la dirección web tiene que ser citada. <br>
										Si se usa para otros fines requiere autorización previa.</p>
									</div>          
								</div>
							</div>
							<script type="text/javascript">
								$(document).ready(function(){
									$('.birdman').birdman({speedUp:false});
									setTimeout(function(){
										$('#video').fadeIn(); 
									}, 3500);
								});
							</script>

						</body>
						</html>