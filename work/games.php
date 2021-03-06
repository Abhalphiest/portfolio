<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  <!-- for responsive design on devices that try to autoscale -->
	<title> The Portfolio of Margaret Dorsey - Games</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css" />
	<link rel="stylesheet" type="text/css" href="../css/gallery.css" />
	<link rel="stylesheet" type="text/css" href="../css/project.css" />
	<script> window.onload = function(){document.getElementsByName("gamenav")[0].setAttribute("id","current")}  </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> <!-- include jQuery -->
	<script src="../javascript/gallery.js"> </script> <!-- our gallery javascript -->
</head>
<body>
<?php include '../include/header.html'; ?>
<article id="gallery">

<h1 id="gametitle"> Games </h1>
<section id="introduction"> 

</section>
<section id="apotheoun">
	<span class="gallerytitle"> Apotheoun</span>
	<p class="description"> A 2D top-down space-themed shooter, implemented in Unity 2d.
	<a class="gallerylink" href="https://github.com/Abhalphiest/apotheoun">Project on Github</a></p>
	<div class="imgbox">
		<img src="../media/projects/apotheoun/playerconcept.jpg" alt="player concept sketch" title="Player" />
		<img src="../media/projects/apotheoun/enemyconcept.jpg" alt="enemy concept sketch" title="Enemy" />
		<img src="../media/projects/apotheoun/background1.png" alt="game environment 1" title="Background" />
		<p class="notes"> Concept sketches of player ship, enemy ship, and background environment. </p>
	</div>
	
</section>
<section id="amusementpark">
	<span class="gallerytitle"> Amusement Park</span>
	
	<p class="description"> A sandbox environment made in Unity 3d for Interactive Media Development. All trees, textures, terrain, models, etc are made by me
							with the exception of the benches, which I only textured.
							<a class="gallerylink" href="https://github.com/Abhalphiest/AmusementPark">Project on Github</a></p>
	<div class="imgbox">
		<img src="../media/projects/park/screen1.png" alt="environment" title="Environment" />
		<img src="../media/projects/park/screen2.png" alt="ferris wheel" title="Ferris Wheel" />
		<img src="../media/projects/park/screen3.png" alt="trees" title="Custom Trees and Skybox" />
		<p class="notes"> A collection of screenshots from a first person controller </p>
	</div>
	
</section>
</article>
<?php include '../include/footer.php'; ?>
</body>
</html>