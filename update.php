<?php
include 'koneksi.php';

$id = $_POST['id']; 
$NPM = $_POST['NPM'];
$NAMA = $_POST['NAMA'];
$JKEL = $_POST['JKEL'];

mysqli_query($conn, "UPDATE mhs SET NPM='$NPM', NAMA='$NAMA', JKEL='$JKEL' WHERE id='$id'");

header("location:index.php");
?>