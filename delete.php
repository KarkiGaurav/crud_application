<?php
include  "conc.php";

$id = $_GET["id"];

$q = "delete from  `cued_data` where id = $id" ;

$query =  mysqli_query($con, $q);

header("location:display.php");
?>