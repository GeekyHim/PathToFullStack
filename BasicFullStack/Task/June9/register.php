<?php
session_start();
if(isset($_SESSION['mySession'])){
    header("Location:home.php");
}
include 'connection.php';
?>
<div class="register">
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = 'post'>
    
    <div class="input"> <input type="text" name = 'myName'  placeholder = 'Enter Name' /> </div>
    <div class="input"> <input type="text" name = 'username' placeholder = 'Enter Username' /> </div>
    <div class="input"> <input type="password" name = 'password'placeholder = 'Enter Password' /> </div>
    <div class="input"> <input type="number" name = 'contact' placeholder = 'Enter Phone No.' /> </div>
    <div class="input"> <input type="email" name = 'email' placeholder = 'Enter Email' /> </div>
    <div class="input"> <input type="submit" name = 'submit'  Value = 'Submit' /> </div>
    
</form>
</div>
<?php
    if(isset($_POST['submit'])){
        $name = $_POST['myName'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        //password validation logic

        $checkusername = "Select * from users where username = '$username'";
        $checkphone = "Select * from users where contact = '$contact'";
        $checkemail = "Select * from users where email = '$email'";

        $res = mysqli_query($con,$checkusername);
        $res2 = mysqli_query($con,$checkphone);
        $res3 = mysqli_query($con,$checkemail);
        
        if(mysqli_num_rows($res)>0){
            echo"Username Already Exists";
        }
        else if(mysqli_num_rows($res2)>0){
            echo"Phone Number Already Exists";
        }
        else if(mysqli_num_rows($res3)>0){
            echo"Email Already Exists";
        }
        else{
            $query = "Insert into users(name,username,password,contact,email) values('$name','$username','$password','$contact','$email')";
            $r = mysqli_query($con,$query);
            if(!$r){
                echo"Error while registering";
                die();
            }else{
                echo"Successfully Registered";
                
            }
        }
    }
?>

<a href = "login.php"> LOGIN  </a>


<style>
.register .input{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items: center;
    width: auto;
    padding:2px;
    margin: 10px;
}

</style>