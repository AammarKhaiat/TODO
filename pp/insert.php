<?php 

include "config.php";

$LIST = $_POST ['list'];


mysqli_query($conn, "INSERT INTO `todolist`(`list`) VALUES ('$LIST ') ");

header("location:index.php")





?>