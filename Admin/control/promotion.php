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
        <th>Make Promotion</th>
    </tr>';
    $sql = "SELECT * FROM cashiertable";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                echo "<tr>
                <td>".$row['firstname']." ".$row['lastname']."</a></td>
                <td>".$row['accountno']."</td>
                <td><img src='../../Customer/img/".$row['email'].".jpg' alt= width='120' height='150'></td>
                <td><a href='../control/makepromotion.php?email=".$row['email']."'>Promotion</a></td>

            </tr>";
            }
    }  
$conn -> close();
}
