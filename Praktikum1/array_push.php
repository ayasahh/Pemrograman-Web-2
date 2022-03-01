<!DOCTYPE html>
<html lang="en">
// menambahkan elemen array dibagian akhir
<body>
    <?php
        $tims = ['Erwin', 'Heru', 'Ali', 'Zaki'];
        array_push($tims, 'Wati'); 
        foreach($tims as $person){
            echo $person. '<br>';
        }
    ?>
</body>
</html>