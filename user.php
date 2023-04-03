
<?php require 'header.php';?>

<?php

//connect mysql

    $conn=new mysqli('sql201.epizy.com','epiz_33908504','ePDt7kxaWvyx','epiz_33908504_aziz');
    




    $empty_firstname=$empty_lastname= $empty_email=$empty_password=$empty_passConfirm='';

    if(isset($_POST['submit'])){
         $user_first_name=$_POST['user_first_name'];
         $user_last_name=$_POST['user_last_name'];
         $user_email=$_POST['user_email'];
         $user_password=$_POST['user_password'];
         $user_password_confirm=$_POST['user_password_confirm'];

        $md5_user_password= md5($user_password);


        if(empty($user_first_name)){
            $empty_firstname= "Fill up this field";
        }
        if(empty($user_last_name)){
            $empty_lastname= "Fill up this field";
        }
        if(empty($user_email)){
            $empty_email= "Fill up this field";
        }
        if(empty($user_password)){
            $empty_password= "Fill up this field";
        }
        if(empty($user_password_confirm)){
            $empty_passConfirm= "Fill up this field";
        }

        if(!empty($user_first_name) && !empty($user_last_name) && !empty($user_email) && !empty($user_password) && !empty($user_password_confirm)){
             if($user_password===$user_password_confirm){
              $sql="INSERT INTO users (user_first_name,user_last_name,user_email,user_password) VALUES('$user_first_name','$user_last_name','$user_email','$md5_user_password')";
            
                if($conn->query($sql)==TRUE) {
                  header('location:login.php?usercreate');
                 }



            }
        
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>

.container{
    margin-top: 50px ;
    padding: 50px;
    box-shadow: 10px 10px 10px 10px gray;
}
</style>

<body>
<div class="container">
        <div class="row" >
            <div class="col-4">

            </div>

            <div class="col-4" style="margin-top:50px">
                <form action="user.php" method="post">
                    <p style="color:navy";>Student Registration</p>

                    <div class="mt-3">
                        <label class ="form-label">First Name</label>
                        <input type="text" class="form-control" name="user_first_name" value="<?php if(isset($_POST['submit'])){echo $user_first_name; } ?>" placeholder="Enter first name">
                        <?php
                         if(isset($_POST['submit'])){
                            echo "<span class='text-danger'>" .  $empty_firstname . "</span>";
                         }
                        
                        ?>


                    </div>

                    <div class="mt-3">
                        <label class ="form-label">Last Name</label>
                        <input type="text" class="form-control" name="user_last_name" value="<?php if(isset($_POST['submit'])){echo $user_last_name; } ?>" placeholder="Enter last name">

                    </div>
                    <?php
                         if(isset($_POST['submit'])){
                            echo "<span class='text-danger'>" .  $empty_lastname . "</span>";
                         }
                        
                        ?>


                    <div class="mt-3">
                        <label class ="form-label">Email</label>
                        <input type="text" class="form-control" name="user_email" value="<?php if(isset($_POST['submit'])){echo $user_email; } ?>" placeholder="Enter email">

                    </div>
                    <?php
                         if(isset($_POST['submit'])){
                            echo "<span class='text-danger'>" .  $empty_email . "</span>";
                         }
                        
                        ?>


                    <div class="mt-3">
                        <label class ="form-label">Password</label>
                        <input type="password" class="form-control" name="user_password" placeholder="Enter password">

                    </div>
                    <?php
                         if(isset($_POST['submit'])){
                            echo "<span class='text-danger'>" .  $empty_password . "</span>";
                         }
                        
                        ?>

                    <div class="mt-3">
                        <label class ="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="user_password_confirm" placeholder="Enter password">

                    </div>
                    <?php
                         if(isset($_POST['submit'])){
                            echo "<span class='text-danger'>" .  $empty_passConfirm . "</span>";
                         }
                        
                        ?>

                    <div class="mt-3">
                        <button class="btn btn-success" name="submit">Submit</button>
                    </div>
                </form>

            </div>

            <div class="col-4">

            </div>

        </div>

    </div>

    <br>

</body>
</html>

<?php require 'footer.php';?>