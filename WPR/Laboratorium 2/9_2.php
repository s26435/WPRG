<?php
function recursiveFactorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * recursiveFactorial($n - 1);
    }
}
function iterativeFactorial($n)
{
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}
function recursiveFibonacci($n)
{
    if ($n <= 1) {
        return $n;
    } else {
        return recursiveFibonacci($n - 1) + recursiveFibonacci($n - 2);
    }
}
function iterativeFibonacci($n)
{
    $prevPrev = 0;
    $prev = 1;
    $result = $n;
    for ($i = 2; $i <= $n; $i++) {
        $result = $prev + $prevPrev;
        $prevPrev = $prev;
        $prev = $result;
    }
    return $result;
}
$number = 20;
$start = microtime(true);
$recursiveResult = recursiveFactorial($number);
$recursiveTime = microtime(true) - $start;
$start = microtime(true);
$iterativeResult = iterativeFactorial($number);
$iterativeTime = microtime(true) - $start;
$start = microtime(true);
$recursiveResult = recursiveFibonacci($number);
$recursiveTime = microtime(true) - $start;
$start = microtime(true);
$iterativeResult = iterativeFibonacci($number);
$iterativeTime = microtime(true) - $start;
echo '<pre>';
echo "Silnia($number):\n";
echo "Rekurencyjnie: $recursiveResult (czas: $recursiveTime s)\n";
echo "Nierekurencyjnie: $iterativeResult (czas: $iterativeTime s)\n\n";
echo "Wyraz ciągu Fibonacciego nr $number:\n";
echo "Rekurencyjnie: $recursiveResult (czas: $recursiveTime s)\n";
echo "Nierekurencyjnie: $iterativeResult (czas: $iterativeTime s)\n";
echo '</pre>';
