<?php

use PHPUnit\Framework\TestCase;

class TestMoresDecode1 extends TestCase
{

    public function testMoresCodeV1() {
        $initClass = new \Petunia\Kyu\MoresDecode1();
        $this->assertEquals('HEY JUDE', $initClass->decode_morse('.... . -.--   .--- ..- -.. .'));

    }




}