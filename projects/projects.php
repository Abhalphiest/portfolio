<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  <!-- for responsive design on devices that try to autoscale -->
	<title> The Portfolio of Margaret Dorsey - Education</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css" />
	<link rel="stylesheet" type="text/css" href="../css/projects.css" />
	
	
	<script src="../javascript/section.js"></script>
	<script>
	var setid;
	window.onload = function()
					{
						document.getElementsByName("projectnav")[0].setAttribute("id","current"); 
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
	if($_GET['action'] == 'wyvern')
	{
		echo "<script>setSubNav('wyvernproject');</script>";
	}
	if($_GET['action'] == 'research')
	{
		echo "<script>setSubNav('researchproject');</script>";
	}
	if($_GET['action'] == 'apotheoun')
	{
		echo "<script>setSubNav('apotheounproject');</script>";
	}
	if($_GET['action'] == 'ui')
	{
		echo "<script>setSubNav('uiproject');</script>";
	}
	if($_GET['action'] == '3d')
	{
		echo "<script>setSubNav('3dproject');</script>";
	}
}
?>

<h1 id="wyvern"> Wyvern Engine </h1>
<div id="wyvernproject">
	
</div>

 <h1 id="research"> Math Undergraduate Research </h1>
 <div id="researchproject">
	
</div>

<h1 id="apotheoun"> Apotheoun </h1>
<div id="apotheounproject">
	
</div>
<h1 id="ui"> Application Design </h1>
<div id="uiproject">
	
</div>
</article>
<h1 id="3d"> 3D Modelling </h1>
<div id="3dproject">
	
</div>
</article>
<?php include '../include/footer.php'; ?>
</body>
</html>