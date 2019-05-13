<?php

use PHPUnit\Framework\TestCase;

class TestExesAndOhs extends TestCase
{

    public function testXO() {
        $initClass = new \Petunia\Kyu\ExesAndOhs();
        $this->assertEquals(true, $initClass->XO('xo'));
        $this->assertEquals(true, $initClass->XO('XO'));
        $this->assertEquals(true, $initClass->XO('xo0'));
        $this->assertEquals(false, $initClass->XO('xxxoo'));
        $this->assertEquals(true, $initClass->XO("xxOo"));
    }


    public function testXO_refactored() {
        $initClass = new \Petunia\Kyu\ExesAndOhs();
        $this->assertEquals(true, $initClass->XO_refactored('xo'));
        $this->assertEquals(true, $initClass->XO_refactored('XO'));
        $this->assertEquals(true, $initClass->XO_refactored('xo0'));
        $this->assertEquals(false, $initClass->XO_refactored('xxxoo'));
        $this->assertEquals(true, $initClass->XO_refactored("xxOo"));
    }

}