

<?php
// include db connection


$con = mysqli_connect('localhost','root','','aziz');



if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $PRICE = $_POST['Contact'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);

    // insert data

    mysqli_query($con,"INSERT INTO `tblcard`( `Name`, `Contact`, `Image`) VALUES ('$NAME','$PRICE','$img_des')");
    header("location:teacherinfoShow.php");

}

?>