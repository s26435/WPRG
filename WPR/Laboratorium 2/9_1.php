<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Formularz daty urodzenia</title>
</head>
<body>
<h1>Podaj datę swojego urodzenia</h1>
<form method="get" action="">
    <label for="birthday">Data urodzenia:</label>
    <input type="date" name="birthday" id="birthday" required>
    <br><br>
    <input type="submit" value="Wyślij">
</form>
<?php
if (isset($_GET['birthday'])) {
    $birthday = $_GET['birthday'];
    echo "<h2>Informacje o dacie urodzenia</h2>";
    echo "<p>Data urodzenia: $birthday</p>";

    function getDayOfWeek($date)
    {
        $daysOfWeek = array("niedziela", "poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota");
        $dayOfWeekIndex = date('w', strtotime($date));
        return $daysOfWeek[$dayOfWeekIndex];
    }

    function getAge($date)
    {
        $birthDate = new DateTime($date);
        $today = new DateTime();
        $age = $today->diff($birthDate);
        return $age->y;
    }

    function getDaysToNextBirthday($date) : string
    {
        $birthday = new DateTime($date);
        $today = new DateTime();
        $nextBirthday = new DateTime(date('Y', strtotime('+1 year')) . '-' . $birthday->format('m-d'));
        $daysToNextBirthday = $nextBirthday->diff($today)->format('%a');
        return $daysToNextBirthday;
    }

    $dayOfWeek = getDayOfWeek($birthday);
    echo "<p>Urodziłeś/aś się w $dayOfWeek.</p>";

    $age = getAge($birthday);
    echo "<p>Ukończyłeś/aś $age lat.</p>";

    $daysToNextBirthday = getDaysToNextBirthday($birthday);
    echo "<p>Do Twoich następnych urodzin pozostało $daysToNextBirthday dni.</p>";
}
?>
</body>
</html>
