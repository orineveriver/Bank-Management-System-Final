<?php 
session_start();
$username = $_SESSION['login_user'];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";

if($_SERVER['REQUEST_METHOD'] == "POST") {

        $amount = $_POST["amount"]; 
        $receiver = $_POST["accno"];
        $datetime = date("Y-m-d"); 
        $sender="";
        $val="";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        $sql = "select accountno from cashiertable where email ='".$username."'";
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

        
        
        if(!$amount=="" && !$receiver=="" && !$val=="" && $amount>0) {
        
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        $sql1 = "INSERT INTO transitiontable VALUES ('','".$sender."','".$receiver."',".$amount.",'".$datetime."')";
        $sql2 = "UPDATE userbalance SET balance = balance + ".$amount." WHERE accountno = '".$receiver."'";
        $conn->query($sql1);
        $conn->query($sql2);
        $conn -> close();
        header("Location: ../view/dashboard.php");
        }
}
?>