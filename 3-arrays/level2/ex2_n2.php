<?php


$students_group_A = array(
    "Marc" => array(8, 5, 7, 6, 9),
    "Beth" => array(6, 5, 4, 6, 6),
    "Peter" => array(4, 5, 3, 5, 4),
    "Liz" => array(8, 8, 10, 9, 9),
    "Ana" => array(6, 5, 7, 6, 6),
    "Cindy" => array(7, 8, 5, 9, 8),
    "Yasmin" => array(3, 4, 3, 4, 4),
    "Cinthia" => array(7, 8, 6, 5, 6),
    "David" => array(6, 5, 4, 5, 4)
);

/*print_r ($students_group_A)."<br>";
foreach($students_group_A as $student => $marks){
    echo $student. ": <br>";
    
    foreach($marks as $marks){
    echo $marks. "<br>"; 
    }
}*/
function calculate_studentAverage($group_student) {
    $average_student = array();
    foreach($group_student as $student => $marks){
        $calculate_studentAverage = array_sum($marks) / count($marks);
        $average[$student] = $calculate_studentAverage;
    }
    return $average_student;
}

function calculate_classAverage($group_students) {
    $sum_group = array();
    $total_students = count($group_students);

    foreach($group_students as $students => $marks){
       $sum_group = array_merge($sum_group, $marks);
    }

    $average_group = array_sum($sum_group) / count($sum_group);

    return $average_group;
}


$averagexStudent = calculate_studentAverage($students_group_A);
    foreach($averagexStudent as $student => $averageStudent){
         echo "The average of " . $student . ": " . $averageStudent . "<br>";
}


$average_group_A = calculate_classAverage($students_group_A);
echo "The average of this class is: ". $average_group_A;


?>