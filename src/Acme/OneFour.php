<?php namespace Acme;

class OneFour
{
    public function checkAnagram($str1, $str2)
    {
        for($i = 0; $i < strlen($str1); $i++) {
            $found = false;

            for($j = 0; $j < strlen($str2); $j++) {
                if($str1[$i] == $str2[$j]) {
                    $found = true;
                    $str2[$j] = "";
                }
            }

            if(!$found)
                return false;
        }

        return true;
    }
}
