<!--
PAGINAS A TENER EN CUENTA A LA HORA DE CREAR PAGINAS WEB

PARA COLOR:  https://color.adobe.com/es/Gama1-color-theme-4051455/
PARA ATRIBUTOS CSS:  http://getbootstrap.com/css/#responsive-utilities
					http://getbootstrap.com/getting-started/#download
					http://getbootstrap.com/css/#grid
					http://www.bootstrapcdn.com/ 
					http://www.bootstrapcdn.com/
					http://www.w3schools.com/css/default.asp
					http://librosweb.es/libro/css_avanzado/
					http://bxslider.com/options      esto es para crear carrusell

PROPIEDADES CSS: http://www.mclibre.org/consultar/htmlcss/css/css_propiedades.html
VIDEO ACORTAR WEB: https://www.youtube.com/watch?v=m1lEZtHndyA
					https://www.youtube.com/watch?v=ifD_0M49_Bg
					https://bitly.com/a/sign_up
PARA ANIMACION CSS:  http://daneden.github.io/animate.css/
PARA HACER DEGRADES: http://www.colorzilla.com/gradient-editor/
PARA MAS CSS: http://css3generator.com/
FONT:  https://www.google.com/fonts#

CRITERIOS RESPONSIVOS: 4 TIPOS DE COLUMNAS 
col-xs-*  para celulares
col-sd-*  para tablet
col-md-*  para computadores
col-lg-*  para computadoras mas grandes de escritorio
-->
<!-- para agregar una hoja en blanco en un enlace se usa la etiqueta
<a target="_blank" href=""> contenido </a>

Para agregar Java Script se hace el llamado en el body con la siguiente etiqueta:

<script src="archivo.js"></script>

PARA ENVIAR CORREO EMAIL:
<a href="mailto:contacto@hotmai.com" title="enviar correo">icono de mensaje</a>
No es la mejor manera de hacerlo pero existen otras maneras de enviar para que no detexten tu correo y te bombardeen con span.

<form>
	<label for="nombre">Ingrese su nombre:</label>
	<input type="text" placeholder="Escribe tu nombre" size="10 pero esta es opcional" maxlength="2" name="nombre" id="nombre" class=""/>
	
	<input type="password">
	<input type="email" name="" id=""/>
	<br>

	<input type="checkbox" name="" id="">camisa
	<input type="checkbox" name="" id="">polo
	<br/>

	<input type="radio" name="" id="">Mujer
	<input type="radio" name="" id="">Hombre
	
	<input type="button" value="Acepto">
		
	<input type="submit" value="Enviar">

	<select mame="" id="">
		<option value="Mexico">Mexico</option>
		<option value="Peru">Peru</option>
	</select>

	<input type="color" name="" id="">
	<input type="range" name="" id="">

</form>

-->

<!DOCTYPE html>
<html lang="es">

<head>
	<title>ArtexPro  &reg;</title>
	<meta name="viewport" content="device-width, user-scale=no, initial=1.0, maximun-scale=1.0, minimun-scale=1.0"/>
	<meta charset="utf-8"/>
	<meta name="keyswords" description="Impresion offset, volantes, flyer, tarjetas personales, card personal, litografia, laminas transfer, diseño, afiches, carpetas, membretes, brochure, tripticos, calendarios"/>
	<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/> -->

	<!-- jQuery library (served from Google) -->
	<script src="js/googlejquery.min.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="js/jquery.bxslider.min.js"></script>
	<!-- bxSlider CSS file -->
	<link href="css/jquery.bxslider.css" rel="stylesheet" />

	<link rel="stylesheet" href="css/bootstrap.min.css"/>

	<link rel="stylesheet" href="css/animate.css"/>
	
	<link rel="stylesheet" href="css/estilos.css"/>
	<link rel="stylesheet" href="css/fontello.css"/>
	<link rel="shortcut icon" type="image/png" href="img/Logo_iso_icon.png"/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic,800' rel='stylesheet' type='text/css'>

	<!--http://bxslider.com/options-->

</head>

