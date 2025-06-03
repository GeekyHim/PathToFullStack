<?php
    session_start();
    if(isset($_SESSION['mySession'])){
    }else{
        header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <style>
     
     a#logout {
            justify-content: center;
            display: flex;
            background: green;
            font-size: 18px;
            margin: 5px;
            padding: 5px;
     }
     .product {
          background: red;
          display: flex;
          justify-content: center;
          height: 200px;
          margin: 5px;
     }
     </style>
</head>
<body>
     <div class = product>
   <?php
   $id = $_GET['id'];


   if($id=='p1'){
        echo"PRODUCT 1";
   }else if($id=='p2'){
        echo"PRODUCT 2";
   }else if($id=='p3'){
        echo"PRODUCT 3";
   }else if($id=='p4'){
        echo"PRODUCT 4";
   }else if($id=='p5'){
        echo"PRODUCT 5";
   }else{
        echo"Error";
   }
   ?>
   </div>
   
    <a href = 'logout.php' id = logout> Log Out </a>
</body>
</html>