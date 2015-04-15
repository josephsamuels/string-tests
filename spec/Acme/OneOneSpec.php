<?php namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OneOneSpec extends ObjectBehavior
{
    public function it_determines_if_string_characters_are_unique()
    {
        $this->uniqueCharacters('Derp')->shouldReturn(true);
        $this->uniqueCharacters('Hello')->shouldReturn(false);
    }
}
