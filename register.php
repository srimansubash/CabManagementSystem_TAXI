<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="login-form">
        <h1>Registration </h1>
        <form action="#" method="post">
            <p>user name</p>
            <input type="uname" id="uname" name="uname" placeholder="username" required>
            <p>password</p>
            <input type="password" id="pass" name="pass" placeholder="password" required>
            <button type="submit" value="register" name="register">Register</button>
        
    </form>
</body>
<?php
session_start();
include "connect.php"; 
if(isset($_POST["register"]))
{
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    $check = "SELECT * from admin WHERE uname = '$uname'";
    $result = mysqli_query($conn, $check);
    if(mysqli_num_rows($result)>0)
    {
        echo '<script> alert ("username already registered");
        window.location="index.php"; </script>';
    }
    else
    {
        $sql = "INSERT INTO admin(uname, pass) VALUES('$uname','$pass')";
        $insert = mysqli_query($conn, $sql);
        if($insert)
        {
            echo "<br><h4 align='center' style='color:white;'>Registration sucessfull<br>";
            header("refresh:5;url=index.php");
        }
    }
}
    session_abort();
?>