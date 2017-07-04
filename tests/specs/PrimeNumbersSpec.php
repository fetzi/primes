<?php

namespace tests\specs\Karriere\Primes;

use PhpSpec\ObjectBehavior;

class PrimeNumbersSpec extends ObjectBehavior
{
    function it_should_return_an_empty_array_for_one()
    {
        $this->generate(1)->shouldReturn([]);
    }

    function it_should_return_two_for_two()
    {
        $this->generate(2)->shouldReturn([2]);
    }

    function it_should_return_two_two_for_four()
    {
        $this->generate(4)->shouldReturn([2, 2]);
    }
}
