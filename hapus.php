<?php 

include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($konek, "DELETE FROM mhs WHERE id=$id");
 
if (mysqli_affected_rows($konek) > 0) {
	echo "Data Berhasil Dihapus";
	header("location:hasil.php");
}
?>

 ?>