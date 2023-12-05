<?php  
$host = 'localhost';
$user = 'root';
$pwd = '';
$db_name = 'data_klmpk6';

$conn = new mysqli($host, $user, $pwd, $db_name);

if($conn->connect_error){   
    die("Connection failed: ". $conn->connect_error);
}
// Operasi update
if (isset($_POST['update'])) {
    // Ambil data dari form
    $NPM = $_POST['NPM'];
    $NAMA = $_POST['NAMA'];
    $JKEL = $_POST['JENIS KELAMIIN'];
    
  // Update data di database
  $query = "UPDATE data_klmpk6 SET NAMA='$NAMA', JENIS KELAMIN='$JKEL' WHERE NPM=$NPM";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "Data berhasil diupdate";
  } else {
    echo "Gagal update data";
  }
}
// Operasi delete
if (isset($_POST['delete'])) {
    // Ambil ID data dari form
    $NPM = $_POST['NPM'];
  
    // Delete data di database
    $query = "DELETE FROM data_klmpk6 WHERE NPM=$NPM";
    $result = mysqli_query($conn, $query);
  
    if ($result) {
      echo "Data berhasil dihapus";
    } else {
      echo "Gagal menghapus data";
    }
  }
?>