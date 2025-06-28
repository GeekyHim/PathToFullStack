<?php
    include 'session.php';
    include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <style>

     div#myimg {
          background: #9E9E9E;
     }
     .product {
          background: #2d4099;
          display: flex;
          justify-content: center;
          height: 200px;
          margin: 10px;
          text-align: center;
          align-items: center;
          font-size: 25px;
     }

     p#content{
          padding: 10px;
          width: 20%;
     } 
     </style>
</head>
<body>
<div class = product>
     <div id = 'myimg'><img id = myimg src = "dumdum.png" width = '180px' /></div>
   <p id = 'content'><?php
   $id = $_GET['id'];
   $query = "select * from product where p_id = '$id'";
   $result = mysqli_query($con, $query);
   if($row = mysqli_fetch_array($result)){
     echo"Details<br>". $row['p_name']."<br>". $row['p_desc'];
   }else{
     echo"error"; 
   }
   ?>
     </p>
</div>
   <?php
   include 'footer.php';
   ?>
</body>
</html>

