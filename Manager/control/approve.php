<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$sql = "UPDATE userlogin SET status = 'active' WHERE username = '".$_REQUEST['email']."'";

$result = $conn->query($sql);

$link = "Location: ../view/customerapprove.php?email=".$_REQUEST['email'];

header($link);
?>