<body>

	<!-- AQUI INICIA EL FORMULARIO DE SESION -->
	<div class="caja-registro">
		<form class="registro">
			<button type="button" class="btn btn-primary"><span class="icon-facebook-circled"></span>Iniciar sesión con Facebook</button><br/>
			<hr/>
			<input type="text" name="correo" placeholder="E-mail"/><br/>
			<input type="password" name="clave" placeholder="Contraseña"/><br/>
			<input type="checkbox" name="recuerdame"/>
			<label for="recuerdame">Recuérdame</label><br/>
			<button type="button" class="btn btn-default" name="enviar">Iniciar sesión</button><br/>
			<span class="margenderecho"><a href="#">¿Olvidaste tu contraseña?</a></span>
		</form>
	</div>
	<!-- FIN DEL FORMULARIO DE SESION -->

	<!-- AQUI INICIA EL cuado de actividad del usuario -->
	<div class="caja-actividad">
		<form class="actividad">
			<label>Mis Favoritos</label><br/>
			<hr/>
			<ul>
				<?php
				// Este contenido php es temporal, el usuario registrado puede ver 
				$favoritos = array("Volantes","Afiches","Tripticos","Tarjetas Personales");
					
					for ($i=0; $i < count($favoritos); $i++) { 
						echo "<li>".$favoritos[$i]."</li>";
					}
				?>
			</ul>
			<br/>
			<button type="button" class="btn btn-default" name="enviar">Ver mis Favoritos</button><br/>
		</form>
	</div>
	<!-- FIN DEL cuado de actividad del usuario  -->

<!-- Inicio de carrusell Nº1 -->
	<div class="image-nave">
		<ul class="bxslider">

		  <li><a href="#"><img src="img/carrusel03.jpg"/></a></li>
		  <li><a href="#"><img src="img/carrusel04.jpg"/></a></li>
		  <li><a href="#"><img src="img/carrusel05.jpg"/></a></li>
		  <li><a href="#"><img src="img/carrusel06.jpg"/></a></li>
		  <li><a href="#"><img src="img/carrusel08.jpg"/></a></li>
		  <li><a href="#"><img src="img/carrusel12.jpg"/></a></li>
		</ul>
			<script type="text/javascript">
				$(document).ready(function(){
				  $('.bxslider').bxSlider(
				  		{slideWidth: 2500, auto: true
  						}
				  	);
				});
			</script>
	</div>
<!-- fin del carrusell -->

	
<!-- Inicio Recuadro gris oscuro antes de la barra de navegacion -->
    <div class="barra-gris">
		<ul>
			<li class="ayuda"><a href="#"><span class="icon-help-circled"></span>Ayuda</a></li>
			<li class="pre-compra"><a href="contacto.html"><span class="icon-doc-text-inv"></span>Mi Pre-Compra</a></li>
			<li id="menuactividad"><span class="icon-gittip"></span>Mi Actividad</li>	
			<li id="menuregistro"><span class="icon-user-2"></span>Iniciar Sesión</li>
			<li><span>|</span></li>
			<li><a href="contacto.html">Crear Cuenta</a></li>
		</ul>    	
    </div>
