<?php

namespace Math;

use PHPUnit\Framework\TestCase;

class PiTest extends TestCase
{
    public function testPi()
    {
        $this->assertEquals(2.666666666666667, Pi::pi(1));
        $this->assertEquals(3.2323158094056, Pi::pi(10));
        $this->assertEquals(3.151493401071, Pi::pi(100));
        $this->assertEquals(3.1425916543395, Pi::pi(1000));
        $this->assertEquals(3.1416926435905, Pi::pi(10000));
        $this->assertEquals(3.1416026534897, Pi::pi(100000));
        $this->assertEquals(3.1415936535888, Pi::pi(1000000));
    }
}
