<?php

$data1 = [70,10,50,30,60,40];
$data2 = [70,60,40,30,10];

function maxTemp(array $input){
    $maxtemp = 0;
    foreach($input as $index=>$temp){
        $length= count($input)-1;
        if($index < $length){

            foreach(array_slice($input,$index+1,$length) as $newArr){
                $diff = $newArr - $temp;
                if($diff > $maxtemp && $diff > 0){
                    $maxtemp = $diff;
                }

            }
        }

    }

    return $maxtemp;
}

function getLength($string)
{
    // Split the string into an array of words.
    $words = explode('-', $string);

    // Get the last word in the array.
    $len= count($words) -1;
    
    while($len>0){
        $lastWordCount = strlen($words[$len]) ;
        if($lastWordCount > 0){
            return $lastWordCount;
        }
        $len -=1;
    }
    // Get the length of the last word.
    $lengthOfLastWord = 0;

    // Return the length of the last word.
    return $lengthOfLastWord;
}


// echo (getLength(("Elephant-Tiger-Lion-")));

$input = ["5","2","C","D","+"];
$input1 = ["5","10","c","D","9","+",'+'];

function calPoint(array $input){
    
    $points = [];
    foreach($input as $index=>$element){
        if($element == "D"){
            $newele = (int) $input[$index-1] * 2;
            if($newele == 0) continue;
            array_push($points,(string)$newele);

        }elseif($element == "C"){
            array_pop($points);
        }elseif($element == "+"){
            $newele = (int)$input[$index-1] + (int)$input[$index-2];
            if ($newele == 0) continue;

            array_push($points,(string)$newele);
        }
        else{
            array_push($points,(string)$element);
        }

    }

    return $points;
}

var_dump(calPoint($input));