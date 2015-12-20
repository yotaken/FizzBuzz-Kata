<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    private $fizzBuzz;
    private $numbers;

    protected function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
        $this->numbers = $this->fizzBuzz->getData();
    }

    /** @test */
    public function first_number_is_one()
    {
        $this->assertTrue($this->numbers[1] == '1');
    }

    /** @test */
    public function third_number_is_fizz()
    {
        $this->assertTrue($this->numbers[3] == 'Fizz');
    }

    /** @test */
    public function fifth_number_is_buzz()
    {
        $this->assertTrue($this->numbers[5] == 'Buzz');
    }

    /** @test */
    public function fifteenth_number_is_fizzbuzz()
    {
        $this->assertTrue($this->numbers[15] == 'FizzBuzz');
    }

    /** @test */
    public function data_returned_has_100_numbers()
    {
        $this->assertTrue(count($this->numbers) == 100);
    }

    /** @test */
    public function every_third_number_is_fizz()
    {
        $numbers = $this->numbers;
        for($i=1; $i<count($numbers);$i++){
            if($i%3 == 0 && $i%5 != 0){ $this->assertTrue($numbers[$i] == 'Fizz');}
        }
    }

    /** @test */
    public function every_fifth_number_is_buzz()
    {
        $numbers = $this->numbers;
        for($i=1; $i<count($numbers);$i++){
            if($i%5 == 0 && $i%3 != 0) {$this->assertTrue($numbers[$i] == 'Buzz');}
        }
    }

    /** @test */
    public function every_fifth_and_third_number_is_fizzbuzz()
    {
        $numbers = $this->numbers;
        for($i=1; $i<count($numbers);$i++){
            if($i%5 == 0 && $i%3 == 0) {$this->assertTrue($numbers[$i] == 'FizzBuzz');}
        }
    }

    /** @test */
    public function if_number_has_three_in_it_its_already_fizz()
    {
        $numbers = $this->numbers;
        for($i=1; $i<count($numbers);$i++){
            $divider = true;
            if($i%5 != 0 && $i%3 != 0) $divider = false;
            $has3InIt = strpos((string)$i, '3') !== false;
            $has5InIt = strpos((string)$i, '5') !== false;
            if (!$divider && $has3InIt && !$has5InIt) { $this->assertTrue($numbers[$i] == 'Fizz'); }
        }
    }

    /** @test */
    public function if_number_has_five_in_it_its_already_buzz()
    {
        $numbers = $this->numbers;
        for($i=1; $i<count($numbers);$i++){
            $divider = true;
            $has3InIt = strpos((string)$i, '3') !== false;
            $has5InIt = strpos((string)$i, '5') !== false;
            if($i%5 != 0 && $i%3 != 0) $divider = false;
            if (!$divider && !$has3InIt && $has5InIt) { $this->assertTrue($numbers[$i] == 'Buzz'); }
        }
    }

    /** @test */
    public function if_number_has_five_and_three_in_it_its_already_fizzbuzz()
    {
        $numbers = $this->numbers;
        for($i=1; $i<count($numbers);$i++){
            $divider = true;
            $has3InIt = strpos((string)$i, '3') !== false;
            $has5InIt = strpos((string)$i, '5') !== false;
            if($i%5 != 0 && $i%3 != 0) $divider = false;
            if (!$divider && $has3InIt && $has5InIt) { $this->assertTrue($numbers[$i] == 'FizzBuzz'); }
        }
    }
}
