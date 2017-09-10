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

//create third student
$third = new Student();
//add student name
$third->surname = "Yip";
$third->first_name = "Gabriel";
//add email(s)
$third->add_email('home','gabrielyty@gmail.com');
$third->add_email('school','gyip16@my.bcit.ca');
//add grade(s)
$third->add_grade(90);
$third->add_grade(80);
$third->add_grade(95);
//give student a key in students array
$students['a00908773'] = $third;

//sort students array
ksort($students);

echo "<html>";
echo "<head>";
//google fonts
echo "<link href='https://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet'>";
echo "<style>";
//font styling
echo "h1 { font-family: 'Abril Fatface', serif; }";
echo "h4 { font-size: 20px; background-color: #DDDDDD; margin: 0px;}";
echo "</style>";
echo "</head>";
echo "<body>";
//title
echo "<h1>Student Records</h1>";
//display students array
foreach($students as $student)
    echo $student->toString();

echo "</body>";
echo "</html>";
?>