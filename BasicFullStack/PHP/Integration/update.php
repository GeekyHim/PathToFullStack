<?php
    include 'session.php';
    include 'connection.php';

    $id = $_GET['id'];
    $query = "select * from product where p_id = '$id'";
    $result = mysqli_query($con, $query);
    $info = mysqli_fetch_array($result);
?>

<form action="<?php echo$_SERVER['PHP_SELF'].'?id='.$id?>" method = 'post'>
    <input type="text" name = "fp_name" value = '<?php echo$info['p_name']?>'>
    <input type="text" name = "fp_desc" value = '<?php echo$info['p_desc']?>'>
    <input type="submit" name = "submit" value = 'Update'>
</form>


<?php
    if(isset($_POST['submit'])){
        $name =  $_POST['fp_name'];
        $desc = $_POST['fp_desc'];
        
        $query2 = "update product set p_name='$name', p_desc='$desc' where p_id = '$id'";
        $res = mysqli_query($con, $query2);
        if($res){
            header("Location:manageproducts.php");
        }else{
            echo"Error while updating";
            die();
        }
    }

?>