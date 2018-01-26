<?php 
$nama=$_post['nama'];
?>
<html>
	<body>
		<form method="post">
			<label>Nama</label>
			<input type="text" name="nama" /><br/>
			<input type="submit" value="Kirim" />
		</form>
	</body>
</html>
<?php 
$nama=nama;
echo "Selamat Datang" .$_post['nama'];
?>