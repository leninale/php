<?php

$studentsCount = rand(1, 1000000);

if($studentsCount == 1){
    echo "на учебе $studentsCount студент";
} elseif ($studentsCount > 1 && $studentsCount < 5 ){
    echo "на учебе $studentsCount студента";
} else {
    echo "на учебе $studentsCount студентов";
}
