<?php
$studentGrades = array(
    array("Math" => 85, "English" => 92, "Science" => 78),
    array("Math" => 90, "English" => 88, "Science" => 94),
    array("Math" => 78, "English" => 85, "Science" => 89)
);

function calculateAverageGrades($gradesArray) {
    $averages = array();
    
    foreach ($gradesArray as $student) {
        $total = array_sum($student);
        $count = count($student);
        $average = $total / $count;
        $averages[] = $average;
    }
    
    return $averages;
}

$averageGrades = calculateAverageGrades($studentGrades);

// Print the average grades for each student
foreach ($averageGrades as $key => $average) {
    echo "Student " . ($key + 1) . " Average Grade: " . $average . "\n";
}
?>
