<?php
$filename = 'odnosniki.txt';
$file = fopen($filename, 'r');
if ($file) {
    echo '<ul style="list-style-type: none;">';
    while (($line = fgets($file)) !== false) {
        $parts = explode(';', $line);
        $url = trim($parts[0]);
        $description = trim($parts[1]);
        echo '<li><a href="' . $url . '">' . $description . '</a></li>';
    }
    echo '</ul>';
    fclose($file);
} else {
    echo 'Błąd: nie udało się otworzyć pliku.';
}