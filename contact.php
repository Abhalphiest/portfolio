<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  <!-- for responsive design on devices that try to autoscale -->
	<title> The Portfolio of Margaret Dorsey - Contact </title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<script> window.onload = function(){document.getElementsByName("contactnav")[0].setAttribute("id","current")}  </script>
</head>
<body>
<?php include 'include/header.html'; ?>


<article id="contact">

<h1>Contact Information</h1>

	<table>
		<tr><td class="label"> rit.edu Email Address: </td> <td> med7068 </td> </tr>
		<tr><td class="label"> gmail.com Email Address: </td> <td> margaretdorsey94 </td> </tr>
	</table>
	<p> 
	
	I am located on campus at the Rochester Institute of Technology in Rochester, NY year-round (except, of course, during internships or study abroad). For my phone number,
	please contact me or see my <a href="resume.pdf"> resume </a>. If you simply want to hear more from me, feel free to check out my various social media accounts, listed below.	
	</p>
<h3> Social Media </h3>
	<a href="https://github.com/Abhalphiest"> <img src="media/index/github.png" title="My GitHub Account" alt="github" width="50" height="50" /> </a>
	<a href="https://www.linkedin.com/in/margaretdorsey"> <img src="media/index/linkedin.png" alt="linkedin" title="My LinkedIn Profile" width="50" height="50"/> </a>
	
	<form method="post" action="http://people.rit.edu/med7068/formmail.php" name="ICEform">
	<input type ="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
	<input type ="hidden" name="recipients" value ="med7068@rit.edu" />
	<input type="hidden" name="required" value="EmailAddr:Your email address,FullName:Your name" />
	<input type = "hidden" name="derive fields" value="email=EmailAddr, realname=FullName, subject=Subject" />
	<input type = "hidden" name="mail_options" value="Exclude=email;realname" />
	
<table cellspacing="5%">
	<tr>
		<td valign="top">
		<p> Name: </p>
		</td>
		<td><input type="text" name="FullName" /> </td>
	</tr>
	<tr>
		<td valign="top">
		<p> Email: </p>
		</td>
		<td><input type="text" name="EmailAddr" /> </td>
	</tr>
	<tr>
        <td valign="top">
        <p>Subject</p>
        </td>
        <td  valign="bottom"><input type="text" name="Subject" /> </td>
        </td>
    </tr>
	<tr>
        <td valign="top">
        <p>Message</p>
        </td>
        <td ><textarea name="mesg" rows="10" cols="50"></textarea>
        </td>
    </tr>
	<tr>
        <td><input type="submit" value="Submit" /></td>
        <td style="text-align:right;"><span style="font-size:60%;">Powered by Tectite <a href="http://www.tectite.com/" target="_blank">php form</a> (FormMail).</span>
        </td>
    </tr>
	</table>
	
</article>
<?php include 'include/footer.php'; ?>
</body>
</html>

