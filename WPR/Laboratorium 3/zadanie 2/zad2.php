<?php
$filename = 'licznik.txt';
if (file_exists($filename)) {
    $count = (int) file_get_contents($filename);
    $count++;
} else {
    $count = 1;
}
file_put_contents($filename, (string) $count);
echo 'Liczba odwiedzin: ' . $count;