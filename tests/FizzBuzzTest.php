<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase {
    
    /**
     * @dataProvider provider
     */
    public function testFizzBuzz($input,$expectedResult): void {
        $this->assertEquals($expectedResult, FizzBuzz::execute($input));
    }

    public function provider(){
        return [
            [1,"1"],
            [2,"2"],
            [3,"Fizz"],
            [4,"4"],
            [5,"Buzz"],
            [6,"Fizz"],
            [7,"7"],
            [8,"8"],
            [9,"Fizz"],
            [10,"Buzz"],
            [11,"11"],
            [12,"Fizz"],
            [13,"13"],
            [14,"14"],
            [15,"FizzBuzz"]
        ];
    }
}