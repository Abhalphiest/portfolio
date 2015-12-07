<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  <!-- for responsive design on devices that try to autoscale -->
	<title> The Portfolio of Margaret Dorsey </title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<?php include 'include/header.html'; ?>

<article>
<h1> Notes</h1>
<p> All images were made by me, all CSS, scripts (except for JQuery), php (except for FormMail) etc are mine.
Fonts are Across the Road, Caviar Dreams and Rounded Elegance.
<p>
<h2> Fixes </h2>
<p> I reduced the height of the header, to cut down on wasted whitespace. I fixed the blog linking problems during the course of making it a 
single page application. I went through and cleaned up the CSS. </p>
<h2> Requirements </h2>
<table>
<tr><td>Dynamic Page </td> <td>The blog is now an endlessly scrolling page. It pulls in and appends blog posts dynamically as you reach the end of the page.</td></tr>
<tr><td>jQuery </td> <td>All image galleries are now jQuery image galleries,simply click on an image to start a lightbox gallery of those images. Transitions are used
(slide down and slide up) on the navigation bar.</td></tr>
<tr><td>Email Form </td> <td>There's a mail form on the contact page - it uses phpMailer and smtp through gmail, not formmail.</td></tr>
<tr><td>Server Side Includes</td> <td> I used php instead of direct SSIs, but the header and footer are included on the server side, and so is the date in the footer, among other things,
										like getting the http referer for the 404 page.</td></tr>
<tr><td>.htaccess </td> <td> <a href="https://people.rit.edu/~med7068/gibsonAuth/auth.html"> Link to the Protected Directory</a>  <a href="boo.php"> Garbage Link to see the 404 </a></td></tr>
</table>
<h2> Above and Beyond </h2>
<p> I added the linking system in the blog to pull up specific posts using jQuery, and learned a crap ton of php to be able to write the php for the mail form. I wrote the endlessly
scrolling page and gallery scripts by hand instead of using an existing code base. </p>
</article>
<?php include 'include/footer.php'; ?>

</body>
</html>

