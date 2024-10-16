<?php
//print("hello world");


class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    public static function isPalindrome($x) {
    
        $reverseNumber = 0;
        $tempNumber = (int)$x;         //store the value of $x parameter for future comparison.

        while($tempNumber > 0){
            $modulo = $tempNumber % 10;      //modulo - returns last number
            $tempNumber -= $modulo;          //substract the modulo number from original.
            $tempNumber /= 10;               //divide by 10
            $reverseNumber = ($reverseNumber * 10) + $modulo;     //set reverse number.
        }

        return $x === $reverseNumber;
    }

}

var_dump(Solution::isPalindrome(101));
var_dump(Solution::isPalindrome(-1));
var_dump(Solution::isPalindrome(-121));
return;
// var_dump(log(9999,10));
// var_dump(array_map('intval',str_split(1000)));
//var_dump(12345 / 10000 % 10);

//12121
print_r('------------');
$nb = 101;
$nnb_arr= [];
$nnb = 0;

while ($nb > 0) {
    $modulo = $nb % 10; //mod
    //array_push($nnb_arr, $modulo);   
    $nb -= $modulo; 
    $nb = $nb / 10;
    $nnb = ($nnb * 10) + $modulo;
}
print_r($nnb);

// number * 10 + next_number
// eg: for numbers 4,2,3
// {4*10+2 = 42} {42*10+3 = 423} and on. 


//var_dump(1234%10);