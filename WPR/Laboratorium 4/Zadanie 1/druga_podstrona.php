<?php
session_start();

$card_number = $_POST['card_number'];
$name = $_POST['name'];
$number_of_people = $_POST['number_of_people'];

$_SESSION['card_number'] = $card_number;
$_SESSION['name'] = $name;
$_SESSION['number_of_people'] = $number_of_people;
?>

<form method="POST" action="trzecia_podstrona.php">
    <?php
    for ($i = 1; $i <= $number_of_people; $i++) {
        echo "Dane osoby $i:<br>";
        echo "Imię: <input type='text' name='person_$i\_name'><br>";
        echo "Nazwisko: <input type='text' name='person_$i\_surname'><br>";
    }
    ?>
    <input type="submit" value="Dalej">
</form>
