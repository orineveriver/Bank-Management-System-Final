<?php 
session_start();
$username = $_SESSION['login_user'];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($_SERVER['REQUEST_METHOD'] == "POST" && $_REQUEST['button'] == "Change Password") {

	$password = $_POST["password"];    
	$c_password = $_POST["c_password"];

	if(strlen($password)>5 && $password==$c_password) {

        
        $sql = "UPDATE userlogin SET Password='".$password."' WHERE username = '".$username."'";
        $conn->query($sql);


        header("Location: ../view/dashboard.php");
	}	
}
?>