<?php
    session_start();
    if(isset($_SESSION['mySession'])){
        header("Location:products.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" name = 'username' placeholder="Username">
        <input type="password" name = 'password' placeholder="Password"> 
        <button name = 'submitButton'>Submit</button>
    </form>
    <?php
        $username = null;
        $password = null;

        if(isset($_GET['submitButton'])){
            
            $username = $_GET['username'];
            $password = $_GET['password'];

            if($username == 'geekyhim' && $password == 'admin'){
                $_SESSION['mySession'] = $username;
                header("Location:products.php");
            }else{
                echo"Username or Password Incorrect!";
            }

        }
    ?>
</body>
</html>