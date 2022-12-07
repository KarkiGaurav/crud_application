<?php
include 'conc.php';

if(isset($_POST["done"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

  $q = "INSERT INTO  `cued_data`( `name`, `password`) VALUES ( '$username', '$password')";

  $query = mysqli_query($con , $q);
  header("location:display.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert form</title>
    <link rel="stylesheet" href="curd.css">
</head>
<body>
    <div class="container">

    <h1>Insert Operation</h1>
        <form action="insert.php" method="post">

        <label for="Username:">Username:</label>
        <input type="text" name = "username" id="username" >

        <label for="Password:">Password:</label>
        <input type="password" name = "password" id="password" >

        <button type="submit" id = "submit" name="done">submit</button>
        </form>
    </div>
</body>
</html>