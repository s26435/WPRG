<?php
echo "Imię rezerwującego: {$_POST['name']} <br>";
echo "Nazwisko rezerwującego: {$_POST['surname']}<br>";
echo "Adres rozliczeniowy: {$_POST['address']}<br>";
echo "Email: {$_POST['mail']}<br>";
echo "Data i godzina przyjazdu: {$_POST['date']} <br>";
echo "Ilość osób: ";
    $select = $_POST['qOfPeople'];
    $x = 0;
    switch ($select) {
        case 'one':
            $x = 1;
            echo '1<br/>';
            break;
        case 'tfo':
            $x = 2;
            echo '2<br/>';
            break;
        case 'free':
            $x = 3;
            echo '3<br/>';
            break;
        case 'for':
            $x = 4;
            echo '4<br/>';
            break;
    }
    for($i=0; $i < $x; $i++){
        echo "<label>Imie i nazwisko<input name='{$x}'></label><br>";
    }

