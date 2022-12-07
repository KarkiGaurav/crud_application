<?php
include 'conc.php';

    // $username = $_POST["username"];
    // $password = $_POST["password"];

  $q = "select * from cued_data";

  $query = mysqli_query($con , $q);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display data</title>
    <link rel="stylesheet" href="curd.css">
</head>
<body>
    <div class="container">
        <h1>display Table Data</h1>

        <table class="table">
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>

 <?php
          include 'conc.php';

            $q = "select * from cued_data";
            $query = mysqli_query($con , $q);
           
            while($res = mysqli_fetch_array($query)){

 ?>
            <tr>
                <td> <?php echo $res['id']; ?> </td>
                <td> <?php echo $res['name']; ?> </td>
                <td> <?php echo $res['password']; ?> </td>

                <td><button class="dlt"> <a href="delete.php?id= <?php echo $res['id']; ?>" > Delete: </a> </button> </td>

                <td><button class="dlt"> <a href="update.html?updateid= <?php echo $res['id']; ?>" > Update: </a> </button> </td>
                
               
            </tr>

            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>