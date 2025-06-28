<!-- 
create a user login page 
where you have to check the id and password if match redirect to the welcome.php
else say username wrong if username is wrong
and if password is wrong say password is wrong -->

<!DOCTYPE html>
<html>
<head>
    <title>User Login Page</title>
</head>
<body>
    <form action = 'userLoginPage.php' method = 'post'>
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

            if($user == "admin" && $password == 'admin'){
                header("Location:welcome.php");
            }
            else{
                echo"Username or Password Incorrect!";
            }
        }
    ?>

</body>
</html>