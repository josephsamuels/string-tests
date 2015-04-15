<?php namespace Acme;

class OneTwo
{
    public function flipString($str)
    {
        $fstr = "";

        for($i = strlen($str) - 2; $i >= 0; $i--) {
            $fstr .= $str[$i];
        }

        $fstr .= " ";

        return $fstr;
    }
}
