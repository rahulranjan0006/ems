<?php
session_start();
if(isset($_SESSION['eform'])!=session_id())
{
	
	header("location:index.php");
}
if (isset ($_POST['submit']))
{
	
	if($con=mysqli_connect("localhost","root","","enquiry"))
	{

		$name =$_POST['name'];
		$fname =$_POST['fname'];
		$mob_no =$_POST['mob_no'];
		$email =$_POST['email'];
		$state =$_POST['state'];
		$course =$_POST['course'];
		$address =$_POST['address'];
		$ebox=$_POST['ebox'];
		$dob =$_POST['dob'];
		$gender =$_POST['gender'];
		$category =$_POST['category'];
		//echo date_default_timezone_get();
		date_default_timezone_set('asia/kolkata');
		$date=date('Y-m-d H:i:s');
		$q1="select * from enquiry_master";
		$res1=mysqli_query($con,$q1);
		$total_records=mysqli_num_rows($res1);
		$new_id=$total_records+1;
		$final_id=sprintf("%04d",$new_id);
		$uid="P".date('my').$final_id;
		$sql = "insert into enquiry_master(name,fname,mob_no,email,gender,category,state,course,address,ebox,dob,date_time,uid) values('{$name}','{$fname}',{$mob_no}
	,'{$email}','{$gender}','{$category}','{$state}','{$course}','{$address}','{$ebox}','{$dob}','{$date}','{$uid}')";
		
		if(mysqli_query($con,$sql))
		{
		echo "<script type='text/javascript'>alert('Your Reg Id is:$uid');window.location.href='enquiry_form.php';</script>";
		}
		
	}
		mysqli_close($con);
		

}
?>

<html>
 <head>
 <title>Enquiry Form</title>
 <link rel="stylesheet" type="text/css" href="responsiveform.css">
 <link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="responsiveform1.css" />
	<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
	<link rel="stylesheet" media="screen and (max-width: 350px)" href="responsiveform3.css" />
 </head>
 <body>
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
<marquee direction="right" bgcolor="red" behavior="alternate" onmouseover="stop()" onmouseout="start()"><font color="yellow"> ENQUIRY MANAGEMENT SYSTEM</font></marquee>
        <div id="envelope">
	
<header>
    <h2>Enquiry Form</h2>
    <p>Fill This Form For Enquiry </p>
</header>
<hr>
       <form action ="#" method = "post" autocomplete="off">
	   <label id ="lab">Your Name:</label>
	   <input type = "text" required= "required" id="yn" maxlength="50" size = "15" name ="name" dir ="ltr" placeholder = "write your name..."/>
	    
	   <label id ="dob">Date of Birth:</label>
	   <input type = "date"   min="1966-01-01" max="2010-01-01" name = "dob" value = "dob"/>
	   <label id ="mn">Mobile Number:</label>
	   </br>
	   <input type ="text" id="sym" size = "1" value = "+91" readonly = "readonly" disabled = "disabled"/>
	   <input type = "text" required= "required" id="mobile" minlength="10" maxlength="10" size = "10" name = "mob_no" placeholder = "enter mobile no..."/>
	   </br>
	   <label id ="ye">Your Email:</label>
	   <input type = "text"  id="em" maxlength="50" name = "email" placeholder = "type email..."/>
	   
	   
	   <label id ="ys">Your State:</label>
	   <select name = "state" required= "required">
	   <option value ="">----Select State----</option>
	   <option value ="Andhra Pradesh">Andhra Pradesh</option>
	   <option value ="ArunachalPradesh">ArunachalPradesh</option>
	   <option value ="Assam">Assam</option>
	   <option value ="Bihar">Bihar</option>
	   <option value ="Chhattisgarh">Chhattisgarh</option>
	   <option value ="Goa">Goa</option>
	   <option value ="Gujarat">Gujarat</option>
	   <option value ="Haryana">Haryana</option>
	   <option value ="Himachal Pradesh">Himachal Pradesh</option>
	   <option value ="Jammu and Kashmir">Jammu and Kashmir</option>
	   <option value ="Jharkhand">Jharkhand</option>
	   <option value ="Karnataka">Karnataka</option>
	   <option value ="Kerala">Kerala</option>
	   <option value ="Madhya Pradesh">Madhya Pradesh</option>
	   <option value ="Maharashtra">Maharashtra</option>
	   <option value ="Manipur">Manipur</option>
	   <option value ="Meghalaya">Meghalaya</option>	   
	   <option value ="Mizoram">Mizoram</option>
	   <option value ="Nagaland">Nagaland</option>	   
	   <option value ="Odisha">Odisha</option>	   
	   <option value ="Punjab">Punjab</option>	   
	   <option value ="Rajasthan">Rajasthan</option>	   
	   <option value ="Sikkim">Sikkim</option>	   
	   <option value ="Tamil Nadu">Tamil Nadu</option>	   
	   <option value ="Telangana">Telangana</option> 	   
	   <option value ="Tripura">Tripura</option>	   
	   <option value ="Uttarakhand">Uttarakhand</option>	   
	   <option value ="Uttar Pradesh">Uttar Pradesh</option>	   
	   <option value ="West Bengal">West Bengal</option>	   
	   <option value ="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>	   
	   <option value ="Chandigarh">Chandigarh</option>	   
	   <option value ="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>	   
	   <option value ="Daman and Diu">Daman and Diu</option>	   
	   <option value ="Delhi">Delhi</option>	   
	   <option value ="Lakshadweep">Lakshadweep</option>	   
	   <option value ="Puducherry">Puducherry</option>
       </select> 
	   </br>
       <label id ="tc">Service:</label>
	   <select name ="course" required= "required">
	   <option value ="">----select course----</option>
	   <option value ="Digital Marketing">Digital Marketing</option>
	   <option value ="Real State">Real State</option>
	   <option value ="Admission">Admission</option>
	   <option value ="Advertisement">Advertisement</option>
	   <option value ="Job Service">Job Service</option>
	   <option value ="Meeting">Meeting</option>
	   <option value ="Web Service">Web Service</option>
	   <option value ="Apps">Apps</option>
	   <option value ="Selling">Selling</option>
	   </select>
	   </br>
	   <label id ="ad">Address:</label>
	   <textarea required= "required" name ="address" maxlength="255" placeholder = "write your adress"></textarea>
	   <label id ="eb">Enquiry Box:</label>
	   <textarea required= "required" name ="ebox" maxlength="200" placeholder = "Write about what you want to query?"></textarea>
	   
	   </br>
	   <input type = "submit" required= "required" name = "submit" value ="submit"/>
	   <input type = "reset" name = "reset" value ="reset"/>
	   </form>
	   </div>
	   <div id="bottom">
</div>
 </body>
</html>