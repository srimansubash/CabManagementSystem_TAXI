<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Review</title>
    <link rel="stylesheet" href="customer.css">
    
</head>
<body>
    <div class="banner">
        <div class="navbar">
        <div class="design"> <h2>Blue taxi</h2></div>
            <ul>
                <li><a href="admin.php">Admin</a><li>
                <li><a href="register.php">Registration</a><li>
                <!-- <li><a href="about.php">about us</a><li> -->
                <li><a href="Custview.php">Review by Customers</a><li>  
                <li><a href="index.php">Move to home page</a><li>
        </div>
    </div>
    <div class="main-content">
        <div class="context">
        <div class="login-form">
    <form action="#" method="post">
            <br><p>Customer name</p>
            <input type="text"  name="cname" placeholder="Customer name" required></br>
            <br><p>Customer comments</p>
            <input type="text"  name="customer" placeholder="Type your comments" required></br>
            <br><button type="submit" name="submit">submit</button></br>
        </form>

        
        <?php
include "connect.php"; 
if(isset($_POST["submit"]))
{
    $cname = $_POST["cname"];
    $customer = $_POST["customer"];
    $insert = "insert into customer (cname,customer) values ('$cname','$customer')";
    $result = mysqli_query($conn, $insert);
    if($result)
    {
        echo "<br><h4 style='color:white;' style='font-size:35px;'> Customer Review Added successfully<br>";
      
    }
    }    
?>

      </div>
</div>
</div>
        
</body>
</html>