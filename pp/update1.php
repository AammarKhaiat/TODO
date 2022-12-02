<?php
include "config.php";
$list = $_POST['list'];
$id = $_POST['id'];
mysqli_query($conn,"UPDATE `todolist` SET `list`='$list' WHERE ID=$id");

header("location:index.php");


?>