<?php
session_start();
$username = $_SESSION['login_user'];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $phone=$_POST["phone"];
    $nnid=$_POST["nnid"];

    $result=  $conn->query( "UPDATE customertable set firstname = '".$firstname."', lastname = '".$lastname."', phone = '".$phone."', nnid = '".$nnid."' WHERE email = '".$username."'");
        
    if($result) {
        echo "true";
    }
    $conn -> close();
}

?>