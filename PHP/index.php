<!DOCTYPE html>
<html>
<head>
    <title>PHP First</title>
</head>
<body>
    <h1> <?php  echo"My Name is Himanshu"; 
        // echo is basically like print, tho php has print but in php echo is better and we will use echo
    ?></h1> 
    <p>
        <?php 
            $username = "GeekyHim"; // $ is basically let or var
            echo"My username is ".$username; // . is user for concatination like + in other langs
            echo"\n";
            var_dump($username); // basically typeof()
        ?>
    </p>

</body>
</html>