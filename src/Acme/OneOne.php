<?php namespace Acme;

class OneOne
{
    public function uniqueCharacters($str)
    {
        for($i = 0; $i < strlen($str); $i++) {
            for($j = $i + 1; $j < strlen($str); $j++) {
                if($str[$i] == $str[$j]) {
                    return false;
                }
            }
        }

        return true;
    }
}
