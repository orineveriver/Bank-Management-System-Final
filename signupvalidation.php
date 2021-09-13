<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$error= "";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $gender=$_REQUEST["gender"];
    $email=$_REQUEST["email"];
    $phone=$_REQUEST["phone"];
    $dob=$_REQUEST["dob"];
    $nid=$_REQUEST["nid"];
    $nnid=$_REQUEST["nnid"];
    $password=$_REQUEST["password"];
    $c_password=$_REQUEST["c_password"];


    if(empty($fname) || empty($lname) || empty($nid) || empty($nnid) || empty($gender) || empty($email) || empty($dob) || empty($password) || strlen($password)<6 || strlen($phone)<11 || strlen($nid)<11 || strlen($nnid)<11 || empty($c_password) || $password !== $c_password)
    {
        $error = "Error!!!";
    }

    else{

            $target_dir = "Customer/img/";

        $fileName       = $_FILES['profile_picture']['name'];
        $file_tmp_name  = $_FILES['profile_picture']['tmp_name'];
        $fileSize       = $_FILES['profile_picture']['size'];
        $target_file    = $target_dir . basename($fileName);
        if (!move_uploaded_file($file_tmp_name, $target_dir . $email.".jpg")) {
            $error="Upload a picture for your profile";
        }

        if ($errors == "") {
                $sql1= "INSERT INTO customertable VALUES ('".$fname."','".$lname."','".$nid."','".$dob."','".$gender."','".$email."','".$phone."','".$nnid."','')";
                $conn->query($sql1);
                
                $sql2= "INSERT INTO userlogin VALUES ('".$email."','".$password."','customer','inactive')";
                $conn->query($sql2);

                $sql3= "INSERT INTO userbalance VALUES ('','0')";
                $conn->query($sql3);

            header("Location: index.php");
        }
    }

}

?>