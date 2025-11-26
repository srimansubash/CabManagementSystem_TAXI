<!DOCTYPE html>
<html lang="en">
<head>
    <title>admin</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="login-form">
        <h1>Login form</h1>
        <form action="#" method="post">
            <p>user name</p>
            <input type="uname" name="uname" placeholder="username" required>
            <p>password</p>
            <input type="password"  name="pass" placeholder="password" required>
            <button type="submit" value="login" name="login">Login</button>
</form>
</body>
</html>
<?php
include "connect.php"; 
if(isset($_POST["login"]))
{
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    $check = "SELECT * from admin WHERE uname = '$uname' and pass ='$pass'";
    $result = mysqli_query($conn, $check);
    if(mysqli_num_rows($result)>0)
    {
        echo "<br><h4  style='color:white;'>Login sucessfull<br>";
        header("refresh:2;url=ahome.php");
      
    }
    else
    {
        echo '<script> alert ("Invalid login");
        window.location="index.php"; </script>';
    }
}

?>