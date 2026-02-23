<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $file = fopen("data.txt", "a"); // append mode

    if ($file) {
        fwrite($file, $name . "\n");
        fclose($file);
        echo "Data saved successfully!";
    } else {
        echo "Unable to open file.";
    }
}
?>

<form method="post">
    Enter Your Name:
    <input type="text" name="name" required>
    <input type="submit" name="submit" value="Save">
</form>
