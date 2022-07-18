<?php 
class Person{
    public $name = "johnson";
    public $age = 25;

    function __construct(){
        echo " how do you do";
    }

    function getperson(){
        echo "welcome to person function";
    }
}
// $p = new Person();
// $p ->getperson();
// echo "<br>";
// echo $p -> name;
// echo "<br>";
// echo $p -> age;

// class Student{
//     public $name = 'johnson';
//     public $age = 25;
//     public $department = 'physics';
//     public $course = 'Mech Engr';



//     function addstudent($name, $age, $department, $course){
//         $name = $this->name;
//         echo "students name $name added successfully";
//     }
//     function editstudent($name, $age, $department, $course){
//         echo "students edited successfully";
//     }
//     function deletedstudent($name, $age, $department, $course){
//         echo "students deleted successfully";
//     }
//     function selectedstudent($name, $age, $department, $course){
//         echo "students selected successfully";
//     }
// }






class Student extends Person{
    public $name = 'johnson';
    public $age = 25;
    public $department = 'physics';
    public $course = 'Mech Engr';



    function addstudent($name, $age, $department, $course){
        $name = $this->name;
        echo "students name $name added successfully";
    }
    function editstudent($name, $age, $department, $course){
        echo "students edited successfully";
    }
    function deletedstudent($name, $age, $department, $course){
        echo "students deleted successfully";
    }
    function selectedstudent($name, $age, $department, $course){
        echo "students selected successfully";
    }
}

$std = new Student();
// echo $std -> addstudent('', '', '', '');
// echo "<br>";
// echo $std -> deletedstudent('', '', '', '');
// echo "<br>";
// echo $std -> selectedstudent('', '', '', '');
// echo "<br>";
// echo $std -> getperson();


?>




