<?php
    include 'session.php';
    include 'connection.php';
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
            display: flex;
            justify-content: center;
            height: 100px;
            margin: 10px;
            background: red;
            padding: 10px;
            width: 100px;
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

<?php
    $productQuery = "Select * from product";
    
    $result_p = mysqli_query($con,$productQuery);
?>
    <div class="productList">
            <?php
                while($row = mysqli_fetch_array($result_p)){
                ?>
                <div class = product>
                    <a href='productDetail.php?id=<?php echo$row['p_id']; ?>'> <?php echo $row['p_name']; ?> </a>
                </div>

            <?php } ?>
        
    </div>
</body>
</html>

<?php
include 'footer.php';
?>