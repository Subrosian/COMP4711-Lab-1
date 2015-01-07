<?php


//A Student class.
class Student {
    
    //Constructor for the Student class
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //Adds an e-mail of type $which for the student.
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    
    //Adds a grade for the student
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //Adds an average grade for the student.
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    //Returns a string consisting of student data.
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .=' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
                $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}