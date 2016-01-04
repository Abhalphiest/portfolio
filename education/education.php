<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  <!-- for responsive design on devices that try to autoscale -->
	<title> The Portfolio of Margaret Dorsey - Education</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css" />
	<link rel="stylesheet" type="text/css" href="../css/education.css" />
	
	
	<script>
	var name;
	function setSubNav(var n)
	{
		name=n;
	}
	window.onload = function(){document.getElementsByName("edunav")[0].setAttribute("id","current"); 
								document.getElementByID("subcurr").removeAttribute("id");
								document.getElementsByName(name)[0].setAttribute("id","subcurr")}  
	</script>
	<script src="../javascript/education.js"> </script>
</head>
<body>
<?php include '../include/header.html'; ?>
<ul id="edusubnav">
<li id="subcurr" name="computing">Computing</li>
<li name="mathematics">Mathematics</li>
<li name="gamedesign">Game Design</li>
<li name="coursework">Coursework</li>
</ul>
<article id="main"> <!-- for the entire body of content -->
<?php
ini_set('display_errors',1);
if(isset $_GET['action']) //special link
{
	if($_GET['action'] == 'computing')
	{
		echo "setSubNav('computing')";
		include '/education/computingeducation.html';
	}
	if($_GET['action'] == 'mathematics')
	{
		echo "setSubNav('mathematics')";
		include '/education/matheducation.html';
	}
	if($_GET['action'] == 'gamedesign')
	{
		echo "setSubNav('gamedesign')";
		include '/education/gamedesigneducation.html';
	}
	if($_GET['action'] == 'coursework')
	{
		echo "setSubNav('coursework')";
		include '/education/coursework.html';
	}
}
else
{
	echo "setSubNav('computing')";
	include '/education/computingeducation.html';
}
?>
</article>
<?php include '../include/footer.php'; ?>
</body>
</html>