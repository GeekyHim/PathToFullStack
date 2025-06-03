<?php
    session_start();
    unset($_SESSION['myIdForSession']); // phele unset
    session_destroy(); // destroy
    header("Location:Session.php");
?>