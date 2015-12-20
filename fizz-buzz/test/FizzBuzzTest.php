<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_test_something()
    {

        $fizzBuzz = new FizzBuzz();
        $this->assertTrue($fizzBuzz->changeMe());
    }

    /** @test */
    public function first_number_is_one()
    {

        $fizzBuzz = new FizzBuzz();
        $this->assertTrue($fizzBuzz->getData()[0] == '1');
    }

    /** @test */
    public function third_number_is_fizz()
    {

        $fizzBuzz = new FizzBuzz();
        $this->assertTrue($fizzBuzz->getData()[2] == 'Fizz');
    }
}
