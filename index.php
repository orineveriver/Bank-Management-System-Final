<?php
include("indexvalidate.php");
?> 

<head>
    <title>Login</title>
</head>
<body>
    <form  action="" method="POST">
        <div style="text-align: center;">
            <img src="logo.jpg" alt="XYZ" width="150" height="150"><br>
            <h1>Login</h1>
        </div>

    <fieldset>
        <div style="text-align: center;">
            <label for="username">Username: </label>
            <input type="text" name="username" placeholder="Enter Enter" >
            <br>
            <?php echo $usernameerr; ?>
            <br>

            <label for="name">Password: </label>
            <input type="password" name="password" placeholder="Enter Password" >
            <br>
            <?php echo $passworderr; ?>
            <br>

            <input type="submit" value="Login" name="button"> <br>
            For Signup as a Customer <br>
            
            <a href="signup.php">Click here</a> 
            <br>
            <?php echo $loginfail; ?>
        </div> 
    </fieldset>
    </form>

</body>
</html>