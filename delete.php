<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    mysqli_query($conn, "DELETE FROM mhs WHERE NPM='$NPM'");
    header("location:index.php");
}
?>
