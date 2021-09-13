<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "xyz_final";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    session_start();
    $username = $_SESSION['login_user'];

    $balance = 0;

    $sql = "SELECT * FROM userbalance WHERE accountno = (SELECT accountno FROM customertable WHERE email = '".$username."')";
    $result = $conn->query($sql);
	if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $balance= $row['balance'];
        }
    }
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
            <h2>Your Current Balance: <?php echo $balance?>tk</h2>
        </div>

    
    <footer>
        <p>XYZ Bank Ltd.<br>
            <a href="mailto:info@xyzbankltd.com">info@xyzbankltd.com</a>
        </p>
    </footer>

</body>

</html>