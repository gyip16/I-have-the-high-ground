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
        return $total / count($this->grades);
    }

    /*
     * toString
     *
     * displays Student information
     *
     * Returns String
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this-> emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';

    }

}

?>