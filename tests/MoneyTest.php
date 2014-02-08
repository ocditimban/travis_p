<?php

use Drupal\Component\Annotation\Action;

class MoneyTest extends PHPUnit_Framework_TestCase
{
    // ...

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }

    public function testCalculateWrong()
    {
        
        // Assert
        $this->assertEquals(0, 1);
    }

    public function testCalculateRight()
    {
        // Assert
        $this->assertEquals(0, 0);
    }
    // ...
    public function testNamespace() {
        $ac = new Action();
        // Assert
        $this->assertEquals('hello', $ac->getName('hello'));   
    }
}