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
    <title>Product Page</title>
</head>
<body>
    <div class="productList">
        <a href='productDetail.php?id=p1' name = 'p1'> PRODUCT 1 </a>
        <a href='productDetail.php?id=p2' name = 'p2'> PRODUCT 2 </a>
        <a href='productDetail.php?id=p3' name = 'p3'> PRODUCT 3 </a>
        <a href='productDetail.php?id=p4' name = 'p4'> PRODUCT 4 </a>
        <a href='productDetail.php?id=p5' name = 'p5'> PRODUCT 5 </a>
    </div>
    <!-- <div class="product" name = 'product1'>  </div>
    <div class="product" name = 'product2'></div>
    <div class="product" name = 'product3'></div>
    <div class="product" name = 'product4'></div>
    <div class="product" name = 'product5'></div>
    <div class="product" name = 'product6'></div>
    <div class="product" name = 'product7'></div> -->
    <a href = 'logout.php'> Log Out </a>
</body>
</html>