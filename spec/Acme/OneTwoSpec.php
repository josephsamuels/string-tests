<?php namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OneTwoSpec extends ObjectBehavior
{
    function it_flips_c_style_string()
    {
        $this->flipString('abcd ')->shouldReturn('dcba ');
    }
}
