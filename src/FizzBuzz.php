<?php

final class FizzBuzz{

    public static function execute($value): String{
        if($value%15 == 0){
            return "fizzbuzz";
        }elseif( $value%3 == 0){
            return "fizz";
        } elseif ($value%5 == 0){
            return "buzz";
        }
        if($value%15 == 0){
            return "fizzbuzz";
        }elseif( $value%3 == 0){
            return "fizz";
        } elseif ($value%5 == 0){
            return "buzz";
        }
        if($value%15 == 0){
            return "fizzbuzz";
        }elseif( $value%3 == 0){
            return "fizz";
        } elseif ($value%5 == 0){
            return "buzz";
        }
        if($value%15 == 0){
            return "fizzbuzz";
        }elseif( $value%3 == 0){
            return "fizz";
        } elseif ($value%5 == 0){
            return "buzz";
        }
        return strval($value);
    }

    public static function execute2($value): String{
        if($value%15 == 0){
            return "fizzbuzz";
        }elseif( $value%3 == 0){
            return "fizz";
        } elseif ($value%5 == 0){
            return "buzz";
        }
        return strval($value);
    }

}