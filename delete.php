<?php
include_once("connection.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM tb_ikan WHERE id=$id");
header("location:index.php");
