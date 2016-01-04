<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  <!-- for responsive design on devices that try to autoscale -->
	<title> The Portfolio of Margaret Dorsey - Artwork and Assets</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css" />
	<link rel="stylesheet" type="text/css" href="../css/gallery.css" />
	<script> window.onload = function(){document.getElementsByName("gamenav")[0].setAttribute("id","current")}  </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> <!-- include jQuery -->
	<script src="../javascript/gallery.js"> </script> <!-- our gallery javascript -->
</head>
<body>

<?php include '../include/header.html'; ?>



<article id="gallery">
<section id="introduction">
<h1 id="gametitle"> Artwork and Assets </h1>
</section>
<section id="3d">
	<span class="gallerytitle"> 3d Asset Gallery</span>
	<p class="description"> A collection of the 3d assets that I have made, for class projects and games.</p>
	<div class="imgbox">
		<img src="../media/projects/art/keybladewireframe.png" alt="wireframe of keyblade model" title="Wireframe" />
		<img src="../media/projects/art/keybladeshaded.png" alt="shaded keyblade model" title="Shaded" />
		<img src="../media/projects/art/keybladetextured.png" alt="textured keyblade model" title="Textured" />
		<p class="notes"> A 'gritty reboot' Kingdom Key ( <a href="http://www.khwiki.com/Kingdom_Key"> from Kingdom Hearts </a>) made from
							reference for 3D Animation and Asset production. Modeled, unwrapped, textured, and rigged by me.</p>
	</div>
	
</section>

<section id="2d">
	<span class="gallerytitle"> 2d Asset Gallery</span>
	<p class="description"> A collection of the 2d assets that I have made, for class projects and games.</p>
	<div class="imgbox">
		<img src="../media/projects/art/spritesheetWhite.png" alt="spritesheet" title="Spritesheet" />
		<p class="notes"> A spritesheet made for my 2D Animation and Asset Production class.</p>
	</div>
	
</section>

<section id="traditionalart">
	<span class="gallerytitle"> Traditional Art</span>
	<p class="description"> Some of the stuff I've made with no computer involved, not necessarily for games.</p>
	<div class="imgbox">
		<img src="../media/projects/art/batman.jpg" alt="batman" title="Batman, ink and brush" />
		<img src="../media/projects/art/snowWhite.jpg" alt="snow white" title="Snow White, ink and brush" />
		<p class="notes"> Ink and brush sketches, to get a better idea of the watercolor style for a game.</p>
	</div>	
</section>

<section id="digitalart">
	<span class="gallerytitle"> Digital Art </span>
	<p class="description"> Some of the stuff I've made just playing around in drawing software. </p>
	<div class="imgbox">
		<img src="../media/projects/art/angel.png" alt="abstract angel vector" title="Abstract Vector Art of an Angel, Inkscape" />
		<img src="../media/projects/art/geisha.jpg" alt="geisha painting" title="Digital Painting of a Geisha, GIMP" />
	</div>
	
</section>

</article>
<?php include '../include/footer.php'; ?>
</body>
</html>