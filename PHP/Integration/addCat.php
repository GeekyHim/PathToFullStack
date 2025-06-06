<?php
include "session.php";
include "connection.php";
?>


<div class="cat">
<form action="<?php echo$_SERVER['PHP_SELF']?>" method='POST'>
<div class="name">
    <input type="text" name = 'cat_name' placeholder='Enter Category'>
</div>
<div class="button">
    <input type = 'submit' name = 'myButton' value = 'Submit'>
</div>
</form>

</div>

<?php
    if(isset($_POST['myButton'])){  
        $category = $_POST['cat_name'];
        $query = "select * from category where cat_name = '$category' ";
        $res = mysqli_query($con, $query);
        if(mysqli_num_rows($res)>0){
            echo"Category Already Exists!!";
        }
        else{
            $q = "Insert into category(cat_name) values('$category')";
            $result = mysqli_query($con,$q);
            if(!$result){
                echo"Error while inserting";
                die();
            }
            echo"Inserted!";
        }
    }
?>


<style>
    .button {
    display: flex;
    justify-content: center;
    margin: 12px 0px 0px 0px;}

    .name {
    display: flex;
    justify-content: center;
    margin: 15px 0px 0px 0px;
}

.cat {
    display: flex;
    justify-content: center;
    background: #343434;}

</style>


<?php
include 'footer.php'
?>

