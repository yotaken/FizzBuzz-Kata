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
            $has3InIt = strpos((string)$i, '3') !== false;
            $has5InIt = strpos((string)$i, '5') !== false;
            if (!$divider && $has3InIt && !$has5InIt) { $numbers[$i] = 'Fizz'; }
            if (!$divider && !$has3InIt && $has5InIt) { $numbers[$i] = 'Buzz'; }

        }

        return $numbers;
    }
}

$numbers = new FizzBuzz();
var_dump($numbers->getData());