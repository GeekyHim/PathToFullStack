<?php
include 'session.php';
include 'connection.php';
?>


<div class="add">
<form action = " <?php echo$_SERVER['PHP_SELF'] ?>" method = 'post' >
    <input type="text" name = 'p_name' placeholder='Product Name'>
    <input type ='text' name = 'p_desc' placeholder='Product Description' >
    <select name="cat" id="cat">
    <?php 
        $query = "Select * from category";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result)){
    ?>
        <option name = 'p_cat_id' value="<?php  echo$row['cat_id'] ?>"><?php echo$row['cat_name'] ?></option>
    <?php } ?>
    </select>
    <input type = 'submit' name = 'ok' value = 'Add'>
</form>
</div>



<div class="fb">
<?php
    if(isset($_POST['ok'])){
        $prod_name = $_POST['p_name'];
        $prod_desc = $_POST['p_desc'];
        $prod_cat = $_POST['cat'];
    
    $query = "Insert into product(p_name,p_desc, p_cat_id) values('$prod_name','$prod_desc','$prod_cat')";
    if(!mysqli_query($con,$query)){
        echo"Error while inserting products into db";
        die();
    }
    echo"Product Added";
    echo"\nDetalils\nName : '$prod_name'\nDescription : '$prod_desc'\n";
    }
?>

</div>

<div class="list">
    <table id = 'myTable'>
    <tr> 
        <th>Product name</th>
        <th>Product Description</th>
        <th>Product Category ID</th>
    </tr>    
    
    <?php
        $query = "Select * from product";
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo$row['p_name'] ?></td>
        <td><?php echo$row['p_desc'] ?></td>
        <td><?php echo$row['p_cat_id'] ?></td>
        
    </tr>
    <?php
        }
    ?>

</table>
</div>

<style>
    table {
    border-collapse: collapse;
    width: 50%;
    text-align: center;
    margin: auto;
    }
    th, td{
        border: 3px solid;
    }
</style>
















<?php
include 'footer.php';
?>