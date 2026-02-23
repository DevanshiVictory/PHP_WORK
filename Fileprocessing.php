<?php

$filename = "data.txt";

// Check if file exists
if (file_exists($filename)) {

    $file = fopen($filename, "r");

    if ($file) {
        while (!feof($file)) {
            $line = fgets($file);
            echo $line . "<br>";
        }
        fclose($file);
    } else {
        echo "Unable to open file.";
    }

} else {
    echo "File does not exist.";
}

?>
