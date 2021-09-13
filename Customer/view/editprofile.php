<?php
include('../control/editprofile.php');


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "xyz_final";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$sql = "SELECT * FROM customertable WHERE email = '".$username."'";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $name= $row['firstname']." ".$row['lastname'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $dob = $row['dob'];
        $phone = $row['phone'];
        $gender = $row['gender'];
        $accno = $row['accountno'];
        $nid = $row['nid'];
        $nnid = $row['nnid'];
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
        <h2>Edit Profile</h2>
        <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);  max-width: 300px;  margin: auto;  text-align: center;  font-family: arial;">
        <img src="../img/<?php echo $email?>.jpg" alt="<?php echo $name?>" style="width:30%">
                <div>
                    <div style="text-align: left; margin-left: 5px; color: blue">
                        <p>Firstname: <input style=" border: 1px solid black; width:255px;" type="text" id="username" name="username" value="<?php echo $firstname; ?>"> </p>
                        <span style="color: red" id="validateusername"></span>
                        <p>Lastame: <input style=" border: 1px solid black;width:255px;" type="text" id="name" name="name" value="<?php echo $lastname; ?>"> </p>
                        <span style="color: red" id="validatename"></span>
                        <p>Phone: <input style="border: 1px solid black; width:255px;" type="text" id="email" name="email" value="<?php echo $phone; ?>"> </p>
                        <span style="color: red" id="validateemail"></span>
                        <p>Nomenee NID: <input style="border: 1px solid black; width:255px;" type="text" id="phone" name= "phone" value="<?php echo $nnid; ?>"> </p>
                        <span style="color: red" id="validatephone"></span>
                        
                    </div>
                
      
            <div style="margin: 24px 0;">
                
        </div>
            
            <p style="border: 2px solid black; background-color: black; padding: 0 5px 0 5px; width: 150px; margin: auto;">
            <input class="btn-design" id="updatesubmit" name="button" type="submit" value="Save" style="margin: 0; background-color:black">
            </p>
            

    </div>
    </div>

    <footer>
        <p>XYZ Bank Ltd.<br>
            <a href="mailto:info@xyzbankltd.com">info@xyzbankltd.com</a>
        </p>
    </footer>
    
<script src="../js/editprofile.js"></script>
        
</body>
</html>