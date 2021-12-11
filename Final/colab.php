<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: login.php');
        }
    }


?>
<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	 <link href="css/bootstrap-grid.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos.css">

    <title>pagina </title>
  </head>
 <header>
	      <div class="row">
		  <div class="headerp">
		  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">
  
    <a class="navbar-brand" href="#"> 
						<img src="imaganes/battle-galaga-battlegalaga-twitter-galaga-ship-sprite-1024_1024.png"   class="imagen1 img-fluid" alt="nave"  ></a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
	  
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
						  <ul class="navbar-nav">
							<li class="nav-item">
							  <a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" href="#noticias">Noticias</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" href="#Lanzamientos">Lanzamientos</a>
							</li>
                            
							<li class="nav-item dropdown">
							  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Social
							  </a>
							  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								
								<li><a class="dropdown-item" href="#podcast">Podcast</a></li>
								<li><a class="dropdown-item" href="#videos">Videos</a></li>
                                
          </ul>
        </li>
      </ul>
    </div>
			  </nav>
			    </div>
			   </div>
			 
			  </header>
	<body>
															<div class="pading2"> </div>
									<div class="row">

										<div class="sylas col-sm-12 col-md-12 col-lg-12 ">
											<div class="sylas"> 
											<img src="imaganes/a.jpg" alt="horaizon 2" class="img-fluid" >
												</div>
										</div>
									</div>
		
	   
		
	

		   
	  <div class="row">
	  <h1 class="p-5"> Noticias Destacadas</h1>
		  </div>
	 																 <div class="pading"></div>
		
		
					  <div class="row row-cols-1 row-cols-md-3 g-4">
					
						  <div class="col">
					<div class="h-100">
									<div class="animacion">
									  <img src="imaganes/1622100868_484567_1622100959_noticia_normal.jpg" class="card-img-top" alt="Dying Light 2 ">
									  <div class="card-body">
										<h5 class="card-title">Se mostro mas material de Dying Light 2</h5>
										<p class="card-text">En la ultima conferencia y con la E3 a la vuelta de la esquina se mostro material de 
											Dying Light 2 con fecha de salida.</p>
									  </div>

									  <div class="card-footer">
										<small class="text-muted">Publicado hace 3 minutos</small>
									  </div>
									</div>
									</div>
				  </div>
				  <div class="col">
					<div class=" h-100">
						<div class="animacion">
								  <img src="imaganes/lunar-beast-viego-splash-art-lol-uhdpaper.com-hd-7.2977.jpg" class="card-img-top" alt="prime">
								  <div class="card-body">
									<h5 class="card-title">Ya disponible skin gratis con Prime Gaming</h5>
									<p class="card-text">Si tenes amazon o algun servicio de amazon tenes prime gaming y podes reclamar 
										una skin gratis en lol como en otros juegos.</p>
								  </div>
								  <div class="card-footer">
									<small class="text-muted">Publicado hace 3 minutos</small>
								  </div>
								</div>
							  </div>
					  </div>
				  <div class="col">
							<div class=" h-100">
								<div class="animacion">
							  <img src="imaganes/elden-ring.jpg" class="card-img-top" alt="elden ring">
							  <div class="card-body">
								<h5 class="card-title">Lanzamiento de  Elden Ring</h5>
								<p class="card-text">El tan esperado juego de FromSfotware ya esta a la venta ¿superara a su anterrior saga Dark Souls? .</p>
							  </div>
							  <div class="card-footer">
								<small class="text-muted">Publicado hace 3 minutos</small>
					  </div>
					</div>
				  </div>
					  </div>
				</div>
			    
	  <div class="row">
		  <a name="noticias">	</a>
	  <h1 class="p-5"> Noticias </h1>
		  </div>
	   <div class="tipolanding">
		  
	<div class="row">
			
							<div class="sylas col-sm-12 col-md-12 col-lg-6 p-5 ">
								<div class="sylas"> 
								<img src="imaganes/horizon-ii-forbidden-west-playstation-5_334964_pn.jpg" alt="horaizon 2" class="img-fluid" >
									</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6 p-5">
								<div class="container">

								<h2 class=" p-3">Presentaron el nuevo Horaizon Zero Dawn 2</h2>
									<p>
							Sin ningún lugar a dudas, quien se llevó todas las miradas en este primer gameplay fue Aloy, la protagonista de la nueva aventura ambientada en la Costa Oeste de Estados Unidos. Además, pudimos observar diferentes tipos de criaturas, como una especie de velociraptores así como un increíble mamut al que Aloy debió enfrentarse. En esta nueva secuela, el agua ocupará un papel muy importante ya que podremos bucear y explorar los fondos marinos así como enfrentarnos a nuevas animales acuáticos.

							El sistema de combate cuerpo a cuerpo ha mejorado y contaremos con una mayor cantidad de combos a realizar. Podremos utilizar un gancho para movernos de manera más ágil en las alturas y una paravela para planear, objeto que nos recuerda al mítico Zelda Breath of the Wild.
								</p>
									</div>
							</div>
								</div>
						</div>
			
		<div class="row">
			
						<div class="sylas col-sm-12 col-md-12 col-lg-6 p-5 ">
							<div class="sylas"> 
							<img src="imaganes/E1H1jvhWQAUe6S3.jpg" alt="sylas" class="img-fluid" >
								</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-6 p-5">
							<div class="container">

							<h2>Salieron las nuevas skin PROYECTO</h2>
								<p>
							Riot Games confirma que a finales de este mes de mayo traerán de vuelta “Proyecto” a League of Legends, entre otras novedades que rodean a la franquicia. Se trata de una línea de skins que forma parte de un universo futurista alternativo distópico. Concretamente, es un lugar relacionado con los personajes de (Ciudad Superior/Ciudad Inferior) y presenta aspectos de los campeones que muestran varias mejoras cibernéticas e inteligencia artificial mecanizada. A continuación os contamos todo lo que sabemos de este regreso de Proyecto, en esta ocasión llevando la coletilla de “Bastión”. Habrá siete nuevos aspectos disponibles cuando comience el evento: PROYECTO: Mordekaiser, PROYECTO: Renekton, PROYECTO: Sylas, PROYECTO: Sejuani, PROYECTO: Senna, PROYECTO: Varus y PROYECTO: Sylas (edición de prestigio).
							</p>
								</div>
						</div>
							</div>
		
		
