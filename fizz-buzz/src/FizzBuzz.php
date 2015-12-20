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
     * @return bool
     */
    private function isDivisibleByThreeOrFive($pos)
    {
        if($pos%5 != 0 && $pos%3 != 0){return false;}
        return true;
    }

    /**
     * @return bool
     */
    private function hasThreeInIt($pos)
    {
        $hasThreeInIt = strpos((string)$pos, '3') !== false;
        return $hasThreeInIt;
    }

    /**
     * @return bool
     */
    private function hasFiveInIt($pos)
    {
        $hasFiveInIt = strpos((string)$pos, '5') !== false;
        return $hasFiveInIt;
    }

    /**
     * @return mixed
     */
    private function setFizzIfNumberContainsThree($pos, $numbers)
    {
        $divider = $this->isDivisibleByThreeOrFive($pos);
        $has3InIt = $this->hasThreeInIt($pos);
        $has5InIt = $this->hasFiveInIt($pos);
        if(!$divider && $has3InIt && !$has5InIt) $numbers[$pos] = 'Fizz';

        return $numbers;
    }

    /**
     * @return array
     */
    public function getData()
    {
        $numbers = array();
        for($i = 1; $i < 101; $i++){
            $numbers[$i] = $i;
            $numbers = $this->divisibleByThreeSetsPositionAsFizz($i,$numbers);
            $numbers = $this->divisibleByFiveSetsPositionAsBuzz($i,$numbers);
            $numbers = $this->divisibleByFiveAndThreeSetsPositionAsFizzBuzz($i,$numbers);
            $divider = $this->isDivisibleByThreeOrFive($i);
            $has3InIt = $this->hasThreeInIt($i);
            $has5InIt = $this->hasFiveInIt($i);
            $numbers = $this->setFizzIfNumberContainsThree($i,$numbers);
            if (!$divider && !$has3InIt && $has5InIt) { $numbers[$i] = 'Buzz'; }
            if (!$divider && $has3InIt && $has5InIt) { $numbers[$i] = 'FizzBuzz'; }

        }

        return $numbers;
    }
}

$numbers = new FizzBuzz();
var_dump($numbers->getData());