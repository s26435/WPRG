<?php
session_start();

$card_number = $_SESSION['card_number'];
$name = $_SESSION['name'];
$number_of_people = $_SESSION['number_of_people'];

echo "Numer karty: $card_number<br>";
echo "Imię i nazwisko zamawiającego: $name<br>";
echo "Ilość osób: $number_of_people<br>";

for ($i = 1; $i <= $number_of_people; $i++) {
    $person_name = $_POST["person_$i\_name"];
    $person_surname = $_POST["person_$i\_surname"];

    echo "Dane osoby $i:<br>";
    echo "Imię: $person_name<br>";
    echo "Nazwisko: $person_surname<br>";
}
