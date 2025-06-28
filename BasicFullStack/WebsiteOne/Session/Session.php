<?php
    session_start();
    if(isset($_SESSION['myIdForSession'])){
         header("Location:page2.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login Page</title>
</head>
<body>
    <form action = 'Session.php' method = 'post'>
        <input type = 'text' name = 'usernameForm' placeholder = 'Username' />
        <input type = 'password' name = 'passwordForm' placeholder = 'Password' />
        <input type = 'submit' name = 'myButton' value = 'Submit' />
    </form>

    <?php
        $user = null;
        $password = null;
        if(isset($_POST['myButton'])){
            $user = $_POST['usernameForm'];
            $password = $_POST['passwordForm'];

            if($user == "admin" && $password == '123'){
                $_SESSION['myIdForSession'] = $user; // set the session

                header("Location:page2.php");
            }
            else{
                echo"Username or Password Incorrect!";
            }
        }
    ?>

</body>
</html>