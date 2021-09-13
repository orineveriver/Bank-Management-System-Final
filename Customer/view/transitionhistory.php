

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/mycss.css">
        <script src="../js/myjs.js"></script>
        <title>XYZ Bank Ltd</title>
        <style>
            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }
            tr:nth-child(even) {
            background-color: #dddddd;
            }
        </style>
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
            <h2>Transition History</h2>

            <label for="search">Search: </label>
                <input type="text" name="search" id="search" placeholder="search">  
                
            <p id="show"></p>
        </div>

    <footer>
        <p>XYZ Bank Ltd.<br>
            <a href="mailto:info@xyzbankltd.com">info@xyzbankltd.com</a>
        </p>
    </footer>

    <script src="../js/transitionhistory.js"></script>
    </body>
</html>