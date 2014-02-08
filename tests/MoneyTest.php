<?php

use Drupal\Core\Annotation\Action;

class MoneyTest extends PHPUnit_Framework_TestCase
{
    // ...
    public function testNamespace() {
        $ac = new Action();
        // Assert
        $this->assertEquals('hello', $ac->getName('hello'));   
        $this->assertEquals('hello', 'hello');   
    }
}