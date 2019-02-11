<?php
session_start();
session_destroy();
$msgad="You Successfully Loged Out";
echo "<script type='text/javascript'>alert('$msgad'); window.location.href='index.php';</script>";
?>