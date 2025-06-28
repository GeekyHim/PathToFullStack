<?php
    session_start();
    if(isset($_SESSION['myIdForSession'])){
        echo"Welcome to page 2";        
    }else{
        header("Location:Session.php");
    }
?>


<a href = 'logout.php' > LOGOUT </a>