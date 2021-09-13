
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/mycss.css">
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

        <div class="center">
            <div>
                <h2>Manager List</h2>
                <form  style="text-align:center" action="" method="POST">
                <label for="search">Search: </label>
                <input type="text" name="search" id="search" placeholder="search">  
                
                </form>

                <div id="show"></div>
                
            </div>
        </div>

        <footer>
        <p>XYZ Bank Ltd.<br>
            <a href="mailto:info@xyzbankltd.com">info@xyzbankltd.com</a>
        </p>
    </footer>

    <script src="../js/managerlist.js"></script>

    </body>
</html>