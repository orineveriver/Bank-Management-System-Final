<?php
include('signupvalidation.php');
?> 

<head>
    <title>SignUp</title>
</head>
<body>        

<div style="    width:800px;     margin:0 auto;    padding: 16px;    background-color: white;    border: 5px solid #050308;">
    
        <div style="text-align: center;">
            <img src="logo.jpg" alt="XYZ" width="150" height="150"><br>
            <h1>Sign Up</h1>
        </div>

    


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

        <label for="nnid">Nomenee NID: </label>
        <input type="text" id="nnid" name="nnid">
        <span style="color: red" id="validatennid">Nomenee NID is required</span>

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

        <label for="profile_picture">Profile Picture: </label>
        <input type="file" name="profile_picture">
        <br>
        <br>
        <input class="btn-design" name="button" type="submit" value="Submit">
        <input class="btn-design" type="reset" value="Reset">

        <br><br>
        <span style="color: red"> <?php echo $error ?></span>
        <br><br>

        <div style="text-align: center">
            For Login <br>            
            <a href="index.php">Click here</a> 

        </div>
    </form> 
</div>

    
<script src="signupvalidation.js"></script>
</body>
</html>