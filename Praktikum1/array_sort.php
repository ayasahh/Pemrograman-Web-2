<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $ar_buah = ["p" => "Pepaya", "a" => "Apel", "m" => "Mangga", "j" => "Jambu"];
        echo '<ol>';
        foreach($ar_buah as $k => $v){
            echo '<li> ' .$k. ' - ' .$v. '</li>';
        }
        echo '</ol><hr>';

        // urutan dari a - z
        sort($ar_buah);
        echo '<ol>';
        foreach($ar_buah as $k => $v){
            echo '<li> ' .$k. ' - ' .$v. '</li>';
        }
        echo '</ol><hr>';

        // urutan dari z - a
        arsort($ar_buah);
        echo '<ol>';
        foreach($ar_buah as $k => $v){
            echo '<li> ' .$k. ' - ' .$v. '</li>';
        }
        echo '</ol><hr>';
    ?>
    
</body>
</html>