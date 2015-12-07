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
	
	<form method="post" action="" name="portfolioForm">
	<input type ="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
	<input type ="hidden" name="recipients" value ="med7068@rit.edu" />
	<input type="hidden" name="required" value="EmailAddr:Your email address,FullName:Your name" />
	<input type = "hidden" name="derive fields" value="email=EmailAddr, realname=FullName, subject=Subject" />
	<input type = "hidden" name="mail_options" value="Exclude=email;realname" />
	
<table>
	<tr>
		<td class="label">
			Your Name:
		</td>
		<td>
			<input type="text" name="name" /> 
		</td>
	</tr>
	<tr>
		<td class="label">
			Your Email:
		</td>
		<td>
			<input type="text" name="email" /> 
		</td>
	</tr>
	<tr>
        <td class="label">
			Subject:
        </td>
        <td>
			<input type="text" name="Subject" />
        </td>
    </tr>
	<tr>
        <td class="label">
			Message:
        </td>
        <td>
			<textarea name="mesg" rows="10" cols="50"></textarea>
        </td>
    </tr>
	<tr>
		<td></td>
        <td>
			<input type="submit" name="submit" value="Submit" />
		</td>
    </tr>
	</table>
</form>

<div id="formoutput">
<pre>
<?php require 'PHPMailer-master/PHPMailerAutoload.php'; 
date_default_timezone_set('Etc/UTC'); //neccessary for SMTP
if(isset($_POST['submit']))
{
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "margaretdorsey94@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "vzetod9n";
//Set who the message is to be sent from
$mail->setFrom($_POST['email'], $_POST['name']);
//Set an alternative reply-to address
$mail->addReplyTo($_POST['email'], $_POST['name']);
//Set who the message is to be sent to
$mail->addAddress($_POST['recipients'], 'Margaret Dorsey');
//Set the subject line
$mail->Subject = $_POST['Subject'];
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($_POST['mesg'], dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = $_POST['mesg'];
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
}
?> <!-- the alternative to formmail that I'm using -->
</pre>
</div>
</article>
<?php include 'include/footer.php'; ?>
</body>
</html>

