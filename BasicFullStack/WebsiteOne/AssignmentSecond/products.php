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
    <style>
        .productList
        {
            display: flex;
            background: gray;
            justify-content: center;
        }
        .product
        {
            height: 100px;
            margin: 10px;
            background: red;
            padding: 10px;
        }
        a#logout {
            justify-content: center;
            display: flex;
            background: green;
            font-size: 18px;
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="productList">
            <?php
                for($i = 1; $i<6 ;$i++){
                ?>
                <div class = product> 
                    <a href='productDetail.php?id=p<?php echo$i; ?>'> PRODUCT <?php echo $i; ?> </a>
                </div>
            <?php } ?>
        
    </div>
    <a href = 'logout.php' id = logout> Log Out </a>
</body>
</html>