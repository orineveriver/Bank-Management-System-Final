<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if($_SERVER['REQUEST_METHOD'] == "POST")
{

    echo '<table class="center">
    <tr>
        <th>Name</th>
        <th>Account No</th>
        <th>Photo</th>
        <th>Approve</th>
    </tr>';
    $sql = "SELECT * FROM customertable,userlogin WHERE customertable.email = userlogin.username AND userlogin.status = 'inactive'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                echo "<tr>
                <td>".$row['firstname']." ".$row['lastname']."</a></td>
                <td>".$row['accountno']."</td>
                <td><img src='../../Customer/img/".$row['email'].".jpg' alt= width='120' height='150'></td>
                <td><a href='../control/approve.php?email=".$row['email']."'>Approve</a></td>

            </tr>";
            }
    }  
$conn -> close();
}
