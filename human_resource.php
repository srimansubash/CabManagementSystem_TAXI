<!DOCTYPE html>
<html lang="en">
<head>
    <title>Human resource</title>
    <link rel="stylesheet" href="style4.css">
    
</head>
<body>
    
    <div class="banner">
        <div class="navbar">
            <div> <h2>Cab Management system</h2></div>
            <ul>
            <li><a href="ahome.php">Home</a><li>
            <li><a href="human_resource.php">Human resource</a><li> 
                <li><a href="travel.php">Travel history</a><li>
                <li><a href="sms.php">Sms alert</a><li>
                <li><a href="service.php">Service renewal</a><li>
                <li><a href="index.php">logout</a><li>
        </div>
    </div>


    <div class="main-content">
    <div class="animation">
        
    <div class="container">
        <div class="carAnimation">
        <div class="road"></div>
        <div class="car">
            <div class="colour"></div>
            <div class="windows"></div>
            <div class="leftWheel">
                <div class="wheel"></div>
            </div>
            <div class="rightWheel">
                <div class="wheel"></div>
            </div>
        </div>
        <div class="clouds"></div>
        </div>
        </div>

    </div>

    <div class="login-form">
        <h1>Employee details</h1><br>
        <form action="#" method="post">
            <p>Employee name</p>
            <input type="text"  name="ename" placeholder="Employee name" required></br>
            <br><p>cab no</p>
            <input type="text"  name="cabno" placeholder="Cab no" required></br>
            <br><p>Address</p>
            <input type="text" name="address" placeholder="Address" required></br>
            <br><p>Phone NO</p>
            <input type="tel" maxlength="10" name="phno" placeholder="Phone Number" required></br>
            <br><p>Email id</p>
            <input type="email"  name="email" placeholder="Email" required></br>
            <br><p>DOB</p>
            <input type="date"  name="dob" placeholder="Date-of-birth" required></br>
            <br><button type="submit" name="submit">submit</button></br>
        </form>
        <?php
include "connect.php"; 
if(isset($_POST["submit"]))
{
    $ename = $_POST["ename"];
    $cabno = $_POST["cabno"];
    $address = $_POST["address"];
    $phno = $_POST["phno"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $select = "select * from employee where cabno = '$cabno'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result)>0)
    {
        echo '<script> alert ("Data already registered");
        window.location="ahome.php"; </script>';
    }
    else
    {
    $insert = "insert into employee (ename,cabno,address,phno,email,dob) values ('$ename','$cabno','$address','$phno','$email','$dob')";
    $result = mysqli_query($conn, $insert);
    if($result)
    {
        echo "<br><h4 align='center' style='color:white;' style='font-size:35x;'>Data filled sucessfully<br>";
        // header("refresh:15;url=ahome.php");
    }
    }
}
    
?>
    </div>

</div>
    </body>
</html>
