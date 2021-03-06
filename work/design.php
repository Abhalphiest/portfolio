<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  <!-- for responsive design on devices that try to autoscale -->
	<title> The Portfolio of Margaret Dorsey - Design Portfolio</title>
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
<h1 id="gametitle"> Design </h1>
 </section>
<section id="architectsim">
	<span class="gallerytitle"> Architecture Sim User Interface</span>
	<p class="description"> The visual design process for a portion of the UI necessary for a hypothetical
							game/application, for a group project assigned in an Interaction Design course. Our hypothetical application
							was a building simulator, similar to a combination of Maya 3D and SimCity.
							<a class="gallerylink" href="../media/projects/architectsim/TeamRocket_DesignDoc.pdf">Design Doc</a></p>
	<div class="imgbox">
		<img src="../media/projects/architectsim/moodboard.png" alt="Mood Board" title="Mood Board" />
		<p class="notes"> The mood board for the UI, made by me. the color scheme was eventually changed
							to fit the preferences of the entire team. </p>
	</div>
	<div class="imgbox">
		<img src="../media/projects/architectsim/main_resizewireframe.jpg" alt="Title Screen Wireframe" title="Title Screen Wireframe" />
		<img src="../media/projects/architectsim/construction_resizewireframe.jpg" alt="Construction Screen Wireframe" title="Construction Screen Wireframe" />
		<img src="../media/projects/architectsim/module_resizewireframe.jpg" alt="Splash Screen Wireframe" title="Splash Screen Wireframe" />
		<img src="../media/projects/architectsim/sim_resizewireframe.jpg" alt="Simulation Mode Wireframe" title="Simulation Mode Wireframe" />
		<p class="notes"> Wireframes, made by me.. Some changes were made between these and the creation of the mockups. </p>
	</div>
	<div class="imgbox">
		<img src="../media/projects/architectsim/titlescreenmockup_fin.png" alt="Title Screen Mockup" title="Title Screen Mockup" />
		<img src="../media/projects/architectsim/constructionmockup_fin.png" alt="Construction Screen Mockup" title="Construction Screen Mockup" />
		<img src="../media/projects/architectsim/splashmockup_fin.png" alt="Splash Screen Mockup" title="Splash Screen Mockup" />
		<img src="../media/projects/architectsim/simulationmockup_fin.png" alt="Simulation Mode Mockup" title="Simulation Mockup" />
		<p class="notes">Mockups, made by me, except for the vector art used as a stand in for the gameplay view, which was made by my teammate Jeanette Forbes.</p>
	</div>
	

</section>

</article>
<?php include '../include/footer.php'; ?>
</body>
</html>