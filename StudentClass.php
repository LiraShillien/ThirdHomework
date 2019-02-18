<?php

//exercise 1,2,3.

class Student
{
    public $firstname;
    public $lastname;
    public $gender;
    public $status;
    public $gpa;

    public function showMyself()
    {
        echo $this->firstname . PHP_EOL, $this->lastname . PHP_EOL,
            $this->gender . PHP_EOL, $this->status . PHP_EOL,
            $this->isValidGpa() . PHP_EOL;

    }

    public function studyTime($studyTime)
    {
        $this->gpa += log($studyTime);
        return $this->gpa;
    }


    private function isValidGpa()
    {
        return ($this->gpa > 4)
            ? 4
            : $this->gpa;

    }

    public function setValues($value)
    {
        $this->firstname = $value['firstname'];
        $this->lastname = $value['lastname'];
        $this->gender = $value['gender'];
        $this->status = $value['status'];
        $this->gpa = $value['gpa'];
    }
}


$students = [
    [
        'firstname' => 'Mike',
        'lastname' => 'Barnes',
        'gender' => 'male',
        'status' => 'freshman',
        'gpa' => '4'
    ],
    [
        'firstname' => 'Jim',
        'lastname' => 'Nickerson',
        'gender' => 'male',
        'status' => 'sophomore',
        'gpa' => '3'
    ],
    [
        'firstname' => 'Jack',
        'lastname' => 'Indabox',
        'gender' => 'male',
        'status' => 'junior',
        'gpa' => '2.5'
    ],
    [
        'firstname' => 'Jane',
        'lastname' => 'Miller',
        'gender' => 'female',
        'status' => 'senior',
        'gpa' => '3.6'
    ],
    [
        'firstname' => 'Mary',
        'lastname' => 'Scott',
        'gender' => 'female',
        'status' => 'senior',
        'gpa' => '2.7'
    ],
];



function objectsCreation($students)
{
    $studentList = [];
    foreach ($students as $key => $value) {
        $studentList[$key] = new Student();
        $studentList[$key]->setValues($value);
    }
    return $studentList;
}


function objectsShowing($array)
{
    foreach ($array as $key=>$value){
        $value->showMyself();
        echo PHP_EOL;
    }
}


function newGpa($array)
{
    $time = [60, 100, 40, 300, 1000];
    $i = 0;
    foreach ($array as $value){
        $value->gpa = $value->StudyTime($time[$i]);
        //echo $value->gpa;
        $i++;
    }
    return $array;
}

objectsShowing(objectsCreation($students));

//Showing with new gpa:
//objectsShowing(newGpa(objectsCreation($students)));
