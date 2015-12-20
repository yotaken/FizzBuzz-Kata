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
     * @return array
     */
    public function getData()
    {
        $numbers = array();
        for($i = 1; $i < 101; $i++){
            $numbers[$i] = $i;
            if($i == 3) $numbers[$i] = 'Fizz';
            if($i == 5) $numbers[$i] = 'Buzz';
            if($i == 15) $numbers[$i] = 'FizzBuzz';
        }

        return $numbers;
    }
}
