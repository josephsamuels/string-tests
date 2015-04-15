<?php namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OneThreeSpec extends ObjectBehavior
{
    function it_removes_duplicate_characters_from_strings()
    {
        $this->removeDuplicates('Hello World')->shouldReturn('Helo Wrd');
    }
}
