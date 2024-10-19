<?php

function calculateResult($marks) {
    $totalMarks = 0;
    $isFail = false;

   
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.\n";
            return;
        }
        if ($mark < 33) {
            $isFail = true;
        }
        $totalMarks += $mark;
    }

    
    if ($isFail) {
        echo "Student has failed.\n";
        return;
    }

    
    $averageMarks = $totalMarks / count($marks);

    
    $grade = '';
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = 'A+';
            break;
        case ($averageMarks >= 70 && $averageMarks <= 79):
            $grade = 'A';
            break;
        case ($averageMarks >= 60 && $averageMarks <= 69):
            $grade = 'A-';
            break;
        case ($averageMarks >= 50 && $averageMarks <= 59):
            $grade = 'B';
            break;
        case ($averageMarks >= 40 && $averageMarks <= 49):
            $grade = 'C';
            break;
        case ($averageMarks >= 33 && $averageMarks <= 39):
            $grade = 'D';
            break;
        default:
            $grade = 'F';
    }

    
    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: $averageMarks\n";
    echo "Grade: $grade\n";
}

$marks = [85, 78, 66, 92, 55];
calculateResult($marks);
?>
