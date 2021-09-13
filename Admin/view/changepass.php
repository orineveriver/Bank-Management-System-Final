<?php
include("../control/changepass.php");
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
                <a href="customerlist.php">Customer List</a>  
                <a href="cashierlist.php">Cashier List</a>   
                <a href="managerlist.php">Manager List</a>  
                <a href="promotion.php">Promote from Cashier to Manager</a>  
                <a href="addmember.php">Add Member</a>    
                <a href="changepass.php">Change Password</a>
                <a href="../control/logout.php">Logout</a>
            </div>
        </div>
    </div>

    <form action="" method="POST">
    <div class="regForm">
        <div>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" placeholder="Enter Password">
            <p style="padding: 0; margin: 0; color: red;" id="validatepassword">Password can not be empty!!!</p>
            <br>
            <br>

            <label for="c_password">Confirm Password: </label>
            <input type="password" name="c_password" id="c-password" placeholder="Confirm Your Password">
            <p style="padding: 0; margin: 0; color: red;" id="validatecpassword">Confirm Password can not be empty!!!
            </p>

            <br>
            <input class="btn-design" name="button" id="submit" type="submit" value="Change Password">
        </div>
    </div>
    </form>

    <footer>
        <p>XYZ Bank Ltd.<br>
            <a href="mailto:info@xyzbankltd.com">info@xyzbankltd.com</a>
        </p>
    </footer>

    <script src="../js/changepass.js"></script>
</body>

</html>