<?php 
session_start();
$username = $_SESSION['login_user'];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";

$balance= "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$sql = "SELECT * FROM userbalance WHERE accountno = (select accountno from customertable where email ='".$username."')";
$result = $conn->query($sql);
        if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                $balance= $row['balance'];
                }
        }
$conn -> close();

if($_SERVER['REQUEST_METHOD'] == "POST") {

        $amount = $_POST["amount"]; 
        $receiver = $_POST["accno"];
        $datetime = date("Y-m-d"); 
        $sender="";
        $val="";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        $sql = "select accountno from customertable where email ='".$username."'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                $sender= $row['accountno'];
                }
        }
        $conn -> close();  

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        $sql = "select * from customertable where accountno ='".$receiver."'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                $val= $row['firstname'];
                }
        }
        $conn -> close(); 

        
        
        if(!$amount=="" && !$receiver=="" && !$val=="" && $receiver!=$sender && $amount>0) {
        
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        $sql1 = "INSERT INTO transitiontable VALUES ('','".$sender."','".$receiver."',".$amount.",'".$datetime."')";
        $sql2 = "UPDATE userbalance SET balance = balance - ".$amount." WHERE accountno = '".$sender."'";
        $sql3 = "UPDATE userbalance SET balance = balance + ".$amount." WHERE accountno = '".$receiver."'";
        $conn->query($sql1);
        $conn->query($sql2);
        $conn->query($sql3);
        $conn -> close();
        header("Location: ../view/checkbalance.php");
        }
}
?>