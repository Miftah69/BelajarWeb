<?php 
echo "Perulangan 1-10 <br>";
for ($i=1; $i <= 5; $i++) { 
	if ($i == 3)
		continue;
	echo "Perulangan ke: ". $i . '<br>';
}
echo "Akhir Perulangan";
 ?>