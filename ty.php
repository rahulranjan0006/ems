<?php
session_start();
if(isset($_SESSION['home'])!=session_id())
{
	header("location:index.php");
}
echo $_REQUEST['R_ID'];
?>
<html>
<head>
<title>
Thank You
</title>
<link rel="stylesheet" href="ty.css">
</head>
<body>
</body>
</html>