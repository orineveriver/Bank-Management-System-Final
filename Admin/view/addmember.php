<?php
include('../control/addmember.php');
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
    <div class="regForm">
    
        <h3>Manager/Cashier Registration Form</h3>
        


        <form action=""  method="post" enctype="multipart/form-data">

            <label for="fname">Firstname: </label>
            <input type="text" name="fname" id="firstname" placeholder="Enter FirstName" >
            <span style="color: red" id="validatefirstname">FirstName is required</span>
            <br>
            <br>
            <label for="lname">Lastname: </label>
            <input type="text" name="lname" id="lastname" placeholder="Enter LastName" >
            <span style="color: red" id="validatelastname">LastName is required</span>
            <br>
            <br>

            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
            
            <br>
            <br>

            <label for="email">Email: </label>
            <input type="text" name="email" id="email" placeholder="Enter Email Address" >
           
            <br>
            <br>

            <label for="phone">Phone: </label>
            <input type="text" id="phone" name="phone" placeholder="01XXXXXXXXX" >
            <span style="color: red" id="validatephone">Phone is required</span>

            <br>
            <br>

            <label for="dob">Date of birth: </label>
            <input type="date" name="dob" id="dob">

            <br>
            <br>

            <label for="nid">NID: </label>
            <input type="text" id="nid" name="nid">
            <span style="color: red" id="validatenid">NID is required</span>

            <br>
            <br>

            <label for="password">Password: </label>
            <input type="password" name="password" id="password" placeholder="Enter Password" >
            <span style="color: red" id="validatepassword">Password is required</span>
            <br>
            <br>

            <label for="c_password">Confirm Password: </label>
            <input type="password" name="c_password" id="c_password" placeholder="Confirm Your Password" >
            <span style="color: red" id="validatecpassword">Comfirm Password is required</span>
            <br>
            <br>

            <label for="category">Type:</label>
            <select name="category" style= "width: 150px;">
                <option value="manager" selected>Manager</option>
                <option value="cashier">Cashier</option>
            </select>
            <br>
            <br>

            <label for="profile_picture">Profile Picture: </label>
            <input type="file" name="profile_picture">
            <br>
            <br>
            <input class="btn-design" name="button" type="submit" value="Submit">
            <input class="btn-design" type="reset" value="Reset">

            <br><br>
            <span style="color: red"> <?php echo $error ?></span>
        </form> 
    </div>



<footer>
        <p>XYZ Bank Ltd.<br>
            <a href="mailto:info@xyzbankltd.com">info@xyzbankltd.com</a>
        </p>
    </footer>

<script src="../js/addmember.js"></script>

</body>
</html>