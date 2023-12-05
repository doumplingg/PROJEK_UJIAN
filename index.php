<?php
include 'koneksi.php';
function displayData() {
global $conn;
    $result = mysqli_query($conn, "SELECT * FROM mhs");
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['NPM'] . "</td>";
        echo "<td>" . $row['NAMA'] . "</td>";
        echo "<td>" . $row['JENIS KELAMIN'] . "</td>";
        echo "<td><a href='ubah.php?id=" . $row['id'] . "'>Edit</a></td>";
        echo "<td><a href='hapus.php?id=" . $row['id'] . "'>Delete</a></td>";
        echo "</tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
    </head>
    <body>
        <h1>Selamat Datang</h1>
        <p>silahkan input data diri anda. tekan tombol dibawah ini</p>
        <button><a href="input_data.php">Klik Disini</a></button>
        <br><br>
        <h2>Data yang sudah dimasukkan</h2>
        <p>Anda bisa mengubah dan menghapus data yang sudah anda buat disini</p>
        <table border=1>
        <tr>
            <th>NPM</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>Mengubah</th>
            <th>Menghapus</th>
        </tr>
        <?php
        displayData();
        ?>
    </table>
    </body>

    