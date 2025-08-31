<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
    <link rel="stylesheet" href="style3.css">
    
</head>
<body>
    
    <div class="banner">
        <div class="navbar">
            <div> <h2>Cab Management system</h2></div>
            <ul>
            <li><a href="ahome.php">Home</a><li><li><a href="human_resource.php">Human resource</a><li>
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
        <h1>Search Travel detials</h1><br>
        <form action="#" method="post">
            <p>cab no</p>
            <input type="text"  name="cabno" placeholder="cab no" required>
            <button type="submit"  name="submit">submit</button>
        </form>
        
<?php
error_reporting(0);
include "connect.php"; 
if(isset($_POST["submit"]))
{
    $cabno = $_POST["cabno"];
    $select = "select * from travel where cabno = '$cabno'";
    $result = mysqli_query($conn, $select);
    $sum=0; 
    if(mysqli_num_rows($result)>0)
    {?>
    
    <table>
            
            <tr>
                
                <th>customer name</th>
                <th>employee name</th>
                <th>cabno</th>
                <th>pick-up location</th>
                <th>drop location</th>
                <th>date of travel</th>
                <th>Kilometers</th>
                <th>Charges</th>
            </tr>
            <?php 
    }
            while($row = mysqli_fetch_object($result))
            {
            ?>
            
            <tr>
                <td><?php echo $row->cname; ?></td>
                <td><?php echo $row->ename; ?></td>
                <td><?php echo $row->cabno; ?></td>
                <td><?php echo $row->plocation; ?></td>
                <td><?php echo $row->dlocation; ?></td>
                <td><?php echo $row->datetravel; ?></td>
                <td><?php echo $row->kms; ?></td>
                <td><?php echo $row->charges; ?></td>
            </tr>
       
       
                
               
        <?php
         $sum+=$row->kms;
         
    }
    
    
}  
?>
</table>
<?php if(isset($_POST["submit"])) 
{ 
    echo "<br><label style='color:powderblue;'> Total kilometers Run by the cab is: ".$sum; 
    // header("refresh:25;url=ahome.php");
}  
?> </label>
    </div>
    </div>
</body>
</html>