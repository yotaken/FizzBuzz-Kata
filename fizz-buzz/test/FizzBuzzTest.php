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
        $this->assertTrue($fizzBuzz->getData()[1] == '1');
    }

    /** @test */
    public function third_number_is_fizz()
    {

        $fizzBuzz = new FizzBuzz();
        $this->assertTrue($fizzBuzz->getData()[3] == 'Fizz');
    }

    /** @test */
    public function fifth_number_is_buzz()
    {

        $fizzBuzz = new FizzBuzz();
        $this->assertTrue($fizzBuzz->getData()[5] == 'Buzz');
    }

    /** @test */
    public function fifteenth_number_is_fizzbuzz()
    {

        $fizzBuzz = new FizzBuzz();
        $this->assertTrue($fizzBuzz->getData()[15] == 'FizzBuzz');
    }

    /** @test */
    public function data_returned_has_100_numbers()
    {

        $fizzBuzz = new FizzBuzz();
        $this->assertTrue(count($fizzBuzz->getData()) == 100);
    }

    /** @test */
    public function every_third_number_is_fizz()
    {

        $fizzBuzz = new FizzBuzz();
        $numbers = $fizzBuzz->getData();
        for($i=1; $i<count($numbers);$i++){
            if($i%3 == 0 && $i%5 != 0)
                $this->assertTrue($numbers[$i] == 'Fizz');
        }
    }

    /** @test */
    public function every_fifth_number_is_buzz()
    {

        $fizzBuzz = new FizzBuzz();
        $numbers = $fizzBuzz->getData();
        for($i=1; $i<count($numbers);$i++){
            if($i%5 == 0 && $i%3 != 0)
                $this->assertTrue($numbers[$i] == 'Buzz');
        }
    }
}
