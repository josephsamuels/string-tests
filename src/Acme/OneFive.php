<?php namespace Acme;

class OneFive
{
    public function replaceSpaces($str)
    {
        $output = "";

        for($i = 0; $i < strlen($str); $i++) {
            if($str[$i] == " ") {
                $output .= "%20";
            } else {
                $output .= $str[$i];
            }
        }

        return $output;
    }
}