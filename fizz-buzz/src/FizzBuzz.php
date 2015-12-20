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
            $divider = true;
            $numbers[$i] = $i;
            if($i % 3 == 0) $numbers[$i] = 'Fizz';
            if($i % 5 == 0) $numbers[$i] = 'Buzz';
            if($i % 3 == 0 && $i % 5 == 0) $numbers[$i] = 'FizzBuzz';
            if($i%5 != 0 && $i%3 != 0) $divider = false;
            if (!$divider && strpos((string)$i,'3') !== false) $numbers[$i] = 'Fizz';
        }

        return $numbers;
    }
}