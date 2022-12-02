<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update

    </title>
</head>
<?php
$id= $_GET ['ID'];


include "config.php";

$update = mysqli_query($conn,"SELECT * FROM todolist where id=$id");

$data = mysqli_fetch_array($update);

?>


<body>
    
<form action="update1.php " method = "POST">
<div class="contaainer">
       <div class="row">
           
                <h3>update task  </h3>
        <div>
                <input type="text" value=<?php echo $data['list']?> name="list" class="form-control"></div>
        </div>
         <div>       <button>update</button>
         <input type="hidden" name="id" value="<?php echo $data['id']?>">
         
    
    
    </div>
</body>
</html>