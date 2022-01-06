<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase {
    
    /**
     * @dataProvider provider
     */
    public function testFizzBuzz($input, $expectedResult): void{
        $this->assertEquals($expectedResult, FizzBuzz::execute($input));
    }

    public function provider(){
        return [
            [1,"1"],
            [2,"2"],
            [3,"fizz"],
            [4,"4"],
            [5,"buzz"],
            [6,"fizz"],
            [7,"7"],
            [8,"8"],
            [9,"fizz"],
            [10,"buzz"],
            [11,"11"],
            [12,"fizz"],
            [13,"13"],
            [14,"14"],
            [15,"fizzbuzz"],
            [30,"fizzbuzz"]

        ];
    }
   
}