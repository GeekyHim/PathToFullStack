<!DOCTYPE html>
<html lang="en">
<head>
    <title>UPLOAD</title>
</head>
<body>
    
    <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = 'POST' enctype = 'multipart/form-data'?>
        <input type = file name = myfile /> 
        <input type = submit name = mybutton VALUE = SUBMIT /> 
        <button name = myactualbutton >  

        <?php
        
            if(isset($_POST['mybutton'])){
            $thefilename =  $_FILES['myfile']['name'];
           move_uploaded_file($_FILES['myfile']['tmp_name'],"uploaded/".$thefilename);
           echo"DONE";
        
            }

            if(isset($_POST['myactualbutton'])){
            $thefilename =  $_FILES['myfile']['name'];
           move_uploaded_file($_FILES['myfile']['tmp_name'],"uploaded/".$thefilename);
           echo"DONE";
        
            }
        ?>
    </form>

</body>
</html>