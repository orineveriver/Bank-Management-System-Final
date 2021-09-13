<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "xyz_final";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $serial = $_REQUEST['id'];


    $sql = "SELECT * FROM transitiontable WHERE serial ='".$serial."'";
    $result = $conn->query($sql);
	if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $sender= $row['sender'];
            $receiver= $row['receiver'];
            $date= $row['date'];
            $amount= $row['amount'];
        }
    }
    if(strlen($sender) == 5) $sender= "Bank";
    if(strlen($receiver) == 5) $receiver= "Bank";
    $conn -> close();
?>


<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
    <title>XYZ Bank Ltd</title>

</head>

<body>
    <div>
        <div class="top-logo">
            <img src="../img/logo.jpg" alt="XYZ" width="100" height="100">
            <h1>Welcome to XYZ Bank Ltd.</h1>
        </div>
        <div class="sticky">
            <div class="topnav">
                <a href="dashboard.php">Home</a>            
                <a href="profile.php">Profile</a>
                <a href="checkbalance.php">Check Balance</a>
                <a href="moneytransfer.php">Money Transfer</a>
                <a href="transitionhistory.php">Transition History</a>    
                <a href="changepass.php">Change Password</a>
                <a href="../control/logout.php">Logout</a>
            </div>
        </div>
    </div>

    <div class="center">
            <h2>Sender    : <?php echo $sender?></h2>
            <h2>Receiver  : <?php echo $receiver?></h2>
            <h2>Amount    : <?php echo $amount?>tk</h2>
            <h2>Date      : <?php echo $date?></h2>
        </div>

    
    <footer>
        <p>XYZ Bank Ltd.<br>
            <a href="mailto:info@xyzbankltd.com">info@xyzbankltd.com</a>
        </p>
    </footer>

</body>

</html>