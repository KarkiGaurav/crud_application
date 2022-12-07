<?php
include "conc.php";


$id = $_GET['updateid'];
if(isset($_POST['submit'])){
$username = $_POST["name"];
$password = $_POST["password"];


$msql= " update  `cued_data` set id ='$id', name = '$username', password = '$password' where id = '$id' ";

$query = mysqli_query($con, $msql);
if($query){
        echo "update sucessfully";
}else{
        die(mysqli_error($con));
}

// header("location:display.php");
}
?>
