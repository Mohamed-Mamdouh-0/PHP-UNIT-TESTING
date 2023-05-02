<?php
use PHPUnit\Framework\TestCase;
require './src/CalculateFactorial.php';
class CalculateFactorialTest  extends TestCase{
    public function testFactorialZero(){
        $c = new CalculateFactorial;
        $result = $c->factorial(0);
        $this->assertEquals(1,$result);
    }
    public function testFactorialOne(){
        $c = new CalculateFactorial;
        $result = $c->factorial(1);
        $this->assertEquals(1,$result);
    }
    public function testFactorialFive(){
        $c = new CalculateFactorial;
        $result = $c->factorial(5);
        $this->assertEquals(120,$result);
    }
    public function testFactorialFalse(){
        $c = new CalculateFactorial;
        $result = $c->factorial(false);
        $this->assertEquals(null,$result);
    }
    public function testFactorialNegativeThree(){
        $c = new CalculateFactorial;
        $result = $c->factorial(-3);
        $this->assertEquals(null,$result);
    }
    public function testFactorialOneAndHalf(){
        $c = new CalculateFactorial;
        $result = $c->factorial(1.5);
        $this->assertEquals(null,$result);
    }
    public function testFactorialLetters(){
        $c = new CalculateFactorial;
        $result = $c->factorial("abc");
        $this->assertEquals(null,$result);
    }
    public function testFactorialRandomNum(){
        $randomNum  = rand(3,100);
        $c = new CalculateFactorial;
        $result = $c->factorial($randomNum);
        $this->assertEquals($c->factorial($randomNum -1) * $randomNum,$result);
    }

}

?>