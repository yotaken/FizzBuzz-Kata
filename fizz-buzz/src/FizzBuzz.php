<?php

namespace FizzBuzz;

class FizzBuzz
{

    /**
     * @return bool
     */
    public function changeMe()
    {
        return true;
    }

    /**
     * @return string
     */
    public function getData()
    {
        $numbers = array();
        $numbers[1] = 1;
        $numbers[3] = 'Fizz';
        $numbers[5] = 'Buzz';
        return $numbers;
    }
}
