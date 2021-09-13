<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($_REQUEST['status']=="active"){
    $sql = "UPDATE userlogin SET status = 'deactive' WHERE username = '".$_REQUEST['email']."'";
    $result = $conn->query($sql);

}
else if($_REQUEST['status']=="deactive")
{
    $sql = "UPDATE userlogin SET status = 'active' WHERE username = '".$_REQUEST['email']."'";
    $result = $conn->query($sql);

}
$link = "Location: ../view/customerprofile.php?email=".$_REQUEST['email'];
    header($link)
?>