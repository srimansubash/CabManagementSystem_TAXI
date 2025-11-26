<!DOCTYPE html>
<html lang="en">
<head>
    <title>Serviceview</title>
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
        <h1>Serviceview</h1><br>
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
    $select = "select * from service where cabno = '$cabno'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result)>0)
    {?>
    
    <table>
            
            <tr>
                
                <th>Cab no</th>
                <th>Cab condition</th>
                <th>Date of renewal</th>
                
            </tr>
            <?php 
    }
            while($row = mysqli_fetch_object($result))
            {
            ?>
            
            <tr>
                <td><?php echo $row->cabno; ?></td>
                <td><?php echo $row->cabcondition; ?></td>
                <td><?php echo $row->daterenewal; ?></td>
              
            </tr>
       
       
                
               
        <?php
         
         
    }
    
    
}  
?>
</table>
<?php if(isset($_POST["submit"])) 
{ 
    echo "<br><label style='color:powderblue;'>"; 
    header("refresh:15;url=ahome.php");
}  
?> </label>
    </div>
    </div>
</body>
</html>