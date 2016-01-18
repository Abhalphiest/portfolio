<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  <!-- for responsive design on devices that try to autoscale -->
	<title> The Portfolio of Margaret Dorsey - Education</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css" />
	<link rel="stylesheet" type="text/css" href="../css/projects.css" />
	<link rel="stylesheet" type="text/css" href="../css/gallery.css" />
	
	<script>
	window.onload = function()
					{
						document.getElementsByName("projectnav")[0].setAttribute("id","current"); 
					}  ;
	</script>
</head>
<body>
<?php include '../include/header.html'; ?>
<article id="main"> <!-- for the entire body of content -->
<?php
ini_set('display_errors',1);
if(isset($_GET['action'])) //special link
{
	if($_GET['action'] == 'wyvern')
	{
		echo "<script>sectionSwitch('#wyvernproject','#wyvern');</script>";
	}
	if($_GET['action'] == 'research')
	{
		echo "<script>sectionSwitch('#researchproject','#research');</script>";
	}
	if($_GET['action'] == 'apotheoun')
	{
		echo "<script>sectionSwitch('#apotheounproject','#apotheoun');</script>";
	}
	if($_GET['action'] == 'ui')
	{
		echo "<script>sectionSwitch('#uiproject','#ui');</script>";
	}
	if($_GET['action'] == '3d')
	{
		echo "<script>sectionSwitch('#3dproject','#3d');</script>";
	}
}
?>

<h1 id="wyvern" onclick="sectionSwitch('#wyvernproject','#wyvern')"> Wyvern Engine </h1>
<div id="wyvernproject" class="project">
	<p class="description" > A rendering and physics engine with a from scratch math library, implemented in C/C++ using openGL, GLEW, and GLFW.
	</p>
	<a href="https://github.com/Abhalphiest/engine" class="github">Project Repository on GitHub</a>
</div>

 <h1 id="research" onclick="sectionSwitch('#researchproject','#research')"> Math Undergraduate Research </h1>
 <div id="researchproject" class="project">
	<h2> Lie Symmetries and Differential Equations </h2>
<p> Research into the theoretical foundations of symmetry methods for differential equations, including Lie Symmetry Groups of ODEs, PDEs, and systems, infinitesimal generators and their prolongations, and discrete symmetries.
Also investigated more advanced symmetry methods, such as variational symmetries, general (non-geometric) symmetries, and conservation laws. Currently investigating the application of these methods to various physical problems
arising from the physical sciences.</p>
<p> Research Mentor: Dr. Tamas Wiandt </p>
</div>

<h1 id="apotheoun" onclick="sectionSwitch('#apotheounproject','#apotheoun')"> Apotheoun </h1>
<div id="apotheounproject" class="project">
	<span class="gallerytitle"> Apotheoun</span>
	<p class="description"> A 2D top-down space-themed shooter, implemented in Unity 2d.
	<a class="gallerylink" href="https://github.com/Abhalphiest/apotheoun">Project on Github</a></p>
	<div class="imgbox">
		<img src="../media/projects/apotheoun/playerconcept.jpg" alt="player concept sketch" title="Player" />
		<img src="../media/projects/apotheoun/enemyconcept.jpg" alt="enemy concept sketch" title="Enemy" />
		<img src="../media/projects/apotheoun/background1.png" alt="game environment 1" title="Background" />
		<p class="notes"> Concept sketches of player ship, enemy ship, and background environment. </p>
	</div>
</div>
<h1 id="ui" onclick="sectionSwitch('#uiproject','#ui')"> Application Design </h1>
<div id="uiproject" class="project">
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
</div>
</article>
<h1 id="3d" onclick="sectionSwitch('#3dproject','#3d')"> 3D Modelling </h1>
<div id="3dproject" class="project">
	<span class="gallerytitle"> 3d Asset Gallery</span>
	<p class="description"> A collection of the 3d assets that I have made, for class projects and games.</p>
	<div class="imgbox">
		<img src="../media/projects/art/keybladewireframe.png" alt="wireframe of keyblade model" title="Wireframe" />
		<img src="../media/projects/art/keybladeshaded.png" alt="shaded keyblade model" title="Shaded" />
		<img src="../media/projects/art/keybladetextured.png" alt="textured keyblade model" title="Textured" />
		<p class="notes"> A 'gritty reboot' Kingdom Key ( <a href="http://www.khwiki.com/Kingdom_Key"> from Kingdom Hearts </a>) made from
							reference for 3D Animation and Asset production. Modeled, unwrapped, textured, and rigged by me.</p>
	</div>
</div>
</article>
<?php include '../include/footer.php'; ?>
</body>
<script src="../javascript/gallery.js"> </script> <!-- our gallery javascript -->
<script src="../javascript/section.js"></script>
</html>