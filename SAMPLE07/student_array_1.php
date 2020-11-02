<?php
session_start();
$student_array = [
    ['num' => 1, 'name' => '阿部　健一郎', 'livein'=>'大阪市','gender'=>'男性'],
    ['num' => 2, 'name' => '石田　瞳', 'livein'=>'吹田市','gender'=>'女性'],
    ['num' => 3, 'name' => '加藤　千賀子', 'livein'=>'奈良市','gender'=>'女性'],
    ['num' => 4, 'name' => '島田　興蔵', 'livein'=>'高槻市','gender'=>'男性'],
];
$_SESSION['students'] = $student_array;

header('location:student_array_2.php');
exit();