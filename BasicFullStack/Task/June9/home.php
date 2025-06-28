<?php
session_start();
if(!isset($_SESSION['mySession'])){
    header("Location:index.php");
}
include 'connection.php';
?>



<div class="lists">

<div class="manage">
    
</div>





<div class="slist">
<table>
        <tr>
        <th colspan = 2>Sent Requests</th>
        </tr>
        <tr>
        <th>Friend Username</th>        
        <th>Status</th>    
        </tr>

        <?php
        $user = $_SESSION['mySession'];
        $query = "Select * from list where sentby = '$user'";
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo$row['sentto']; ?></td>
            <td><?php echo$row['status']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

<div class="rlist">
    <table>
        <tr>
        <th colspan = '2'>Received List</th>
    </tr>
        <tr>
        <th>Friend Username</th>        
        <th>Status</th>    
        </tr>

        <?php
        $user = $_SESSION['mySession'];
        $query = "Select * from list where sentto = '$user'";
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo$row['sentby']; ?></td>
            <td><?php echo$row['status']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

<div class="flist">    
<table>
    <tr>
        <th >Friends</th>
    </tr>
        <tr>
        <th>Friend Username</th>         
        </tr>

        <?php
        $user = $_SESSION['mySession'];
        $query = "Select * from list where (sentto = '$user' AND status = 'accepted')";
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo$row['sentby']; ?></td>
        </tr>
        <?php } ?>
        <?php
        $user = $_SESSION['mySession'];
        $query = "Select * from list where (sentby = '$user' AND status = 'accepted')";
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo$row['sentto']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>
</div>

<style>
    th, td{
        border : 2px solid;
        margin : 5px;
        padding: 5px;
        align-items:center; 
    }
    table{
        border-collapse:collapse;
        justify-content:center;
        display:flex;
        margin:20px;
    }
    .lists {
    display: flex;
    justify-content:right;
    background: #c3e0e1;
}
    
</style>



<?php
include 'footer.php';
?>
