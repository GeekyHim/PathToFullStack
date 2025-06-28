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
    <style>
        
    input#user {
        background: #d8d8d8;
        font-size: 20px;
            margin: 10px;
    margin-left: 25px;
    }    
    input#pass {
        background: #d8d8d8;
        font-size: 20px;
            margin: 10px;
    margin-left: 25px;
    }   
     

    .userpage {
    background: #5a5a5a;
    width: 20.5%;
    height: 150px;}
button#button
 {
    margin: 10px;
    margin-left: 125px;
 }
    </style>
</head>
<body>
    <div class = 'userpage'>
    <form action="index.php" method="get">
        <input type="text" name = 'username' placeholder="Username" id = user>
        <input type="password" name = 'password' placeholder="Password" id = pass> 
        <button name = 'submitButton' id = button>Submit</button>
    </form>
    </div>
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