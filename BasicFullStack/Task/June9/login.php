<?php
session_start();
if(isset($_SESSION['mySession'])){
    header("Location:home.php");
}
include "connection.php";

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = 'post'>

    <input type="text" name = 'username' id = 'username' placeholder = 'Enter Username' />
    <input type="password" name = 'password' id = 'password' placeholder = 'Enter Password' />
    <input type="submit" name = 'submit' id = 'submit' Value = 'Submit' />
    
</form>

<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "Select * from users where username = '$username'";
        $res = mysqli_query($con, $query);
        $rows = mysqli_fetch_array($res);
        if(mysqli_num_rows($res)==0){
            echo"Incorrect Username or User Doesn't Exist!!";
        }
        else if($password == $rows['password']){
            $_SESSION['mySession'] = $username;
            header("Location:home.php");
        }else{
            echo"Incorrect password";
        }
        
    }
?>

<a href = "register.php"> REGISTER  </a>