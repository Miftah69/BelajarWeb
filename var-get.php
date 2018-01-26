<?php 
$nama='miftah';
$nim='311411010';00
?>
<!DOCTYPE html>
<html>
<head>
	<title>Variabel Get</title>
</head>
<body>
	<p>Nama : <?php echo "$nama"; ?></p>
	<p>Nim : <?php echo "$nim"; ?></p>
	<pre><?php print_r($_GET); ?></pre>
</body>
</html>