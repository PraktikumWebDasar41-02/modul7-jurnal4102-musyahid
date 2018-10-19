<?php 

include 'koneksi.php';

if (isset($_POST["kirim"])) {
	$nama = $_POST["nama"];
	$nim = $_POST["nim"];
	$tgl_lahir = $_POST["tgl_lahir"];
	$jk = $_POST["jk"];
	$prg_study = $_POST["prg"];
	$fakultas = $_POST["fakultas"];
	$asal = $_POST["asal"];
	$moto = $_POST["moto"];

	$input = mysqli_query($konek, "INSERT INTO mhs VALUES('','$nama','$nim','$tgl_lahir','$jk','$prg_study','$fakultas','$asal','$moto')");

if ($input) {
	echo "Data Berhasil diinput";
	header("location:hasil.php");
} else {
	echo "Gagal";
}

}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<form method="post">
			<tr>
			<td>NAMA</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>TANGGL LAHIR</td>
			<td><input type="date" name="tgl_lahir"></td>
		</tr>
		<tr>
			<td>JENIS KELAMIN</td>
			<td>
				<select name="jk">
					<option>Pilih Jenis Kelamin</option>
					<option value="Laki - Laki">LAKI - LAKI</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>PROGRAM STUDI</td>
			<td>
				<select name="prg">
					<option>Pilih Program Studi</option>
					<option value="Manajemen Informatika">Manajemen Informatika</option>
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>FAKULTAS</td>
			<td><input type="radio" name="fakultas" value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</td>
			<td><input type="radio" name="fakultas" value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</td>
			<td><input type="radio" name="fakultas" value="Fakultas Ekonomi">Fakultas Ekonomi</td>
			<td><input type="radio" name="fakultas" value="Fakultas Informatika">Fakultas Informatika</td>
		</tr>
		<tr>
			<td>ASAL</td>
			<td><input type="text" name="asal"></td>
		</tr>
		<tr>
			<td>MOTO</td>
			<td><textarea name="moto"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="kirim"></td>
		</tr>
		</form>
	</table>
</body>
</html>