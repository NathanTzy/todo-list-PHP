<?php

include "config.php";
$id = $_GET['id'];
mysqli_query($con, "DELETE FROM `tabel todo` WHERE `id` ='$id'");

header("location:index.php");

?>
