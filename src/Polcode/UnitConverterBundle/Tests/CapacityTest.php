<?php

namespace Polcode\UnitConverterBundle\Tests;

use Polcode\UnitConverterBundle\Units\Capacity;

class CapacityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testToUnit($v,$u,$u2,$e)
    {
        $t = new Capacity($v,$u);
        $this->assertEquals($e,$t->toUnit($u2));
    }
    
    public function additionProvider()
    {
        return array(
            array(2000000, 'cm3', 'm3', 2),
            array(2000, 'mm3', 'ft3', 0,00007062),
            array(2646, 'l', 'yd3', 3.46083734),
            array(4231, 'ft3', 'mm3', 119808578000),
        );
    }
}
?>