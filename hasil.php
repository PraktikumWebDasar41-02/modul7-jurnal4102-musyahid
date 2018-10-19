<?php 

include 'koneksi.php';

$mahasiswa = mysqli_query($konek, "SELECT * FROM mhs");

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
 	<form>
 		<input type="text" name="cari">
 	</form>
 	<table border="1">
 		<tr>
 			<th>NAMA</th>
 			<th>NIM</th>
 			<th>TANGGAL LAHIR</th>
 			<th>JENIS KELAMIN</th>
 			<th>PROGRM STUDI</th>
 			<th>FAKULTS</th>
 			<th>ASAL</th>
 			<th>MOTO</th>
 			<th>AKSI</th>
 		</tr>
 		<?php while ($data = mysqli_fetch_assoc($mahasiswa)) : ?>
 		<tr>
 			<td><?php echo $data["nama"]?></td>
 			<td><?php echo $data["nim"]?></td>
 			<td><?php echo $data["tgl_lahir"]?></td>
 			<td><?php echo $data["jenis_kelamin"]?></td>
 			<td><?php echo $data["program_study"]?></td>
 			<td><?php echo $data["fakultas"]?></td>
 			<td><?php echo $data["asal"]?></td>
 			<td><?php echo $data["moto_hidup"]?></td>
 			<td><a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a></td>
 		</tr>
 		<?php endwhile; ?>
 	</table>
 </body>
 </html>

