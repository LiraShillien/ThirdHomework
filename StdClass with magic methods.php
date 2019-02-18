<?php
class Student
{
    private $std = [];

    public function __set($std, $value)
    {
        $this->std['firstname'] = $value['firstname'];
        $this->std['lastname'] = $value['lastname'];
        $this->std['gender'] = $value['gender'];
        $this->std['status'] = $value['status'];
        $this->std['gpa'] = $value['gpa'];
        $this->isValidGpa();
    }

    public function __get($std)
    {
        foreach ($this->std as $item) {
            echo $item . PHP_EOL;
        }
    }

    public function studyTime($studyTime)
    {
        $this->std['gpa'] += log($studyTime);
        return $this->std['gpa'];
    }


    private function isValidGpa()
    {
            if($this->std['gpa']>4){
                $this->std['gpa'] = 4;
            }
    }

}

class Showing
{

    public function __construct($array)
    {
        foreach ($array as $key=>$value){
            $value->__get('std');
            echo PHP_EOL;
        }
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
        $studentList[$key]->__set('std', $value);
    }
    return $studentList;
}

function newGpa($array)
{
    $time = [60, 100, 40, 300, 1000];
    $i = 0;
    foreach ($array as $value){
        $value->gpa = $value->StudyTime($time[$i]);
        $i++;
    }
    return $array;
}

$obj = new Showing(objectsCreation($students));