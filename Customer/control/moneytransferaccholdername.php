<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $accno=$_POST["accno"];
    $name= "No Account found";

    $sql = "SELECT * FROM customertable WHERE accountno = '".$accno."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
                $name= $row['firstname']." ".$row['lastname'];
                }
        }
    echo $name; 
$conn -> close();
}

?>
