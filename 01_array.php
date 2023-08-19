<?php
$fruits = ['mango', ' strawberry', ' blueberry', ' quava'];
// Echo count($fruits);

// foreach loop to loop through an array

// foreach($fruits as $fruit){
//     echo $fruit;
// }

// for loop to loop through an array

// for($x = 0; $x < count($fruits); $x++){
//     echo $fruits[$x];
// }
// do_while loop to loop through an array


$x = 0;
 do{
    echo $fruits[$x];
    $x++;
 }while($x < count($fruits));



?>