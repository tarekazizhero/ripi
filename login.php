
<?php require 'header.php';?>

<?php
    session_start();
    $conn=new mysqli('localhost','root','','aziz');

    $empty_email=$empty_password='';

    if(isset($_POST['submit'])){
        $user_email=$_POST['user_email'];
        $user_password=$_POST['user_password'];

        $md5_user_password= md5($user_password);

        if (empty($user_email)) {
            $empty_email='fill up this field';
        }
        if (empty($user_password)) {
            $empty_password='fill up this field';
        }
        if (!empty( $user_email) && !empty($user_password)) {
           $sql="SELECT * FROM users WHERE user_email='$user_email' AND user_password='$md5_user_password'";
           $query=$conn->query($sql);
           if($query->num_rows>0){
            $_SESSION['login']='login success';
            header('location:dashboard.php');
           }else {
            
            echo "Wrong Password";
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
    <title>Students Login</title>
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
            <?php
            if(isset($_GET['usercreate'])){
                echo "user create successfully";

            }
            ?>


                <form action="login.php" method="post">
                    <div class="mt-3">
                        <p style="color:navy";>Student Login</p>
                        <label class ="form-label">Email</label>
                        <input type="text" class="form-control" name="user_email" value="<?php if(isset($_POST['submit'])){echo $user_email; } ?>" placeholder="Enter valid email">

                        <?php
                         if(isset($_POST['submit'])){
                            echo "<span class='text-danger'>" .  $empty_email . "</span>";
                         }
                        
                        ?>

                    </div>
                    <div class="mt-3">
                        <label class ="form-label">Password</label>
                        <input type="password" class="form-control" name="user_password" placeholder="Enter valid password">

                        <?php
                         if(isset($_POST['submit'])){
                            echo "<span class='text-danger'>" . $empty_password . "</span>";
                         }
                        
                        ?>

                    </div>
                    <div class="mt-3">
                        <button class="btn btn-success" name="submit">Login</button>
                    </div>
                </form>
                <h5>Not have an account <a href="user.php">Register</a> </h5>

            </div>

            <div class="col-4">

            </div>

        </div>

    </div>

    <br>

</body>
</html>


<?php require 'footer.php';?>