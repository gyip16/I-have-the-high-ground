<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 2017-09-08
 * Time: 11:38 AM
 */

include('Student.php');

//initialize student class array
$students = array();

//create first student
$first = new Student();
//add student name
$first->surname = "Doe";
$first->first_name = "John";
//add email(s)
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
//add grade(s)
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
//give student a key in students array
$students['j123'] = $first;

//create second student
$second = new Student();
//add student name
$second->surname = "Einstein";
$second->first_name = "Albert";
//add email(s)
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
//add grade(s)
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
//give student a key in students array
$students['a456'] = $second;

//sort students array
ksort($students);

//display students array
foreach($students as $student)
    echo $student->toString();

?>