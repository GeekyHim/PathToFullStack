<?php
session_start();
if(!isset($_SESSION['mySession'])){
    header("Location:index.php");
}
?>