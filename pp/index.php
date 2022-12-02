<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
</head>
<body>
<form action="insert.php " method = "POST">
<div class="contaainer">
       <div class="row">
           
                <h3>TODO LIST  </h3>
        <div>
                <input type="text" name="list" class="form-control"></div>
        </div>
         <div>       <button>ADD </button>
    
    
    </div>



</div>
<?php 
include "config.php";

$data= mysqli_query($conn,"select * from todolist");

?>
<table>
    <tbody>
        <?php
        while($row=mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['list'] ?></td>

            <td><a href="delete.php? ID= <?php echo $row['id'] ?>">delete </a></td>
            <td><a href="update.php? ID= <?php echo $row['id'] ?>">update </a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

</form>
</body>
</html>