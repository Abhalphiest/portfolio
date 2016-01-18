<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  <!-- for responsive design on devices that try to autoscale -->
	<title> The Portfolio of Margaret Dorsey - Education</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css" />
	<link rel="stylesheet" type="text/css" href="../css/education.css" />
	
	<script src="../javascript/section.js"></script>
	<script>
	var setid;
	window.onload = function()
					{
						document.getElementsByName("edunav")[0].setAttribute("id","current"); 
						if(setid)
						{
							document.getElementByID(setid).setAttribute("class","subcurr");
							document.getElementByID(setid).style.display ="block";
						}
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
	if($_GET['action'] == 'computing')
	{
		echo "<script>sectionSwitch('#compedu','#computingtitle');</script>";
	}
	if($_GET['action'] == 'mathedu')
	{
		echo "<script>sectionSwitch('#mathedu','#mathtitle');</script>";
	}
	if($_GET['action'] == 'gamedesign')
	{
		echo "<script>sectionSwitch('#gameedu','#gametitle');</script>";
	}
	if($_GET['action'] == 'coursework')
	{
		echo "<script>sectionSwitch('#coursework','#coursetitle');</script>";
	}
}
?>

<h1 id="mathtitle" onclick="sectionSwitch('#mathedu','#mathtitle')"> Mathematics </h1>
<div id="mathedu">
	<section>
		<h2>Linear Algebra</h2>
		<h4>Courses Taken </h4>
			<ul>
				<li> Elementary Linear Algebra</li>
				<li> Advanced Linear Algebra </li>
			</ul>
		<h4> Knowledge </h4>
			<ul>
				<li>Elementary Matrix Operations</li>
				<li> Abstract Vector Spaces </li>
				<li> Linear Transformations </li>
				<li> Eigenvalues, Eigenvectors, and Diagonalization </li>
				<li> Inner Product Spaces </li>
				<li> Decompositions and Factorizations </li>
			</ul>
	</section>
	
	<section>
		<h2>Differential Equations </h2>
		<h4>Courses Taken </h4>
			<ul>
				<li>Ordinary Differential Equations</li>
			</ul>
		<h4> Knowledge </h4>
			<ul>
				<li> Separation of Variables </li>
				<li> Slope Fields and Equilibria </li>
				<li> Euler's Method and other Numerical Methods </li>
				<li> First Order, Linear, and Nonlinear Systems </li>
				<li> Forced, Unforced, Damped, and Resonant Harmonic Oscillation </li>
				<li> Laplace Transforms </li>
				<li> Partial Differential Equations and Method of Characteristics</li>
			</ul>
	</section>
	
	<section>
		<h2>Pure Mathematics </h2>
		<h4>Courses Taken </h4>
			<ul>
				<li>Discrete Math and Introduction to Proofs</li>
				<li>Real Variables</li>
			</ul>
		<h4> Knowledge </h4>
			<ul>
				<li> Sets and Set Theory</li>
				<li> Modular Arithmetic, Equivalence Relations, Equivalence Classes</li>
				<li> Countability </li>
				<li> Sequences, Series </li>
				<li> Topology on the Real Number Line</li>
				<li> Limits and Continuity </li>
				<li> Proof Writing </li>
				<li> Elementary Group Theory </li>
			</ul>
	</section>
	
	<section>
		<h2>Calculus</h2>
		<h4>Courses Taken </h4>
			<ul>
				<li>Calculus I</li>
				<li>Calculus 2</li>
				<li>Calculus 3 (Vector and Multivariable Calculus) </li>
			</ul>
		<h4> Knowledge </h4>
			<ul>
				<li> Limits, Derivatives, Integrals </li>
				<li> Vector Calculus </li>
				<li> Multivariable Calculus </li>
				<li> Stokes' Theorem, Green's Theorem </li>
				<li> Line integrals, Surface integrals </li>
				<li> Polar and Spherical Coordinates </li>
				<li> Some (very shallow) understanding of Calculus of Variations</li>
			</ul>
	</section>
