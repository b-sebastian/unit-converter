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
        $this->assertEquals($e,round($t->toUnit($u2),4));
    }
    
    public function additionProvider()
    {
        return array(
            array(2000000, 'cm3', 'm3', 2),
            array(2000, 'mm3', 'ft3', 0.0001),
            array(2646, 'l', 'yd3', 3.4608),
            array(4231, 'ft3', 'yd3', 156.7037),
            array(4231, 'm3', 'mm3', 4231000000000),
            array(4231, 'in3', 'cm3', 69333.6678),
            array(4231, 'yd3', 'l', 3234833.1358),
            array(4231, 'galUK', 'in3', 1173761.6217),
            array(4231, 'ft3', 'galUK', 26354.2034)
        );
    }
    
    /**
    * @dataProvider additionProvider2
    * @expectedException Exception
    * @expectedExceptionMessage     Unsupported unit
    */
    public function testToUnitException($v,$u,$u2,$e)
    {
        $t = new Capacity($v,$u);
        $this->assertEquals($e,round($t->toUnit($u2),4));
    }
    
    public function additionProvider2()
    {
        return array(
            array(4231, 'fsst3', 'yd3', 156.70370690348),
            array(4231, 'ft3', 'gsdfd', 26354.2034)
        );
    }
}
?>