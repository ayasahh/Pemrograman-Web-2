<?php
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];

if(!empty ($proses)) {
    echo 'Proses : ' .$proses;
    echo '<br>Nama : ' .$nama;
    echo '<br>Mata Kuliah : ' .$matkul;
    echo '<br>Nilai UTS : ' .$uts;
    echo '<br>Nilai UAS : ' .$uas;
    echo '<br>Nilai Tugas Praktikum : ' .$tugas; 
    echo '<br><hr>';
}

$nilai_akhir = ($uts * 30/100) + ($uas * 35/100) + ($tugas * 35/100);

//hasil Kelulusan
if($nilai_akhir > 55) {
    echo '<br.Hasil Akhir ; ' .$nilai_akhir;
    echo '<br> LULUS';
}
else {
    echo '<br> Hasil Akhir : ' .$nilai_akhir;
    echo '<br> TIDAK LULUS';
}

//Grade
if($nilai_akhir > 0 && $nilai_akhir <= 35) {
    $grade = 'E';
    echo '<br> Grade : ' .$grade;
}
elseif($nilai_akhir > 0 && $nilai_akhir <= 55) {
    $grade = 'D';
    echo '<br> Grade : ' .$grade;
}
elseif($nilai_akhir > 0 && $nilai_akhir <= 69) {
    $grade = 'C';
    echo '<br> Grade : ' .$grade;
}
elseif($nilai_akhir > 0 && $nilai_akhir <= 84) {
    $grade = 'B';
    echo '<br> Grade : ' .$grade;
}
elseif($nilai_akhir > 0 && $nilai_akhir <= 100) {
    $grade = 'A';
    echo '<br> Grade : ' .$grade;
}
else{
    echo '<br> Grade : I';
}

//Predikat
$predikat = $grade;
switch ($predikat) {
    case 'E';
        echo '<br>Predikat : Sangat Kurang';
        break;
    case 'D';
        echo '<br>Predikat : Kurang';
        break;
    case 'C';
        echo '<br>Predikat : Cukup';
        break;
    case 'B';
        echo '<br>Predikat : Memuaskan';
        break;
    case 'A';
        echo '<br>Predikat : Sangat Memuaskan';
        break;
    default:
        echo '<br>Predikat : Tidak ada';    
}
?>