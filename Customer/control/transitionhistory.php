<?php 
session_start();
$username = $_SESSION['login_user'];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$useracc = "";

$sql = "select accountno from customertable where email ='".$username."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
            $useracc= $row['accountno'];
            }
}

if($_SERVER["REQUEST_METHOD"] == "POST") { 

    $search=$_POST["search"];

    $sql = "SELECT * FROM transitiontable WHERE sender = '".$useracc."' AND date like '".$search."%' or receiver = '".$useracc."' AND date like '".$search."%'";
    $result = $conn->query($sql);

	if($result->num_rows > 0) {
        echo '<table class="center">
        <tr>
        <th>Date</th>
        <th>Amount</th>
        <th>Status</th>
        </tr>';
        while($row = $result->fetch_assoc()){
            echo "<tr>                       
            <td> <a href='../view/showtransition.php?id=".$row['serial']."'</a>" . $row['date'] . "</td>
            <td>" . $row['amount'] . "</td>";
            if($row['sender'] == $useracc){
                echo "<td>Debit</td>";
            }
            else echo "<td>Credit</td>";
            echo "</tr>";
        }
        echo "</table>";
	}
    $conn -> close();	
}

?>