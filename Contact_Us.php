<?php
session_start();
if(isset($_SESSION['eform'])==session_id())
{
	
	unset($_SESSION['eform']);
}
?>
<htmL>
<head>
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="cus.css">
<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="responsiveform1.css" />
<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
<link rel="stylesheet" media="screen and (max-width: 350px)" href="responsiveform3.css" />
</head>
<body>
<div id="envelope">
<table id="tab">
<tr><td><a href="index.php">Home</br>Page</a></td><td><a href="Contact_Us.php">Contact</br>Us</a></td><td id="aclick"><a href="admin\login.php">
Admin</br> Click Here</a></td>

<?php
if(isset($_SESSION['user'])==session_id())
{
echo "<td><a href='logout.php'>Logout</a></td>";
}
?>
</tr>
</table>
<marquee direction="right" bgcolor="red" behavior="alternate" onmouseover="stop()" onmouseout="start()"><font color="yellow">ENQUIRY MANAGEMENT SYSTEM</font></marquee>
<div id="cus">
<P id="mob">Name: Rahul Ranjan</p>
</br>
<p id="mobn">Mob No: +91 9334358867</p>
</br>
<p id="mobn">Email: rahulranjan0006@gmail.com</p>
<div class="sp">
<a href="https://www.facebook.com/rahulranjan0006/"><img src="fb.png" class="user"></a><a href="https://twitter.com/rahulranjan0006//"><img src="twitter.png" class="user"></a></br>
<a href="https://www.instagram.com/rahulranjan0006/"><img src="insta.png" class="user"></a><a href="https://api.whatsapp.com/send?phone=919334358867"><img src="wapp.png" class="user"></a>
</br>
<p id="social"><a href="http://rahulranjan0006.in/"><font color="red">Visit my website</font></p>
</div>

</div>
</div>
<div id="bottom">
<table border="1" id="footer">
<tr>
<td colspan="5"><p id="ul">Useful Links</p></td>
</tr>
<tr>
<td><input type="button" id="button1" name="map" value="National Portal Of India" onClick="window.open('http://www.india.gov.in');"> </td>
<td align="center"><input type="button" id="button1" name="map" value="" onClick="window.open('http://rahjulranjan0006.in/');"></td>
<td align="center"><input type="button" id="button1" name="map" value="State Portal Of Bihar" onClick="window.open('http://gov.bih.nic.in');"></td>
<td align="center"><input type="button" id="button1" name="map" value="RTPS Bihar" onClick="window.open('http://210.212.23.51/rtps/');"></td>
<td align="right"><input type="button" id="button1" name="map" value="Patna Jn. To Our office" onClick="window.open('https://goo.gl/maps/Hu2ajyYnRdA2');"></td>
</tr>
</table>
</div>
</body>
</html>