<?php


// age 1 to 7  you are infant
// age 7 to 17 you are a teenager
// age 18 t0 49 you are an adult
// age 50 to 99 you are old
// else you are methussala

// $your_age = 65;
// if($your_age >=1 && $your_age <= 7){
//     echo "you are an infant";
// }
// else if($your_age < 7 && $your_age <=17){
//     echo "your are a teenager";
// }
// else if($your_age >=18 && $your_age<= 49){
//     echo "you are an adult";
// }
// else if($your_age >=50 && $your_age <= 99){
//     echo "you are an old";
// } 
// else{
//     echo "you are methussala or not born yet";
// }

// $firstname = 'john';
// $lastname = "james";
// $age = 9;
// $salary = 0;



// switch($age){
//     case 10:
//         echo "<br>Welcome";
//         break;
//     case 20:
//         echo "<br>Thank you";
//         break;
//     default:
//         echo "<br>Try again";
//         break;

// }

// loops
//while, for, foreach

//while
// echo "<br><br> Odd numbers from 1 to 100";
// $a = 1;
// $b = 100;

// while($a <= $b){
//     echo "<br>$a ";
//     $a+=2;
// }

// $d = 10;
// for($c= 0; $c < $d; $c++ ){
//     echo "<br>$c";
// } 


// $name = ["john", "james", "jack", "jerry"];
// $n = count($name);
// $y = 0;
// while($y < $n){
//     echo $name[$y]. "<br>" ;
//     $y++;

// }
// echo "<br><br>foreach loop";
// foreach($name as $v){
//     echo "<br>". $v;
// }
// associative array
$person = array("firstname" => "john", "lastname" => "james");
// $m = count($person);
// echo "<br><br>";
// echo $person["firstname"];
// foreach($person as $key => $value){
//     echo "<br> $key = $value";
// }
// echo "<br>";
// $i = "yo";
// echo printf($i."<br>");


// echo json_encode($person);

$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode (":", $data);
echo $user."<br>";
echo $pass."<br>";
echo $uid."<br>";
echo $gid."<br>";
echo $gecos."<br>";
echo $home."<br>";
echo $shell;

 ?>




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   




</body>
</html> -->