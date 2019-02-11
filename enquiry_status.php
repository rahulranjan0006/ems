<html>
<head>
<title>Enquiry Status</title>
<link rel="stylesheet" type="text/css" href="estatus.css">
<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="responsiveform1.css" />
<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
<link rel="stylesheet" media="screen and (max-width: 350px)" href="responsiveform3.css" />
</head>
<body>
<div id="envelope">
<table id="tab">
<tr><td><a href="index.php">Home</br>Page</a></td><td><a href="Contact_Us.php">Contact</br>Us</a></td>
<?php
session_start();
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
<div id="note">
<form action ="#" method = "post">
<p id="cs">
      <label id="label">Enter Your Registraion No</label>
      <input type="search" id="search" name="search" required="required" placeholder="Enter Registraion No..."/>
	  </p>
	  <button name="button" required="required" id="button">Check Status</button>
</form>
</div>
<?php
if (isset ($_POST['button']))
{
	if($con=mysqli_connect("localhost","root","","enquiry"))
	{
		$search=$_POST['search'];
		$sql="select * from enquiry_master WHERE uid='$search'";
$res_set=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res_set);
$status=$row['status'];
if($status==1)
	{ 
$res_set=mysqli_query($con,$sql);
echo "<div id='display'>";
echo "<table border=1 id='table1'>";
echo'<tr><td><a href="index.php">OK</a></td></tr>';
echo "</table>";
echo "<table border=1 id='table'>";
echo "<tr><td align='center' colspan='3' id='head'>Regno:$search</td></tr><tr id='table_header'><td>Name</td> <td>Admin Reply</td></tr>";
while($row1=mysqli_fetch_assoc($res_set))
{
  $id=$row['uid'];
  echo"<tr><td>".$row['name']."</td> <td>".$row['reply']."</td></tr>";
}
	}
	else
	{
		$message="Either Registraion No is Incorrect or In Queue For Reply: Please Re-Enter Your Registraion No.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
echo "</table>";
echo "</div>";
mysqli_close($con);
	}
}
?>
</div>
</body>
</html>
