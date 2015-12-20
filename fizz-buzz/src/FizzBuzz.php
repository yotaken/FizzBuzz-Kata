<?php

namespace FizzBuzz;

class FizzBuzz
{
    private $data;

    /**
     * FizzBuzz constructor.
     * @param $data
     */
    public function __construct()
    {
        $this->data = $this->createNumberList();
    }


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
     * @return mixed
     */
    private function setBuzzIfNumberContainsFive($pos, $numbers)
    {
        $divider = $this->isDivisibleByThreeOrFive($pos);
        $has3InIt = $this->hasThreeInIt($pos);
        $has5InIt = $this->hasFiveInIt($pos);
        if(!$divider && !$has3InIt && $has5InIt) $numbers[$pos] = 'Buzz';

        return $numbers;
    }

    /**
     * @return mixed
     */
    private function setFizzBuzzIfNumberContainsThreeAndFive($pos, $numbers)
    {
        $divider = $this->isDivisibleByThreeOrFive($pos);
        $has3InIt = $this->hasThreeInIt($pos);
        $has5InIt = $this->hasFiveInIt($pos);
        if(!$divider && $has3InIt && $has5InIt) $numbers[$pos] = 'FizzBuzz';

        return $numbers;
    }

    /**
     * @param $numbers
     * @return mixed
     */
    public function createNumberList()
    {
        $numbers = array();
        for ($i = 1; $i < 101; $i++) {
            $numbers[$i] = $i;
            $numbers = $this->divisibleByThreeSetsPositionAsFizz($i, $numbers);
            $numbers = $this->divisibleByFiveSetsPositionAsBuzz($i, $numbers);
            $numbers = $this->divisibleByFiveAndThreeSetsPositionAsFizzBuzz($i, $numbers);
            $numbers = $this->setFizzIfNumberContainsThree($i, $numbers);
            $numbers = $this->setBuzzIfNumberContainsFive($i, $numbers);
            $numbers = $this->setFizzBuzzIfNumberContainsThreeAndFive($i, $numbers);
        }
        return $numbers;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}

//$numbers = new FizzBuzz();
//var_dump($numbers->getData());