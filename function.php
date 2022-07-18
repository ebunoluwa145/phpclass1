<?php 
function welcome(){
    echo "welcome";
}
// function that returns
function thanks(){
    
    return 'thank you';
}

// function with parameters
function sumvalue($a, $b){
    echo $c = $a + $b;
}

//function with default value
function sumdefault($a = 2, $b = 4){
    echo $c = $a + $b ."<br>";
}




sumdefault();
sumdefault(5);
sumdefault(5, 2);

sumvalue(5,2);

// welcome();
// $greet = thanks();
// echo $greet;

?>