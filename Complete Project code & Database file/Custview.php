<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Review site</title>
    <link rel="stylesheet" href="Custview.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
        <div class="design"> <h2>Blue taxi</h2></div>
            <ul>
                <li><a href="admin.php">Admin</a><li>
                <li><a href="register.php">Registration</a><li>
                <!-- <li><a href="about.php">about us</a><li> -->
                <li><a href="Customer-review.php">Customers Review</a><li>  
                <li><a href="index.php">Move to home page</a><li>
        </div>
    </div>
    <div class="main-content">
    <div class="context">
      

       <h2 style="color:#BDD4E7;">Rider's Thoughts</h2>
       
      <?php
      include "connect.php"; 
       $select = "select * from customer";
       $result = mysqli_query($conn, $select);
       if(mysqli_num_rows($result)>0)
       {?>
        <table>
            
            <tr>
                <th>Customer Name</th>
                <th>Customer Reviews</th>
        <?php while($row = mysqli_fetch_object($result))
       {
         ?>
         <tr>
         <td><?php echo $row->cname; ?></td>
         <td><?php echo $row->customer; ?></td>
         </tr>
                
               
            </tr>
            <?php 
       }
       }
    ?>
    </table> 
</body>
</html>
</div>  

</div>