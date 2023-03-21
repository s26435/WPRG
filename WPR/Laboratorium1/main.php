<?php


//Napisz funkcję zwracającą wynik - symulację rzutu kostką.
function zadanie11()
{
    return rand(1, 6);
}

// Napisz funkcję liczącą średnicę koła (w parametrze podajemy promień).

function zadanie12($R)
{
    return 2 * pi() * $R;
}

/*
    Program do cenzurowania.
    Napisz funkcję, która zastąpi wszystkie niepożądane słowa gwiazdkami (*).
    Funkcja ma zawierać w sobie tablicę niepożądanych słów. Zdanie do ocenzurowania
    powinna otrzymać w parametrze.
*/
function zadanie13($tekst)
{
    $cenzura = array("dupa", "Pis", "Przekleństwo");
    $wynik = $tekst;
    for ($i = 0; $i < count($cenzura); $i++) {
        $wynik = str_replace($cenzura[$i], "***", $wynik);
    }
    return $wynik;
}

//Napisz funkcję, która z podanego numeru PESEL odczyta datę urodzenia i zwróci ją wformacie dd-mm-rr
function zadanie14($srt_pesel)
{
    $year = intval(substr($srt_pesel, 0, 2));
    $month = intval(substr($srt_pesel, 2, 2));
    $day = intval(substr($srt_pesel, 4, 2));
    if ($month > 12) {
        $month -= 20;
        $year += 2000;
    } else {
        $year += 1900;
    }

    if ($month < 10) {
        $month = "0" . strval($month);
    }
    return strval($day) . "-" . $month . "-" . strval($year);
}

function triangle()
{
    echo "Podaj a: ";
    $a = intval(readline());
    echo "Podaj h: ";
    $h = intval(readline());
    return 0.5 * $h * $a;
}

function rectangle()
{
    echo "Podaj a: ";
    $a = intval(readline());
    echo "Podaj b: ";
    $b = intval(readline());
    return $a * $b;
}

function trapeze()
{
    echo "Podaj a: ";
    $a = intval(readline());
    echo "Podaj b: ";
    $b = intval(readline());
    echo "Podaj h: ";
    $h = intval(readline());
    return ($a + $b) * $h * 0.5;
}

/*
    Kalkulator pól powierzchni (używając switch).
    - program zapytuje, jaką figurę chcemy obliczyć (trójkąt, prostokąt, trapez)
    - w zależności od wybranej figury program uruchamia odpowiednią funkcję
    - każda figura ma mieć swoją osobną funkcję, która zapyta o wymiary i policzy pole
*/
function zadanie15()
{
    echo "1. Trójkąt \n";
    echo "2. Prostokąt \n";
    echo "3. Trapez \n";
    echo "Wybór: ";
    switch (readline()) {
        case "1":
            echo "Pole trójkąta = " . triangle();
            break;
        case "2":
            echo "Pole prostokąta = " . rectangle();
            break;
        case "3":
            echo "Pole trapezu = " . trapeze();
            break;
        default:
            echo "Błędny wybór!";
    }
}

//Napisz funkcję, która zawiera w sobie tablicę losowych liczb. Funkcja powinna zwracać wartość elementu tablicy o indeksie podanym jako argument
function zadanie21($index)
{
    $array = array();
    for ($i = 0; $i < $index + 1; $i++) $array[] = rand(0, 100);
    return $array[$index];
}
    /*
     Napisz program “jakiej jestem narodowości” z użyciem tablic asocjacyjnych. Program
    powinien przyjmować nazwę kraju, a następnie w zawartej w nim tablicy sprawdzić, jak
nazywa się odpowiednia narodowość - i tę narodowość zwrócić.
    */
function zadanie22()
{
    echo "Podaj nazwę kraju: ";
    $a = strtolower(readline());
    $nationality = array("polska" => "polska", "niemcy" => "niemiecka", "francja" => "francuska");//itp
    foreach ($nationality as $kraj => $nar) {
        if ($kraj == $a) return $nar;
    }
    return "Nie ma takiego kraju";
}
//Napisz funkcję, zwracającą maksymalny element tablicy losowych liczb (bez używaniagotowych funkcji PHP) w 4 wersjach: for, while, do while, foreach.
function zadanie31()
{
    $tab = array();
    for($i = 0; $i < 100 + 1; $i++) $tab[] = rand(0, 1000);
    //wersja for
    $wynikfor = 0;
    for($i = 0; $i < 100 + 1; $i++){
        if($wynikfor<$tab[$i]) $wynikfor = $tab[$i];
    }
    echo "Wynki dla for: ".$wynikfor."\n";
    //wersja foreach
    $wynikforeach = 0;
    foreach($tab as $item => $x) {
        if($x > $wynikforeach) $wynikforeach = $x;
    }
    echo "Wynki dla foreach: ".$wynikforeach."\n";
    //wersja while
    $wynikwhile = 0;
    $iterator=0;
    while($iterator<100){
        if($wynikwhile < $tab[$iterator]) $wynikwhile = $tab[$iterator];
        $iterator++;
    }
    echo "Wynki dla while: ".$wynikwhile."\n";
    $wynikdowhile=0;
    $iterator=0;
    do{
        if($wynikdowhile < $tab[$iterator]) $wynikdowhile = $tab[$iterator];
        $iterator++;
    }while($iterator<100);
    echo "Wynki dla do..while: ".$wynikdowhile."\n";
}
//Zmodyfikuj funkcję z zadania 1.1, by przyjmowała argument - liczbę rzutów kostką i zwracała tablicę wyników.
function zadanie32($number)
{
    $tab = array();
    for($i = 0; $i < $number + 1; $i++) $tab[] = rand(1, 6);
    //wersja for
    echo "Wersja for: "."\n";
    for($i = 0; $i < $number + 1; $i++){
        echo "Tab[".$i."]=".$tab[$i]."\n";
    }
    echo "Wersja foreach"."\n";
    //wersja foreach
    foreach($tab as $item => $x) {
        echo "Tab[".$item."]=".$x."\n";
    }
    //wersja while
    echo "Wersja while"."\n";
    $iterator=0;
    while($iterator<$number){
        echo "Tab[".$iterator."]=".$tab[$iterator]."\n";
        $iterator++;
    }
    //wersja do..while
    echo "Wersja do..while"."\n";
    $iterator=0;
    do{
        echo "Tab[".$iterator."]=".$tab[$iterator]."\n";
        $iterator++;
    }while($iterator<$number);
   }
    //Napisz funkcję, która wyświetli w konsoli tabliczkę mnożenia w formie kwadratu o boku podanym jako parametr.
    function zadanie33($x){
        for($i=1;$i<$x;$i++){
            for($j=1;$j<$x;$j++) echo $i*$j." ";
            echo "\n";
        }
    }
    //Napisz funkcję, która sprawdzi, czy dana liczba jest liczbą pierwszą. W swoim programie umieść zmienną, która policzy wszystkie iteracje pętli,
    // potrzebne do wykonania obliczeń. Spróbuj tak zmodyfikować program, by było potrzeba jak najmniej
    //iteracji (przy zachowaniu prawidłowego działania).

    function zadanie34($number){
        if ($number == 1)
            return false;
        for ($i = 2; $i <= $number/2; $i++){
            if ($number % $i == 0)
                return false;
        }
        return true;
    }
?>
