<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $search=$_POST["search"];

    echo '<table class="center">
    <tr>
        <th>Name</th>
        <th>Account No</th>
        <th>Photo</th>
    </tr>';
    $sql = "SELECT * FROM managertable WHERE accountno like '".$search."%' OR firstname like '".$search."%'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                echo "<tr>
                <td><a href='../view/managerprofile.php?email=".$row['email']."'>".$row['firstname']." ".$row['lastname']."</a></td>
                <td>".$row['accountno']."</td>
                <td><img src='../../Manager/img/".$row['email'].".jpg' alt= width='120' height='150'></td>
            </tr>";
            }
    }  
$conn -> close();
}
