<?php namespace Acme;

class OneThree
{
    public function removeDuplicates($str)
    {
        $uniqueFlower = "";

        for($i = 0; $i < strlen($str); $i++) {
            $found = false;

            for($j = 0; $j < strlen($uniqueFlower); $j++) {
                if($uniqueFlower[$j] == $str[$i]) {
                    $found = true;
                }
            }

            if(!$found) {
                $uniqueFlower .= $str[$i];
            }
        }

        return $uniqueFlower;
    }
}