<div class="row">
			
						<div class="sylas col-sm-12 col-md-12 col-lg-6 p-5 ">
							<div class="sylas"> 
							<img src="imaganes/Epic-Games-2.jpg" alt="epic vs apple" class="img-fluid" >
								</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-6 p-5">
							<div class="container">

							<h2>Sigue la guerra ente Epic Games y Aplle</h2>
								<p>
							Después de meses de amenazas, Epic Games llega a los tribunales ante Apple.

							El juicio comienza este lunes y es uno de las más importantes en la historia dela compañía de la manzana. El propio jefe de la firma, Tim Cook, ofrecerá su testimonio, siendo la primera vez que se presenta en un juicio. Lo que está en juego es el futuro de la App Store y lo que cobra a los desarrolladores, una fuente de ingresos tremendamente lucrativa para la compañía fundada por Steve Jobs.

							En agosto del año pasado, Epic Games le tendió una trampa a Apple.

							Su exitoso juego Fortnite implementó su propio sistema de pagos dentro la aplicación, lo que evitaba los cargos del 30% de Apple.
							</p>
								</div>
						</div>
							</div>

					<div class="color1">
						<div class="pading"></div>
						 <a name="Lanzamientos">	</a>
						<h1 class="colortitulo ">Lanzamientos</h1>
						<h2 class="colortitulo ">Esta semana</h2>
