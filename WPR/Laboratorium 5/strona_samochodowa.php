<?php
// połączenie z bazą danych
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mojaBaza";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// sprawdzenie połączenia
if (!$conn) {
    die("Połączenie nieudane: " . mysqli_connect_error());
}

// jeśli formularz został wysłany, dodaj nowy samochód do bazy
if (isset($_POST['submit'])) {
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $cena = $_POST['cena'];
    $rok = $_POST['rok'];
    $opis = $_POST['opis'];

    $sql = "INSERT INTO samochody (marka, model, cena, rok, opis)
  VALUES ('$marka', '$model', '$cena', '$rok', '$opis')";

    if (mysqli_query($conn, $sql)) {
        echo "Samochód dodany pomyślnie";
    } else {
        echo "Błąd: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// pobranie 5 samochodów z najniższą ceną
$sql = "SELECT * FROM samochody ORDER BY cena LIMIT 5";
$result = mysqli_query($conn, $sql);

// pobranie wszystkich samochodów posortowanych według roku
$sql_all = "SELECT * FROM samochody ORDER BY rok";
$result_all = mysqli_query($conn, $sql_all);
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Portal samochodowy</title>
    </head>
    <body>
    <h1>Portal samochodowy</h1>

    <!-- panel z zakładkami -->
    <div>
        <a href="?page=main">Strona główna</a>
        <a href="?page=all">Wszystkie samochody</a>
        <a href="?page=add">Dodaj samochód</a>
    </div>

    <!-- wyświetlanie zawartości w zależności od wybranej zakładki -->
<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'main':
            // wyświetlanie pięciu samochodów z najniższą ceną
            echo "<h2>Pięć samochodów z najniższą ceną:</h2>";
            echo "<table>";
            echo "<tr><th>Marka</th><th>Model</th><th>Cena</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$row['marka']."</td><td>".$row['model']."</td><td>".$row['cena']."</td></tr>";
            }
            echo "</table>";
            break;
        case 'all':
            // wyświetlanie wszystkich samochodów posortowanych według roku
            echo "<h2>Wszystkie samochody:</h2>";
            echo "<table>";
            echo "<tr><th>Marka</th><th>Model</th><th>Cena</th><th>Rok</th><th";}}
