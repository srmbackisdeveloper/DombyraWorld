<?php  
    $handle = fopen('checker.txt', 'w');
    $string = '0';
    fwrite($handle, $string);
    fclose($handle);

header('Location: notes_kuys.php'); ?>
