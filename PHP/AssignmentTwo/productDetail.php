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
</head>
<body>
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
    <a href = 'logout.php'> Log Out </a>
</body>
</html>