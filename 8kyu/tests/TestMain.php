<?php

use Petunia\Kyu\IsItLate;
use PHPUnit\Framework\TestCase;

class TestMain extends TestCase
{

    public function testExample() {
        $isItlate = new IsItLate();
        $this->assertSame(false, $isItlate->periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 35));
//        $this->assertSame(true, $isItlate->periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 28));
    }


}