<?php

use PHPUnit\Framework\TestCase;

class SomeClassTest extends TestCase
{
 
    public function testToBeTested()
    {
       $someClass = new SomeClass();
       $val = $someClass->toBeTested();
       
       $this->assertEquals($val, 1);
    }

}
