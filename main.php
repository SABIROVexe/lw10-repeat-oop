<?php

class Student{

    public $firstName;
    public $lastName;

    public $grades = [];

    public function addGrade($grade){
        $this->grades[] = $grade;
    }

    public function getAverage(){
        if(count($this->grades) == 0){
            echo("Оценок нет");
        }   

        echo("Среднее: \n");
        echo(array_sum($this->grades) / count($this->grades));
    }

}


$tom = new Student();
$tom->firstName = "Tom";
$tom->lastName = "Smith";

$tom->addGrade(2);
$tom->addGrade(3);
$tom->addGrade(5);
$tom->addGrade(5);
$tom->addGrade(4);



print_r($tom->grades);

$tom->getAverage() . "\n";