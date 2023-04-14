<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Katalogi w PHP</title>
</head>
<body>
<form method="post">
    <label for="path">Ścieżka:</label>
    <input type="text" id="path" name="path" required><br><br>
    <label for="directory">Katalog:</label>
    <input type="text" id="directory" name="directory" required><br><br>
    <label for="operation">Operacja:</label>
    <select id="operation" name="operation">
        <option value="read">Odczytaj</option>
        <option value="delete">Usuń</option>
        <option value="create">Stwórz</option>
    </select><br><br>
    <input type="submit" value="Wykonaj">
</form>

<?php
function handle_directory($path, $directory, $operation = "read")
{
    $full_path = $path . '/' . $directory;
    if (substr($path, -1) !== "/") {
        $full_path = $path . $directory;
    }
    if ($operation == "read") {
        if (is_dir($full_path)) {
            echo "Elementy w katalogu $directory:<br>";

            $files = scandir($full_path);
            foreach ($files as $file) {
                echo $file . "<br>";
            }
        } else {
            echo "Katalog $directory nie istnieje.";
        }
    }
    elseif ($operation == "delete") {
        if (is_dir($full_path)) {
            if (count(glob($full_path . "/*")) === 0) {
                if (rmdir($full_path)) {
                    echo "Katalog $directory został usunięty.";
                } else {
                    echo "Nie udało się usunąć katalogu $directory.";
                }
            } else {
                echo "Katalog $directory nie jest pusty.";
            }
        } else {
            echo "Katalog $directory nie istnieje.";
        }
    }
    elseif ($operation == "create") {
        if (!is_dir($full_path)) {
            if (mkdir($full_path)) {
                echo "Katalog $directory został stworzony.";
            } else {
                echo "Nie udało się stworzyć katalogu $directory.";
            }
        } else {
            echo "Katalog $directory już istnieje.";
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $path = $_POST["path"];
    $directory = $_POST["directory"];
    $operation = $_POST["operation"];

    handle_directory($path, $directory, $operation);
}
?>
</body>
</html>