</div>

 <h1 id="computingtitle" onclick="sectionSwitch('#compedu','#computingtitle')"> Computing </h1>
 <div id="compedu">
	<section>
		<h2>Basic Data Structures and Algorithms</h2>
		<h4>Courses Taken </h4>
			<ul>
				<li> Game Design and Algorithmic Problem Solving I</li>
				<li> Game Design and Algorithmic Problem Solving II</li>
			</ul>
		<h4> Knowledge </h4>
			<ul>
				<li>Arrays, Lists, Trees, Linked Lists, Graphs, etc</li>
				<li> Conditionals and Loops </li>
				<li> Hash Tables and Dictionaries </li>
				<li> Threading </li>
				<li> The C# language and Visual Studio </li>
				<li> Encapsulation, inheritance, polymorphism </li>
				<li> Event handling</li>
				<li> Basic networking (Sockets) </li>
				<li> Exception catching </li>
			</ul>
	</section>
	
	<section>
		<h2>Systems and Low Level Programming</h2>
		<h4>Courses Taken </h4>
			<ul>
				<li>Mechanics of Programming </li>
			</ul>
		<h4>Knowledge </h4>
			<ul>
				<li> The C language </li>
				<li> Memory Layout </li>
				<li> The compilation and linking process </li>
				<li> System Calls and basic Operating Systems </li>
				<li> The Bash shell and the Unix environment </li>
			</ul>
	</section>
	
	<section>
		<h2>Graphics Programming</h2>
		<h4> Knowledge </h4>
			<ul>
				<li> OpenGL and C++ </li>
				<li> Transformations </li>
				<li> Cameras, Orthographic and Perspective Transformations</li>
				<li> Mesh Construction and Rendering </li>
				<li> Fragment and Vertex Shaders </li>
				<li> The Rendering Pipeline </li>
				<li> .obj loading </li>
				<li> Texturing and UV Coordinates </li>
			</ul>
	</section>
	
	<section>
		<h2>Physics Programming and Simulations</h2>
		<h4>Courses Taken </h4>
			<ul>
				<li>Interactive Media Development</li>
			</ul>
		<h4> Knowledge </h4>
			<ul>
				<li> Basic autonomous algorithms - flee, seek, evade, pursue, obstacle avoidance, etc. </li>
				<li> Basic kinematics - numerical integration of velocity and position from applied forces. </li>
				<li> Collision Detection - AABB, bounding spheres, reoriented bounding boxes, separation-axis test </li>
				<li> Flocking Algorithms </li>
				<li> Spatial Partitioning </li>
			</ul>
	</section>
	<section>
		<h2>Web Development</h2>
		<h4>Courses Taken</h4>
			<ul>
				<li>Web Design and Implementation </li>
			</ul>
		<h4> Knowledge </h4>
		<ul>
			<li>HTML5</li>
			<li>CSS3</li>
			<li>Javascript/JQuery</li>
			<li>Server Side includes and some PHP</li>
			<li>.htaccess</li>
			<li>FTP/SFTP</li>
			<li>Design principles and the web development cycle </li>
		</ul>
	</section>
</div>

<h1 id="gametitle" onclick="sectionSwitch('#gameedu','#gametitle')"> Game Design </h1>
<div id="gameedu">
	<section>
		<h2>User Interface Design</h2>
		<h4>Courses Taken </h4>
			<ul>
				<li> Interaction, Immersion, and the Media Interface</li>
			</ul>
		<h4> Knowledge </h4>
			<ul>
				<li></li>
				<li>  </li>
				<li> </li>
				<li> </li>
				<li> </li>
				<li> </li>
			</ul>
	</section>
	<section>
		<h2>Asset Production</h2>
		<h4>Courses Taken </h4>
			<ul>
				<li>2D Animation and Asset Production</li>
				<li>3D Animation and Asset Production</li>
			</ul>
		<h4> Knowledge </h4>
			<ul>
				<li> Principles of Animation</li>
				<li>  </li>
				<li> </li>
				<li> </li>
				<li> </li>
				<li> </li>
			</ul>
	</section>
</div>
<h1 id="coursetitle" onclick="sectionSwitch('#coursework','#coursetitle')"> Coursework </h1>
<div id="coursework">
	<section>
		<h2>Fall 2015</h2>
		<h4>Courses</h4>
			<ul>
				<li> </li>
			</ul>
	</section>
	<section>
		<h2>Spring 2015</h2>
		<h4>Courses</h4>
			<ul>
				<li> </li>
			</ul>
	</section>
	<section>
		<h2>Fall 2014</h2>
		<h4>Courses</h4>
			<ul>
				<li></li>
			</ul>
	</section>
	<section>
		<h2>Erie Community College / AP Credit</h2>
		<h4>Courses</h4>
			<ul>
				<li> </li>
			</ul>
	</section>
</div>
</article>
<?php include '../include/footer.php'; ?>
</body>
</html>