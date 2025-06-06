<?php
    session_start();
    if(isset($_SESSION['mySession'])){
    }else{
        header("Location:index.php");
    }
?>