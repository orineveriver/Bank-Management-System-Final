<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "xyz_final";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $usernameerr = $passworderr ="";
    $loginfail = "";

    if($_SERVER['REQUEST_METHOD'] == "POST" && $_REQUEST['button'] == "Login") {

        if(empty($_POST['username'])) {                    
            $usernameerr = "Please Fill up the Username!";
        }

        else if(empty($_POST['password'])) {                    
            $passworderr = "Please Fill up the password!";
        }

        else{
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            $sql = "SELECT * FROM userlogin WHERE username = '".$username."'";
            $result = $conn->query($sql);
		    if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    if($row['password']==$password){
                        if($row['status']=="active"){
                            session_start();
                            $_SESSION['login_user'] = $row["username"];
                            if($row['type']=="customer"){
                                header("Location: customer/view/dashboard.php");
                            }
                            else if($row['type']=="manager"){
                                header("Location: manager/view/dashboard.php");
                            }
                            else if($row['type']=="cashier"){
                                header("Location: cashier/view/dashboard.php");
                            }
                            else{
                                header("Location: admin/view/dashboard.php");
                            }
                        }
                        else {
                            $loginfail = "Account is not Activated!!!";
                        }

                    }
                    else{
                        $loginfail = "Wrong Password. Try Again!!!";
                    }
                }
		    }
            else {
                $loginfail = "Account not found!!!";
            }
            $conn -> close();
        }
    }
?>