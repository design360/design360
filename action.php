<?php
 $path = 'sponsors.txt';
 if (isset($_POST['sponsemail'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['sponsemail'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>