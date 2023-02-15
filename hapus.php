<?php
include ("koneksi.php");

$id = $_GET['id_bahan'];

mysqli_query($db, "DELETE FROM tb_bahan WHERE id_bahan='$id'");
mysqli_query($db, "DELETE FROM tb_bahan WHERE id_bahan='$id'");


header("location:tampil.php");
?>