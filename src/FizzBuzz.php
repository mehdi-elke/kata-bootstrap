<?php declare(strict_types=1);

final class FizzBuzz{

    public static function execute( $value): String {
        
        if($value%15==0){
            return "FizzBuzz";
        } elseif( $value%3 == 0){
            return "Fizz";
        } elseif ($value%5==0){
            return "Buzz";
        }
        return strval($value);
    }

}