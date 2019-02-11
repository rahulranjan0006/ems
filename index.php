<?php
session_start();
if(isset($_SESSION['eform'])==session_id())
{
	
	unset($_SESSION['eform']);
}
if(isset($_POST['eform']))
{
	$_SESSION['eform']=session_id();
	header("location:enquiry_form.php");
}
if(isset($_POST['check']))
{
	$_SESSION['estatus']=session_id();
	header("location:enquiry_status.php");
}
?>
<htmL>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="homepage.css">
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="responsiveform1.css" />
<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
<link rel="stylesheet" media="screen and (max-width: 350px)" href="responsiveform3.css" />
<link rel="stylesheet" href="css/style.css">
</head>

<script language="JavaScript">
<!--
function clock(){
var time = new Date()
var hr = time.getHours()
var min = time.getMinutes()
var sec = time.getSeconds()
var ampm = " PM "
if (hr < 12){
ampm = " AM "
}
if (hr > 12){
hr -= 12
}
if (hr < 10){
hr = " " + hr
}
if (min < 10){
min = "0" + min
}
if (sec < 10){
sec = "0" + sec
}
document.clockForm.clockButton.value = hr + ":" + min + ":" + sec + ampm
setTimeout("clock()", 1000)
}
function showDate(){
var date = new Date()
var year = date.getYear()
if(year < 1000){
year += 1900
}
var monthArray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")
alert( monthArray[date.getMonth()] + " " + date.getDate() + ", " + year)
}
window.onload=clock;
//-->
</script>
<SCRIPT LANGUAGE="JavaScript">

function getCookieVal (offset) {
var endstr = document.cookie.indexOf (";", offset);
if (endstr == -1)
endstr = document.cookie.length;
return unescape(document.cookie.substring(offset, endstr));
}
function GetCookie (name) {
var arg = name + "=";
var alen = arg.length;
var clen = document.cookie.length;
var i = 0;
while (i < clen) {
var j = i + alen;
if (document.cookie.substring(i, j) == arg)
return getCookieVal (j);
i = document.cookie.indexOf(" ", i) + 1;
if (i == 0) 
break; 
}
return null;
}
function SetCookie (name, value) {
var argv = SetCookie.arguments;
var argc = SetCookie.arguments.length;
var expires = (2 < argc) ? argv[2] : null;
var path = (3 < argc) ? argv[3] : null;
var domain = (4 < argc) ? argv[4] : null;
var secure = (5 < argc) ? argv[5] : false;
document.cookie = name + "=" + escape (value) +
((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
((path == null) ? "" : ("; path=" + path)) +
((domain == null) ? "" : ("; domain=" + domain)) +
((secure == true) ? "; secure" : "");
}
function DisplayInfo() {
var expdate = new Date();
var visit;
expdate.setTime(expdate.getTime() +  (24 * 60 * 60 * 1000 * 365)); 
if(!(visit = GetCookie("visit"))) 
visit = 0;
visit++;
SetCookie("visit", visit, expdate, "/", null, false);
var message;
if(visit == 1) 
message="         Welcome to my page!";
if(visit== 2) 
message="           I see you came back !"; 
if(visit >= 2) 
message="           I see you came back !";
  alert("\n"+"Your browser has visited this page               \n"
            +"                              "+visit+"\n"
            +"                          time(s)."+"\n"+"\n"
            +message);
}
</script>
<body>
<div id="envelope">
<table id="tab">
<tr><td><a href="index.php">Home</br>Page</a></td><td><a href="Contact_Us.php">Contact</br>Us</a></td>
<?php
if(isset($_SESSION['user'])==session_id())
{
	echo '<td id="aclick"><a href="admin\home.php">
    Admin</br> Click Here</a></td>';
}
else
{
echo '<td id="aclick"><a href="admin\login.php">
Admin</br> Click Here</a></td>';
}
?>
<?php
if(isset($_SESSION['user'])==session_id())
{
echo "<td><a href='logout.php'>Logout</a></td>";
}
?>
</tr>
</table>
<marquee direction="right" bgcolor="red" behavior="alternate" onmouseover="stop()" onmouseout="start()"><font color="yellow">ENQUIRY MANAGEMENT SYSTEM</font></marquee>
<p id="clist"><label id ="tc">Service List:</label>
	   <select name ="course" onchange="location=this.value;">
	   <option value ="">-Select here-</option>
	   <option value ="courses/ccc.php">Enquiry Management</option>
	   <option value ="courses/c++.php">Data Management</option>
	   <option value ="courses/java.php">service management</option>
	   </select>
	   </p>
<div id="note">
<div id="logo">
<img id="logon" src="e1.jpg">
</div>
<div class="button">
<form method="POST" action="#">
<input type="submit" name="eform" class="eform" value="Enquiry Form">
</br>
<input type="submit" name="check" class="check" value="Check Enquiry Status">
</form>
</div>
</div>
</div>
<div id="bottom">
<table id="foottable">
<tr><td><input type="button" id="button1" name="Button" value="<?php
$visit=fopen("visit.txt","r");
if(!$visit)
{
  echo "could not open the file";
}
else
{
	$counter=(int ) fread($visit,20);
	fclose($visit);
	$counter++;
	echo "VISITER COUNTS:$counter";
	$visit=fopen("visit.txt","w");
	fwrite($visit,$counter);
	fclose($visit);
}
?>" onClick="DisplayInfo()"/></td><td ><input type="button" id="button1" name="map" value="Our Office" onClick="window.open('https://goo.gl/maps/6ZwhujEGCZK2');"> </td>
<td align="right" ><form name="clockForm" id="clock" >
<input type="button" id="button1" name="clockButton" value="Loading..."  onClick="showDate()" />
</form></td></tr>
 
</table>
</div>
</body>
</html>