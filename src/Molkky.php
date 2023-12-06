<?php

namespace App;

class Molkky
{
    public function getScore(array $bowlingSeries): int
    {
        $result = 0;


        return $result;
    
    }

    public function isOneKeel($array): bool
    {
        if (count ($array) === 1){
            return true;
        }
        return false;
    }

    public function isZeroKeel($array)
    {
        if (count ($array) === 0){
            return true;
        }
        return false;
    }

    public function IsWin(int $value):bool 
    {
        if ($value ===50) {
        return true; 
        }
        return false;
    }

    public function isOver50(int $score): bool
    {
        if ($score > 50) {
            return true; 
            }
            return false;
    }

    public function countPointsByThrow(array $throw): int
    {
        if($this->isZeroKeel($throw)){
            return 0;
        }
        if($this->isOneKeel($throw)){
            return $throw[0];
        }
        return count($throw);
    }
}
