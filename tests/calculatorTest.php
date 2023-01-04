<?php
use PHPUnit\Framework\TestCase;
require './src/calculator.php';

class calculatorTest extends TestCase{
// public function testAdd(){
//         $c=new calculator;
//         $r=$c->Add(5,7);
//         $this->assertEquals(12,$r);
// }
// public function testSub(){
//         $c=new calculator;
//         $r=$c->Sub(19,7);
//         $this->assertEquals(12,$r);
// }
// public function testFactorial(){
//         $c=new calculator;
//         $r=$c->Factorial(5);
//         $this->assertEquals(120,$r);
// }
public function testFactorial(){
        $c=new calculator;
        $r=$c->Factorial('abc');
        $this->assertEquals(null,$r);
}

}




?>

