<!DOCTYPE html>
<html lang="en">
<head>
    <title>Travel</title>
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
        <h1>Travel History</h1><br>
        <form action="#" method="post">
            <br><p>Customer name</p>
            <input type="text"  name="cname" placeholder="Customer name" required></br>
            <br><p>Employee name</p>
            <input type="text"  name="ename" placeholder="Employee name" required></br>
            <br><p>Cab no</p>
            <input type="text"  name="cabno" placeholder="Cab no" required></br>
            <br><p>Pick-up Location</p>
            <input type="text"  name="plocation" placeholder="Pick-up Location" required></br>
            <br><p>Drop Location</p>
            <input type="text"  name="dlocation" placeholder="Drop Location" required></br>
            <br><p>Date of Travel</p>
            <input type="date"  name="datetravel" placeholder="Date of Travel" required></br>
            <br><p>Kilometers</p>
            <input type="number" name="kms" placeholder="Kiolometers" required></br>
            <br><p>Charges </p>
            <input type="text"  name="charges" placeholder="Charges for travel" required></br>
            <br><button type="submit" name="submit">submit</button></br>
        </form>
        <?php
include "connect.php"; 
if(isset($_POST["submit"]))
{
    $cname = $_POST["cname"];
    $ename = $_POST["ename"];
    $cabno = $_POST["cabno"];
    $plocation = $_POST["plocation"];
    $dlocation = $_POST["dlocation"];
    $datetravel = $_POST["datetravel"];
    $kms = $_POST["kms"];
    $charges = $_POST["charges"];
    $insert = "insert into travel (cname,ename,cabno,plocation,dlocation,datetravel,kms,charges) values ('$cname','$ename','$cabno','$plocation','$dlocation','$datetravel','$kms','$charges')";
    $result = mysqli_query($conn, $insert);
    if($result)
    {
        echo "<br><h4 style='color:white;' style='font-size:35px;'>Travel History added successfully<br>";
        // header("refresh:15;url=ahome.php");
    }
    }    
?>
    </div>

</div>
    </body>
</html>