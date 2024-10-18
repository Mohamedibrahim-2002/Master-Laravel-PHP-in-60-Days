<?php

// Array of students with name, age, and grade
$students = [
    ["name" => "Mohamed", "age" => 20, "grade" => 98],
    ["name" => "Ibrahim", "age" => 22, "grade" => 70],
    ["name" => "Thameem", "age" => 21, "grade" => 90],
];

// Extract grades from the students array
foreach ($students as $student) {
    $grades[] = $student['grade'];
}

// 1. Function to calculate the average grade
function calculateAverage($grades) {
    $total = array_sum($grades); // Sum up all grades
    $average = $total / count($grades); // Calculate the average
    return $average;
}

// 2. Function to find the student with the highest grade
function findHighestGrade($students) {
    $highest = $students[0]; // Assume the first student has the highest grade initially
    foreach ($students as $student) {
        if ($student['grade'] > $highest['grade']) {
            $highest = $student;
        }
    }
    return $highest;
}

// 3. Function to get students with grades above a certain threshold
function studentsAboveThreshold($students, $threshold) {
    $filtered = [];
    foreach ($students as $student) {
        if ($student['grade'] > $threshold) {
            $filtered[] = $student;
        }
    }
    return $filtered;
}

// Display the results

// 1. Calculate and display the average grade
$averageGrade = calculateAverage($grades);
echo "The average grade is: " . $averageGrade . "<br>";

// 2. Find and display the student with the highest grade
$topStudent = findHighestGrade($students);
echo "The student with the highest grade is: " . $topStudent['name'] . " with a grade of " . $topStudent['grade'] . "<br>";

// 3. Display students with grades above a threshold (e.g., 80)
$aboveThreshold = studentsAboveThreshold($students, 80);
echo "Students with grades above 80:<br>";
foreach ($aboveThreshold as $student) {
    echo $student['name'] . " with a grade of " . $student['grade'] . "<br>";
}

?>
