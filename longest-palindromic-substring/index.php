<?php

class Solution {

/**
 * @param String $s
 * @return String
 */
    public static function longestPalindrome($s) {
        $arr = str_split($s);
        
        foreach($arr as $key => $value){

        }
        // ----- all this shit is wrong.
        // $arrReverse = array_reverse($arr);
        // $arrIntersect = array_intersect_assoc($arr, $arrReverse);

       
        // foreach($arrIntersect as $key => $val){
        //     if(!array_key_exists($key+1, $arrIntersect) && !array_key_exists($key-1, $arrIntersect)){
        //         unset($arrIntersect[$key]);
        //     }
        // }
        // return $arrIntersect;
    }
}

var_dump(Solution::longestPalindrome('thisabbaisit'));
