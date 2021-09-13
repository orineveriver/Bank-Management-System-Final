<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $sql = "SELECT * FROM cashiertable WHERE email = '".$_REQUEST['email']."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $sql1= "INSERT INTO managertable VALUES ('".$row['firstname']."','".$row['lastname']."','".$row['nid']."','".$row['dob']."','".$row['gender']."','','".$row['phone']."','".$row['email']."')";
                $result1 = $conn->query($sql1);
            }
    } 
    $sql3 = "UPDATE userlogin SET type = 'manager' WHERE username = '".$_REQUEST['email']."'";
    $result3 = $conn->query($sql3);

    $sql4 = "DELETE FROM cashiertable WHERE email = '".$_REQUEST['email']."'";
    $result4 = $conn->query($sql4);


    $link = "Location: ../view/promotion.php";

    header($link);
?>