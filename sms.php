<!DOCTYPE html>
<html lang="en">
<head>
    <title>SMS Page</title>
    <link rel="stylesheet" href="style3.css">
    
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
        <h1>SMS alert</h1><br>
        <form action="#" method="post">
           <br><p>Employee Phone NO</p>
            <input type="text"  name="mno" placeholder="Employee Phone Number" required></br>
            <br><p>Message to Employee</p>
            <input type="text"  name="msg" placeholder="Message to Employee" required></br>
            <br><input type="submit" name="ok" value="send">
        </form>
    </div>

</div>
<?php
if(isset($_POST['ok']))
{
    $mobileno=$_POST['mno'];
    $msg=$_POST['msg'];
    


}
?>
    </body>
</html>