<?php
$filename = "cis.txt";
$handle = fopen($filename, "r");

if ($handle) {
    while (!feof($handle)) {
        $line = fread($handle, 8192);
        echo nl2br($line);
    }
    fclose($handle);
} else {
    echo "Error opening the file.";
}
?>