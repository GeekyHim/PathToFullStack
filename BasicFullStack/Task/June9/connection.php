<?php
$con = mysqli_connect('localhost','root','HelloSQL!','sm');
if(!$con) {
    echo"Erroe while connecting to db"; 
    die();
}
?>