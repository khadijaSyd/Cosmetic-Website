<?php

@include 'config.php';

session_start();
/*if(!isset($_SESSION['user_name'])){
    header("location: login.php");
}*/

if(isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);//hash psswrd

    $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_array($result);
        if($row['user_type'] == 'admin')
        {
            $_SESSION['admin_name'] = $row['name'];
            echo"<script>
                    alert('Welcome Admin!');
                    window.location.href='adminPanel.php';
                </script>";
   
        }
        elseif($row['user_type'] == 'user')
        {
            $_SESSION['user_name'] = $row['name'];
            echo"<script>
                    alert('Welcome User!');
                    window.location.href='index.php';
                </script>";
        }
    }   
    else
    {
        echo"<script>
                    alert('Incorrect email or password!');
                    window.location.href='login.php';
                </script>";
    }
};    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/f051a17616.js" crossorigin="anonymous"></script>
</head>
<body>
            <div class="form-container">
                <form action="" method="post">
                    <h3><b>K.A.T Cosmetics</b></h3><br>
                    <h4>Please login to your account<h4>
                    <input type="email" name="email" required placeholder="Enter your email">
                    <input type="password" name="password" required placeholder="Enter your password">
                    <input type="submit" name="submit" value="Login" class="form-btn">
                    <p>don't have an account? <a href="register.php">Sign up</a></p>
                </form>
            </div> 
        
</body>
</html>