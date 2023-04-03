<?php

$con = mysqli_connect('sql201.epizy.com','epiz_33908504','ePDt7kxaWvyx','epiz_33908504_aziz');


 $ID = $_GET['Id'];
mysqli_query($con,"DELETE FROM `tblcard` WHERE Id = $ID");

header('location:teacherinfoShow.php');

?>