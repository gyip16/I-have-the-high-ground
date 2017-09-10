<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 2017-09-07
 * Time: 2:09 PM
 */

class Student {

    /*
     * Constructor
     *
     * initialize student with String surname, String first name, emails array
     * and grades array.
     */
    function __construct() {

        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();

    }

    /*
     * add_email
     *
     * Add email to emails array
     *
     * Parameters
     * $which = key
     * $address = email address
     */
    function add_email ($which, $address) {

        $this->emails[$which] = $address;

    }

    /*
     * add_grades
     *
     * Add grade to grades array
     *
     * Parameters
     * $grade = grade score
     */

    function add_grade($grade) {

        $this->grades[] = $grade;

    }

    /*
     * average
     *
     * calculates the average grade of student
     *
     * Returns a double value
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return round($total / count($this->grades),2);
    }

    /*
     * toString
     *
     * displays Student information
     *
     * Returns String
     */
    function toString() {
        //name of student
        $result = "<h4>". $this->first_name . ' ' . $this->surname . "</h4><hr>";
        //start table
        $result .="<table>";
        //display grade average
        $result .= '<tr><td>Grade Average: </td><td>' . $this->average() . "%". "</td></tr>";
        //display array of email
        foreach ($this-> emails as $which => $what)
            $result .= "<tr><td>" . $which . ':</td><td>' . $what . "</td></tr>";
        //end table
        $result .= "</table><hr><br>";
        //return string
        return '' . $result . '';

    }

}

?>