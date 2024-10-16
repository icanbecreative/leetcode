<?php

class Solution {

/**
 * @param String $s
 * @return Integer
 */
    public static function lengthOfLastWord($s) {
        $arr = str_word_count($s, 1);   //returns an array with all the words
        return strlen(end($arr));       //return the last word
    }
}

var_dump(Solution::lengthOfLastWord("string"));
var_dump(Solution::lengthOfLastWord("string of shiait a  aa  "));
var_dump(Solution::lengthOfLastWord("string not a s t r inng    "));