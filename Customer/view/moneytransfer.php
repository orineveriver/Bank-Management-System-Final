<?php
include("../control/moneytransfer.php");
?> 

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

    <form action="" method="POST">
    <div class="regForm">
        <div>
            <label for="accno">Account No: </label>
            <input type="text" name="accno" id="accno" placeholder="Receiver Account No">
            <p style="padding: 0; margin: 0; color: red;" id="validateaccno">Account can not be empty!!!</p>
            <br>
            <br>

            <label for="accname">Account Holder Name: </label>
            <input type="text" name="accname" id="accname" value="No Account found" disabled>
            <br>
            <br>

            <label for="amount">Balance: </label>
            <input type="text" name="amount" id="amount" placeholder="Amount">
            <p style="padding: 0; margin: 0; color: red;" id="validateamount">Amount can not be empty!!!</p>

            <br>
            <input class="btn-design" name="button" id="submit" type="submit" value="Send Money">
        </div>
    </div>
    </form>

    <footer>
        <p>XYZ Bank Ltd.<br>
            <a href="mailto:info@xyzbankltd.com">info@xyzbankltd.com</a>
        </p>
    </footer>

    <script type="text/javascript">
        var balance = <?php echo $balance?>;
    </script>

    <script src="../js/moneytransfer.js"></script>
</body>

</html>