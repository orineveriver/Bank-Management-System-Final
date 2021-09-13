<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($_REQUEST['status']=="active")
    $sql = "UPDATE userlogin SET status = 'deactive' WHERE username = '".$_REQUEST['email']."'";
else $sql = "UPDATE userlogin SET status = 'active' WHERE username = '".$_REQUEST['email']."'";
$result = $conn->query($sql);

$link = "Location: ../view/managerprofile.php?email=".$_REQUEST['email'];

header($link);
?>