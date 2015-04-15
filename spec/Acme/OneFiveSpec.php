<?php namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OneFiveSpec extends ObjectBehavior
{
    function it_replaces_spaces_with_percent_20()
    {
        $this->replaceSpaces('Hello World')->shouldReturn('Hello%20World');
    }
}