<!-- Fin de Recuadro gris oscuro antes de la barra de navegacion -->

    <!-- inicia header -->
	<header class="">
		<!-- Inicia header conteniendo barra negra de navegacion  -->
		<a href="index.html"><img src="img/BellaStampaLogo02.png" class="animated swing"/></a>
		<form action="buscar.php" method="POST" class="form-buscar">
			<input type="text" onkeyup="mostrarSugerencia(this.value)" placeholder="Buscar" size="" maxlength="100" name="buscar" id="buscar" class="buscardor"/>
			<?php // Con php si se puede recibir el valor del formulario por name ?>
			<!-- AQUI INICIA EL DEPLEGABLE DEL BUSCADOR -->
			<div class="caja-busqueda">
				<ul>
				 
						Sugerencias: <span id="txtSugerencias"></span>
					
				</ul>

				<script type="text/javascript">
				// Inicio de Javascript
				function mostrarSugerencia(nombre){
					//Inicia JQuery
					$.ajax({
						type: 'POST',
						url: 'busqueda.php',
						data: {
							datos: nombre	
						}
					}).done(function(respuesta){ 
						$('#txtSugerencias').text(respuesta);
					});
				}
				</script>

			</div>
			<!-- FIN DE CAJA BUSQUEDA -->
			
		</form>
		<nav class="menu"></br>
			<ul class="">
				<li><a href="index.html">Home</a></li>
				<li><a href="sesion.html">Mi ArtexPro</a></li>
				<li class="submenu"><a href="#">Cotizaciones</a></li>
				<li class="submenu"><a href="#">Herramientas</a></li>
				<li class="promo"><a href="promociones.html">Promociones</a></li>
				<li class="contacto"><a href="contacto.html">Contacto</a></li>
			</ul>
		</nav>
		<span id="contador"></span> <!-- Aqui se muestra el conteo de las separaciones del carrito-->
		<a href="#"><img src="img/cart.png" class="carrito"/></a><!-- carrito de compras -->
	</header>
    <!-- termina el header -->
	

	<!--Aqui empieza el cuerpo de la pagina-->

	<section class="">

		<!-- Iconos2 -->
		<div class="flexible2">
			<h2 class="naranja">Imprime tus trabajos en 4 pasos</h2>
			<h4>Rápido, confiable y calidad. Lideres en impresión Offset.</h4>
			<br/>
			<div class="contenedor">
				<div class="circulo">
					<a href="#"><img src="img/fond6.jpg"/></a>
					<h3 class="naranja-claro">1º Registrate</h3>
					<p>Para acceder a promociones y descuentos.</p>
				</div>
				<div class="circulo">
					<a href="#"><img src="img/fond9.jpg"/></a>
					<h3 class="naranja-claro">2º Adjunta</h3>
					<p>Tu diseño y selecciona características de impresión.</p>
				</div> 
				<div class="circulo">
					<a href="#"><img src="img/fond13.jpg"/></a>
					<h3 class="naranja-claro">3º Haz el Pago</h3>
					<p>Selecciona una forma de pago que se ajuste a tí.</p>
				</div>
				<div class="circulo">
					<a href="#"><img src="img/fond14.jpg"/></a>
					<h3 class="naranja-claro">4º Confirma</h3>
					<p>La entrega satisfactoria de tu trabajo.</p>
				</div>
			</div>
		</div>
		<!-- Termino de iconos interactivos2 -->

		<!-- Inicio del  Banner -->
		<div class="banner-contenedor blanco">
			<div class="banner-contenedor-interno">
				<div class="contenedor-parte1">
					<h2>Servicio de Envió</h2>
					<br/>
					<p>
						Contamos con un servicio de envió gratis a partir de su segunda compra, usted puede elegir si quiere recogerlo en alguno de nuestros establecimientos. Estamos siempre pensando en tí. 
						<br/>

						Cualquier consulta o duda sobre el servicio, Ud. puede hacerlas en nuestra linea de ayuda al cliente que se encuentra en la parte inferior de esta página.
					</p>
					<div class="">
						<div class="botones">
							<a href="#"><span class="icon-ok"></span></a>
						</div>
						<div class="botones">
							<a href="#"><span class="icon-thumbs-up-1"></span></a>
						</div>
						<div class="botones">
							<a href="#"><span class="icon-doc-text" title="Danos un Like"></span></a>
						</div>
						<div class="botones">
							<a href="#"><span class="icon-help-circled"></span></a>
						</div>
						
					</div>
				</div>
				
				<img src="img/book003.jpg"/>
				<!--
				<video width="500" height="320" controls class="contenedor-parte2">
					<source src="video/serigrafia01.mp4" type="video/mp4">
				</video>
				-->
			</div>
		</div>
		<!-- fin del banner -->

		<!-- imagenes interactivas -->
		<div class="imagenes-interactive marron">
			<div class="container">
				<div class="">
					<h2 class="naranja">Servicio de Impresión Online</h2>
					<h4 class="">Rápido, Seguro y con Amor</h4>
					<br/>
					<div class="">
						<div class="">
							<div class="caja-imagen">
								<a href="#"><img src="img/fond1.jpg" class="image"></a>
								<div class="">
									<p class="text-izquierdo naranja-claro"><strong>Tarjetas Personales</strong></p>
									<p class="">A sólo S/. 59.00</p>
								</div>
							</div>
						</div>
						<div class="">
							<div class="caja-imagen">
								<a href="#"><img src="img/fond2.jpg" class="image"></a>
								<div class="">
									<p class="text-izquierdo naranja-claro"><strong>Volantes y flyers</strong></p>
									<p class="">A sólo S/. 89.00</p>
								</div>
							</div>
						</div>
						<div class="">
							<div class="caja-imagen">
								<a href="#"><img src="img/fond3.jpg" class="image"></a>
								<div class="">
									<p class="text-izquierdo naranja-claro"><strong>Afiches Full Color</strong></p>
									<p class="">A sólo S/. 389.00</p>
								</div>
							</div>
						</div>
						<div class="">
							<div class="caja-imagen">
								<a href="#"><img src="img/fond4.jpg" class="image"></a>
								<div class="">
									<p class="text-izquierdo naranja-claro"><strong>Hojas Membretadas</strong></p>
									<p class="">Desde S/. 266.00</p>
								</div>
							</div>
						</div>
						<div class="">
							<div class="caja-imagen">
								<a href="#"><img src="img/fond5.jpg" class="image"></a>
								<div class="">
									<p class="text-izquierdo naranja-claro"><strong>Folderes y Carpetas</strong></p>
									<p class="">Desde S/. 629.00</p>
								</div>
							</div>
						</div>
						<div class="">
							<div class="caja-imagen">
								<a href="#"><img src="img/fond15.jpg" class="image"></a>
								<div class="">
									<p class="text-izquierdo naranja-claro"><strong>Calendarios Full Color</strong></p>
									<p class="">Desde S/. 597.00</p>
								</div>
							</div>
						</div>
						<div class="">
							<div class="caja-imagen">
								<a href="#"><img src="img/fond7.jpg" class="image"></a>
								<div class="">
									<p class="text-izquierdo naranja-claro"><strong>Tripticos Full Color</strong></p>
									<p class="">Desde S/. 267.00</p>
								</div>
							</div>
						</div>
						<div class="">
							<div class="caja-imagen">
								<a href="#"><img src="img/fond8.jpg" class="image"></a>
								<div class="">
									<p class="text-izquierdo naranja-claro"><strong>Brochure Full Color</strong></p>
									<p class="">Desde S/. 678.00</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fin de imagenes interactivas -->

		<!-- inicio del banner 2  -->
		<div class="banner2">
			<div class="">
				<ul class="bxslider-2">
					<a href="#"><li><img src="img/carrusel13.jpg"/></li></a>
					<a href="#"><li><img src="img/carrusel14.jpg"/></li></a>
					<a href="#"><li><img src="img/carrusel15.jpg"/></li></a>
				</ul>
				<script type="text/javascript">
					$(document).ready(function(){
					  $('.bxslider-2').bxSlider(
					  		{slideWidth: 2500, auto: true
	  						}
					  	);
					});
				</script>
			</div>
		</div>
		<!-- fin del banner 2 -->

		<!-- Iconos 1 -->
		<div class="flexible">
				<div class="caja">
					<a href="#">
						<div class="icono-flotante ">
							<span class="icon-ok naranja icono-interior"></span>
						</div>
					</a>
					<h3>Socios</h3>
					<p>Puede ser socio y obtener descuentos.</p>
				</div>
				<div class="caja">
					<a href="#">
						<div class="icono-flotante ">
							<span class="icon-cog-alt naranja icono-interior"></span>
						</div>
					</a>
					<h3>Asesoramiento</h3>
					<p>Personalizado y a su medida.</p>
				</div>
				<div class="caja">
					<a href="#">
						<div class="icono-flotante ">
							<span class="icon-mail-alt naranja icono-interior"></span>
						</div>
					</a>
					<h3>Mensajería</h3>
					<p>Contestaremos sus dudas e inquietudes.</p>
				</div>
				<div class="caja">
					<a href="https://www.facebook.com/artexproperu">
						<div class="icono-flotante">
							<span class="icon-facebook naranja icono-interior"></span>
						</div>
					</a>
					<h3>Sociales</h3>
					<p>Visitenos en nuestro portal de facebook.</p>
				</div>
		</div>
		<!-- Termino de iconos interactivos1 -->

		<!-- Inicio de Banner imagen grande   -->
		<div class="bannerFin">
			<div class="container"></div>
		</div>
		<!-- Fin del bannner de contacto -->

	</section>

	<!-- <div class="Final"></div> inagen Final con el logo en grises-->

	<!--Aqui empieza el pie de la pagina-->
	<footer class="">
		<div class="footer-servicios">
			<div class="servicios">
				<ul class=""><strong>Ayuda al Usuario</strong>
					<li><a href="#">Primeros pasos</a></li>
					<li><a href="#">Información de pedidos</a></li>
					<li><a href="#">Preguntas más frecuentes</a></li>
					<li><a href="#">Contacta con nosotros</a></li>
				</ul>
				<ul class=""><strong>Información Legal</strong>
					<li><a href="#">Condiciones Generales</a></li>
					<li><a href="#">Condiciones de contratación</a></li>
					<li><a href="#">Política de uso</a></li>
					<li><a href="#"></a></li>
				</ul>
				<ul class=""><strong>Otros Servicios</strong>
					<li><a href="#">Impress++</a></li>
					<li><a href="#">Canjea puntos</a></li>
					<li><a href="#"></a></li>
				</ul>
				<ul class=""><strong>Acerca de Nosotros</strong>
					<li><a href="#">Misión</a></li>
					<li><a href="#">Visión</a></li>
					<li><a href="#">Clientes</a></li>
					<li><a href="#"></a></li>
				</ul>
				<!-- <ul class="">
					<li><strong>Home</strong></li>
					<li><strong>Preguntas Frecuentes</strong></li>
					<li></li>
					<li></li> 
				</ul>-->
			</div>
			<div class="">
				<div class="horario">
					<div class="horario-parte1">
						<ul class="">
							<li class=""><strong>Horario de Atención</strong></li>
							<li>Lunes a Domingo las 24 Horas del día</li>
						</ul>
						<ul class="">
							<li><strong>Horario de Entregas</strong></li>
							<li>Lunes a Viernes 3:00 p.m. - 6:00 p.m.</li>
						</ul>
					</div>
					<div class="horario-parte2">
				        <div class="">
				            <a href="https://www.facebook.com/artexproperu/" target="_blank">
								<span class="icon-facebook"></span>
				            </a>
				        </div>
				        <div class="">
				            <a href="#">
				                <span class="icon-youtube-squared" target="_blank"></span>
				            </a>
				        </div>
				        <div class="">
				            <a href="#">
								<span class="icon-mail-alt"></span>
				            </a>
				        </div>
                        <div class="">
				            <a href="#">
								<span class="icon-help-circled"></span>
				            </a>
				        </div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-razon">
			<div class="container">
					<article class="text-center">
						<p><a href="index.html">HOME</a> | <a href="#"> CONTACTO</a><br/>
						Av. Separadora Industrial 150 - Urb. Los Alamos - Salamanca  - Ate - Lima   -  Perú<br/>
						Tel.: (511) 525 0260 - Móvil: (511) 933 985 918  -  (511) 914 186 927<br/>
						ventas@artexpro.com - info@artexpro.com
					</article>
			</div>
		</div>
		<div>
			<article class="footerFin">
				<br/>
				<p>   © Copyright 2010  -  2016   </p>
			</article>
		</div>
	</footer>


	
	<script src="js/menu.js" ></script>
	<!-- <script src="js/jquery-1.11.3.min.js" ></script> -->
</body>
</html>