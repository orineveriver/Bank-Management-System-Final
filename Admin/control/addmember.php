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
    $password=$_REQUEST["password"];
    $c_password=$_REQUEST["c_password"];
    $category=$_REQUEST["category"];


    if(empty($fname) || empty($lname) || empty($gender) || empty($email) || empty($dob) || empty($password) || strlen($password)<6 || strlen($phone)<11 || strlen($nid)<11 || empty($c_password) || $password !== $c_password)
    {
        $error = "Error!!!";
    }

    else{

        if($category == 'manager'){
            $target_dir = "../../Manager/img/";
        }
        else{
            $target_dir = "../../Cashier/img/";
        }

        $fileName       = $_FILES['profile_picture']['name'];
        $file_tmp_name  = $_FILES['profile_picture']['tmp_name'];
        $fileSize       = $_FILES['profile_picture']['size'];
        $target_file    = $target_dir . basename($fileName);
        if (!move_uploaded_file($file_tmp_name, $target_dir . $email.".jpg")) {
            $error="Upload a picture for your profile";
        }

        if ($errors == "") {
            if($category == 'manager'){
                $sql1= "INSERT INTO managertable VALUES ('".$fname."','".$lname."','".$nid."','".$dob."','".$gender."','','".$phone."','".$email."')";
                $conn->query($sql1);
                
                $sql2= "INSERT INTO userlogin VALUES ('".$email."','".$password."','manager','active')";
                $conn->query($sql2);
            }
            else{
                $sql1= "INSERT INTO cashiertable VALUES ('".$fname."','".$lname."','".$nid."','".$dob."','".$gender."','','".$phone."','".$email."')";
                $conn->query($sql1);
                
                $sql2= "INSERT INTO userlogin VALUES ('".$email."','".$password."','cashier','active')";
                $conn->query($sql2);
            }

            header("Location: ../view/dashboard.php");
        }
    }

}

?>