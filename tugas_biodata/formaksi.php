<?php 
$nama=$_GET['nama'];
$tempat=$_GET['Tempat'];
$tl=$_GET['tanggal_lahir'];
$agama=$_GET['agama'];
$jenis_kelamin=$_GET['JK'];
$gd=$_GET['golongan_darah'];
$alamat=$_GET['alamat'];
$foto=$_GET['file_gambar'];
$sp=$_GET['Status'];
$pekerjaan=$_GET['pekerjaan'];
$kewarga=$_GET['kewarga'];
$foto =$_GET['file_gambar'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>T_Biodata</title>
</head>
<body>
<form action="form.html">
	<p>BIODATA</p>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>
				<?php echo $nama; ?>
			</td>
		</tr>
		<tr>
			<td>Tempat</td>
			<td>:</td>
			<td>
				<?php echo $tempat; ?>
			</td>
		</tr>
		<tr>
			<td>tanggal_lahir</td>
			<td>:</td>
			<td>
				<?php echo $tl; ?>
			</td>
		</tr>
		<tr>
			<td>jenis_kelamin</td>
			<td>:</td>
			<td>
				<?php echo $jenis_kelamin; ?>
			</td>
		</tr>
		<tr>
			<td>Golongan_darah</td>
			<td>:</td>
			<td>
				<?php echo $gd; ?>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				<?php echo $alamat; ?>
			</td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td>
				<?php echo $foto; ?>
			</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>
				<?php echo $agama;	?>
			</td>
		</tr>
		<tr>
			<td>stasus perkawinan</td>
			<td>:</td>
			<td>
				<?php echo $sp;	?>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>
				<?php echo $pekerjaan; ?>
			</td>
		</tr>
		<tr>
			<td>Kewarganegaraan</td>
			<td>:</td>
			<td>
				<?php echo $kewarga; ?>
			</td>
		</tr>
		<tr>
			<td>Hobby</td>
			<td>:</td>
			<td>
				<?php 
				if (isset($_GET['proses'])){
					if (isset($_GET['hobi1']) && isset($_GET['hobi2']) && isset($_GET['hobi3']) ) {
						echo $_GET['hobi1'].", ".$_GET['hobi2']." dan ".$_GET['hobi3'];
					}
					else if (isset($_GET['hobi1']) && isset($_GET['hobi2'])) {
						echo $_GET['hobi1']." dan ".$_GET['hobi2'];
					}
					else if (isset($_GET['hobi2']) && isset($_GET['hobi3'])) {
						echo $_GET['hobi2']." dan ".$_GET['hobi3'];
					}
					else if (isset($_GET['hobi1']) && isset($_GET['hobi3'])) {
						echo $_GET['hobi1']." dan ".$_GET['hobi3'];
					}
					else if (isset($_GET['hobi1'])){
						echo $_GET['hobi1']."<br/>";
					} 
					else if (isset($_GET['hobi2'])){
						echo $_GET['hobi2']."<br/>";
					}
					else if (isset($_GET['hobi3'])){
						echo $_GET['hobi3']."<br/>";
					}
				} 
			 	?>
			</td>

		</tr>

	</table>
	<button>back</button>

</form>

</body>
</html>