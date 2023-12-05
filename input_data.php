<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h1>Input Data Diri Anda</h1>
    <form action="action.php" method="post">
        <table>
            <tr>
                <td>NPM</td>
                <td><input type="text" name="NPM"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="NAMA"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td><input type="text" name="JKEL"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
            
        </table>
    </form>
</body>
</html>