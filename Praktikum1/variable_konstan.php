<?php
// definisikan konstan
define ('PHI' , 3.14);
define ('DBAYA' , 'inventori');
define ('DBSERVER' , 'localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Luas lingkaran dengan jari jaro ' .$jari. ' adalah : ' .$luas;
echo '<br/>keliling nya adalah ' .$kll;
?>


<hr/>
<?php
echo 'Nama databasenya = '.DBAYA;
echo '<br/>Lokasi databasenya ada di '.DBSERVER;
?>