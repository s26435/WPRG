<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Odwróć plik!</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Odwróć">
</form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file, 'r+');
    $output_handle = fopen("output.txt", "a");
    $lines = file($file);
    $file_length = count($lines)-1;
    $lines[$file_length] .= "/n";
    $reversed_lines = array_reverse($lines);
    ftruncate($handle, 0);
    ftruncate($output_handle, 0);
    foreach ($reversed_lines as $line) {
        fwrite($output_handle, $line);
    }
    fclose($handle);
}
?>
