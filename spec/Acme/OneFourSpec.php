<?php namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OneFourSpec extends ObjectBehavior
{
    function it_determines_if_two_strings_are_anagrams()
    {
        $this->checkAnagram('cone', 'once')->shouldReturn(true);
        $this->checkAnagram('hello', 'world')->shouldReturn(false);
    }
}
