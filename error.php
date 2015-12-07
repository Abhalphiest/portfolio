<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  <!-- for responsive design on devices that try to autoscale -->
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<title> 404 Error - Page Not Found </title>
	<script>
		window.onload = function(){
			var whence= "<?php echo $_SERVER['HTTP_REFERER']; ?>";
			document.getElementById("whence").href= whence;
		}
	</script>
</head>
<body>
<article id="error">
<p> <span>I don't think this is the page you were looking for..</span> <a id="whence" href="#"> Would you like to go back from whence you came? </a>
<a href="index.php"> Or maybe go back to the front page? </a>
</article>
</body>

</html>