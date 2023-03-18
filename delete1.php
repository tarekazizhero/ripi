<?php

$con = mysqli_connect('localhost','root','','aziz');


 $ID = $_GET['Id'];
mysqli_query($con,"DELETE FROM `sblcard` WHERE Id = $ID");

header('location:stdinfoShow.php');

?>