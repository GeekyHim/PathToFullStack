<?php
include 'session.php';
include 'connection.php';
?>
<div class="list">
    <table id = 'myTable'>
    <tr> 
        <th>Product name</th>
        <th>Product Description</th>
        <th>Product Category ID</th>
        <th>Edit</th>
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
        <td><a href="update.php?id=<?php echo$row['p_id'] ?>">Update</a></td>
        
        
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