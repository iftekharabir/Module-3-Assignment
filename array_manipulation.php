<?php
$numbers = range(1, 10);

function removeEvenNumbers($arr) {
    $result = array();
    foreach ($arr as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }
    return $result;
}

$filteredNumbers = removeEvenNumbers($numbers);

print_r($filteredNumbers);
?>
