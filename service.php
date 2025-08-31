<!DOCTYPE html>
<html lang="en">
<head>
    <title>Service renewal</title>
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
                <li><a href="search.php">Search</a><li>
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
        <h1>Service renewal</h1><br>
        <form action="#" method="post">
           <br><p>cab no</p>
            <input type="text"  name="cabno" placeholder="cab no" required></br>
            <br><p>cab condition</p>
            <input type="text"  name="cabcondition" placeholder="cab condition" required></br>
            <br><p>Date of renewal</p>
            <input type="date"  name="daterenewal" placeholder="Date of Renewal" required></br>
            <br><button type="submit" value="update" name="update">update</button></br>
        </form>
        <?php
include "connect.php"; 
if(isset($_POST["update"]))
{

    $cabno = $_POST["cabno"];
    $cabcondition = $_POST["cabcondition"];
    $daterenewal = $_POST["daterenewal"];
    $insert = "insert into service (cabno,cabcondition,daterenewal) values ('$cabno','$cabcondition','$daterenewal')";
    $result = mysqli_query($conn, $insert);
    if($result)
    {
        echo "<br><h4 style='color:white;' style='font-size:35px;'>Cab data updated successfully<br>";
        header("refresh:15;url=ahome.php");
    }
    }    
?>
    </div>

</div>
    </body>
</html>
