<?php
$ar_buah = ["Pepaya","Mangga","Pisang","Jambu"];
// cetak buah index ke 2
echo "$ar_buah[2]";
// cetak jumlah buah
echo '<br/>Jumlah buah ' .count($ar_buah);
// cetak seluruh buah
echo '<ol>';
foreach ($ar_buah as $buah){
    echo '<li>' .$buah . '</li>';
}
echo '</ol>';
// tambahkan buah
$ar_buah[] = 'Durian';
// hapus buah
unset($ar_buah[1]);
// cara mengubah buah
$ar_buah[2] = 'Manggis';
//cetak seluruh dengan index nya
echo '<ul>'; 
foreach($ar_buah as $k => $v){
    echo '<li> Buah dengan index ke ' .$k . ' adalah ' . $v .'</li>';
}
echo '</ul>';
?>