<center>
	<?php
	$wilayah = $_POST['wilayah'];
	$positif = $_POST['positif'];
	$rawat = $_POST['rawat'];
	$sembuh = $_POST['sembuh'];
	$meninggal = $_POST['meninggal'];
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];

	echo 'Data Pemantauan Covid-19 Wilayah ' . $_POST['wilayah'];
	echo "<br>";
	date_default_timezone_set('Asia/Jakarta');
	echo 'Per ' . date("d F Y H:i:s");
	echo "<br>";
	echo $_POST['nama'] . ' / ' .  $_POST['nim'];
	echo "<br>";
	?>
	<table align="center" border="1" cellpadding="0" cellspacing="0" width="500">
		<tr>
			<td>Positif</td>
			<td>Dirawat</td>
			<td>Sembuh</td>
			<td>Meninggal</td>
		</tr>
		<tr>
			<td><?php echo $positif;?></td>
			<td><?php echo $rawat;?></td>
			<td><?php echo $sembuh;?></td>
			<td><?php echo $meninggal;?></td>
		</tr>
	</table>
</center>