<?php
$cookie_name = "visit_count";
$cookie_expiration = time() + (60 * 60 * 24 * 365);
if (isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
} else {
    $cookie_value = 0;
}
if (!isset($_COOKIE["page_refreshed"])) {
    setcookie("page_refreshed", "1", time() + 10);
    $cookie_value++;
    setcookie($cookie_name, $cookie_value, $cookie_expiration);
}
if ($cookie_value == 1) {
    echo "Witaj, to Twoja pierwsza wizyta na tej stronie!";
} elseif ($cookie_value >= 10) {
    echo "Dziękujemy za regularne odwiedziny!";
} else {
    echo "To Twoja " . $cookie_value . ". wizyta na tej stronie.";
}
