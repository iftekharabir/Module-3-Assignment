<?php
$grades = array(85, 92, 78, 88, 95);

function sortGradesDescending($arr) {
    arsort($arr);
    return $arr;
}

$sortedGrades = sortGradesDescending($grades);

print_r($sortedGrades);
?>
