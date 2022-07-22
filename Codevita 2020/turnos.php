<?php

$pt = '';
$student = array(
    'a' => 1,
    'b' => 2,
    'c' => 3
    
);

$turn = array(1,2,3);

for($i=0; $i<= $turn; $i++){
    $i = $turn;
                                                    
    if($pt = $turn[$i]){
         
        if($turn[$i] = 1 || $turn[$i] = 3){
            $student = $student-1;
            echo $student;  
        }else {
            $student = $student+1;   
            echo $student;
        }    
    }
}

