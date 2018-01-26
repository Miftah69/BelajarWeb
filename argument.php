<?php 
function tulis_teks ($teks="", $jumlah=1) {
	for ($i=1; $i <= $jumlah; $i++)
		echo "$teks";
	}
	tulis_teks("A", 5);
	echo "<br>";
	tulis_teks("F"); 
	?>