<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-6 p-5 ">

									<div class="card bg-dark text-white">
							  <img src="imaganes/elden-ring.jpg" class="card-img" alt="elden ring">
							  <div class="card-img-overlay">
								<h5 class="card-title ">ELDEN RING (PS4/PS5/PC/XBOXS)</h5>

							  </div>
							</div>
							</div>
						<div class="col-sm-12 col-md-12 col-lg-6 p-5">

									<div class="card bg-dark text-white">
							  <img src="imaganes/1366_2000.jpeg" class="card-img" alt="god of war">
							  <div class="card-img-overlay">
								<h5 class="card-title ">GOD OF WAR RAGNAROK(PS4/PS5)</h5>

							  </div>
							</div>
							</div>

					</div>
						<h2 class="colortitulo ">Otros</h2>
	<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-3 p-5">

									<div class="card bg-dark text-white">
							  <img src="imaganes/1366_2000 (1).jpeg" class="card-img" alt="control">
							  <div class="card-img-overlay">
								<h5 class="card-title ">CONTROL (PS4/PS5/XBOXS/PC)</h5>
							  </div>
							</div>
							</div>
						<div class="col-sm-12 col-md-6 col-lg-3 p-5">

									<div class="card bg-dark text-white">
							  <img src="imaganes/694456.jpg" class="card-img" alt="zelda">
							  <div class="card-img-overlay">
								<h5 class="card-title ">Zelda breath of the wild 2 (Nintendo Switch)</h5>
							  </div>
							</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3 p-5">

									<div class="card bg-dark text-white">
							  <img src="imaganes/1366_2000 (2).jpeg" class="card-img" alt="diablo 4">
							  <div class="card-img-overlay">
								<h5 class="card-title ">DIABLO 4 (PC)</h5>
							  </div>
							</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3 p-5">

									<div class="card bg-dark text-white">
							  <img src="imaganes/maxresdefault (1).jpg" class="card-img" alt="overwatch 2">
							  <div class="card-img-overlay">
							<h5 class="card-title ">Overwatch 2 (PS4/PS5/XOBOXS/PC)</h5>
							  </div>
							</div>
							</div>
							</div>
					</div>

						<div class="pading"></div>
				 <a name="podcast">	</a>	
					 <h1 class="p-5">Podcast</h1>
					<div class="pading"></div>
						<h2 class="p-1">Capitulos</h2>
	<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3 p-5">
							<div class="vetical">
								<img src="imaganes/450_1000.jpeg" class="card-img" alt="E3">
								 <div class="verdesito p-1">
								<h2 class="colortitulo">¿Qué vamos a ver en la E3 2021? </h2>	
							</div>	
						</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3 p-5">
							<div class="vetical">
								<img src="imaganes/resident-evil-village-lady-dimitrescu.jpeg" class="card-img" alt="resident evil">
								<div class="verdesito p-1"> 
								<h2 class="colortitulo">Hablamos del nuevo Resident Evil VILLAGE</h2>
									</div>


						</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3 p-5">
							<div class="vetical">
								<img src="imaganes/Company-of-Heroes-2-otro-juego-must-have-que-llega-a-SteamOS.jpg" class="card-img" alt="Company of Heroes 2">
								<div class="verdesito p-1">  
								<h2 class="colortitulo">Ahora Steam entrega juegos pagos GRATIS </h2>
						</div>		
						</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3 p-5">
							<div class="vetical">
								<img src="imaganes/sports-blog3-header-1306x700.jpg" class="card-img" alt="Twitch" >
								<div class="verdesito p-1"> 
								<h2 class="colortitulo">La subs en Twitch van costar menos dentro de poco tiempo </h2>
								</div>

						</div>
						</div>

						</div>


					<div class="pading"></div>
										<div class="color4">
											 <a name="videos">	</a>
											<h1 class="colortitulo p-5">Videos</h1>
										<div class="Analicis"></div>
											<h2  class="colortitulo" >Reviews</h2>
		<div class="row">
											<div class="col-sm-6 col-md-6 col-lg-3 p-5">
												<div class="vetical2">
													<div class="animacion"> 
													<img src="imaganes/3.jpg" class="card-img" alt="Hollow Knight">
													</div>
											</div>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-3 p-5">
												<div class="vetical2">
													<div class="animacion"> 
													<img src="imaganes/2.jpg" class="card-img" alt="Controles Tanques">
													</div>
											</div>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-3 p-5">
												<div class="vetical2">
													<div class="animacion"> 
													<img src="imaganes/1.jpg" class="card-img" alt="Anthem">
													</div>
											</div>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-3 p-5">
												<div class="vetical2">
													<div class="animacion">

													<img src="imaganes/4.jpg" class="card-img" alt="Run Dark Souls 3">
														</div>


						</div>
						</div>

			</div>
			</div>
		<div class="row">
							<div class="col-sm-12 col-md-11 col-lg-12 p-5">
							<div class="logo">
							<div class="logo2">	
								<div class="animacion" >
								<a title="logo" href="#" >
							<img src="imaganes/battle-galaga-battlegalaga-twitter-galaga-ship-sprite-1024_1024.png"   class="imagen1 img-fluid" alt="nave"  > </a>
								</div>
								</div>
								</div>
								</div>
								</div>
					  </body>
<footer p-5>
							<ul class="nav justify-content-center p-5">
					  <li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Gmail</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Facebook</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Instagram</a>
					  </li>


					</ul>



						</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	 <script src="js/bootstrap.bundle.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	 

	
</html>
