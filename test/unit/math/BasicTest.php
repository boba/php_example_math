<?php
/**
 * Created by PhpStorm.
 * User: boba
 * Date: 10/16/18
 * Time: 9:41 PM
 */

use Math\Basic;

class BasicTest extends \PHPUnit\Framework\TestCase
{

    public function testAdd()
    {
        $this->assertEquals(0, Basic::add(0,0));
        $this->assertEquals(1, Basic::add(0, 1));
        $this->assertEquals(1, Basic::add(1, 0));
    }

    public function testSubtract()
    {
        $this->assertEquals(0, Basic::subtract(0,0));
        $this->assertEquals(0, Basic::subtract(1,1));
        $this->assertEquals(1, Basic::subtract(1,0));
    }
}
