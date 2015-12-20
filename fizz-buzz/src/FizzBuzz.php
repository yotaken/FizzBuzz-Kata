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
     * @return mixed
     */
    private function divisibleByThreeSetsPositionAsFizz($pos, $numbers)
    {
        if($pos % 3 == 0) $numbers[$pos] = 'Fizz';
        return $numbers;
    }

    /**
     * @return mixed
     */
    private function divisibleByFiveSetsPositionAsBuzz($pos, $numbers)
    {
        if($pos % 5 == 0) $numbers[$pos] = 'Buzz';
        return $numbers;
    }

    /**
     * @return mixed
     */
    private function divisibleByFiveAndThreeSetsPositionAsFizzBuzz($pos, $numbers)
    {
        if($pos % 3 == 0 && $pos % 5 == 0) $numbers[$pos] = 'FizzBuzz';
        return $numbers;
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
            $numbers = $this->divisibleByThreeSetsPositionAsFizz($i,$numbers);
            $numbers = $this->divisibleByFiveSetsPositionAsBuzz($i,$numbers);
            $numbers = $this->divisibleByFiveAndThreeSetsPositionAsFizzBuzz($i,$numbers);
            if($i%5 != 0 && $i%3 != 0) $divider = false;
            $has3InIt = strpos((string)$i, '3') !== false;
            $has5InIt = strpos((string)$i, '5') !== false;
            if (!$divider && $has3InIt && !$has5InIt) { $numbers[$i] = 'Fizz'; }
            if (!$divider && !$has3InIt && $has5InIt) { $numbers[$i] = 'Buzz'; }
            if (!$divider && $has3InIt && $has5InIt) { $numbers[$i] = 'FizzBuzz'; }

        }

        return $numbers;
    }
}

$numbers = new FizzBuzz();
var_dump($numbers->getData());