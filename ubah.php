<?php
include "koneksi.php";

if (isset($_GET['id'])) {$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $NPM = $_POST['NPM'];
    $NAMA = $_POST['NAMA'];
    $JKEL = $_POST['JKEL'];

    mysqli_query($conn, "UPDATE mhs SET NPM='$NPM', NAMA='$NAMA', JKEL='$JKEL' WHERE id='$id'");
    header("location:index.php");}

  $result = mysqli_query($conn, "SELECT * FROM mhs WHERE id='$id'");$row = mysqli_fetch_array($result);
}

?>

<h3> Ubah Data mhs </h3>

<form action="update.php" method="post">
<table><input type="hidden" name="id" value="<?php echo $id; ?>">
<tr>
    <td>NPM</td>
    <td><input type="text" name="NPM" value="<?php echo $row['NPM']; ?>"></td></tr><tr>
    <td>NAMA</td>
    <td><input type="text" name="NAMA" value="<?php echo $row['NAMA']; ?>"></td></tr><tr>
    <td>JKEL</td>
    <td><input type="text" name="JENIS KELAMIN" value="<?php echo $row['JENIS KELAMIN']; ?>" ></td></tr><tr>
    <td></td>
    <td><input type="submit" value="SIMPAN"></td></tr>
</table>

</form>