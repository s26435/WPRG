<?php
if (isset($_POST['X']) && isset($_POST['Y'])) {
    $d = substr($_POST['dzialanie'],0,1);
    $wynik = 0;
        switch ($d){
            case "+": $wynik = $_POST['X'] + $_POST['Y']; break;
            case "-": $wynik = $_POST['X'] - $_POST['Y']; break;
            case "*": $wynik = $_POST['X'] * $_POST['Y']; break;
            case "/": $wynik = $_POST['X'] / $_POST['Y']; break;
            default: echo "Niepoprawne działanie. Wpisz +,-,* lub /"; exit(-1);
        }
        echo "W formularzu podano liczby {$_POST['X']} oraz {$_POST['Y']}.<BR>";
        echo "Wyniki działań:<BR>";echo "{$_POST['X']} {$d} {$_POST['Y']} = ";
        echo $wynik;echo "<BR>";
} else
{echo "Brak danych! Jedna lub obie liczby nie zostały podane!<BR>";
}
?>