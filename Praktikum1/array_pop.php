<!DOCTYPE html>
<html lang="en">
// menghapus elemen array dibagian akhir
<body>
    <?php
        $tims = ['Erwin', 'Heru', 'Ali', 'Zaki'];
        array_pop($tims); 
        foreach($tims as $person){
            echo $person. '<br>';
        }
    ?>
</body>
</html>