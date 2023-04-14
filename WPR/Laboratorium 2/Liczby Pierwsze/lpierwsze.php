<?php
$number = $_POST['numb'];

if ($number <= 1) {
    echo "Liczba {$number} nie jest pierwsza";
    exit;
}
for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
        echo "Liczba {$number} nie jest pierwsza";
        exit;
    }
}
echo "Liczba {$number}  jest pierwsza";
?>