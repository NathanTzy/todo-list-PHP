<?php

include "config.php";
$id = $_POST['id'];
$list = $_POST['list'];

mysqli_query($con,"UPDATE `tabel todo` SET `Act List`='$list' WHERE `tabel todo` . `id` = '$id' ");
header("location: index.php");

?>
