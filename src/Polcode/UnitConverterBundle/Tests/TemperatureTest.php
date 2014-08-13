<?php

namespace Polcode\UnitConverterBundle\Tests;

use Polcode\UnitConverterBundle\Units\Temperature;

class TemperatureTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testToUnit($v,$u,$u2,$e)
    {
        $t = new Temperature($v,$u);
        $this->assertEquals($e,round($t->toUnit($u2),4));
    }
    
    public function additionProvider()
    {
        return array(
            array(20, 'C', 'C', 20),
            array(20, 'C', 'K', 293.15),
            array(20, 'C', 'F', 68),
            array(20, 'K', 'F', -423.67),
            array(20, 'F', 'K', 266.4833)
        );
    }
    
    /**
    * @dataProvider additionProvider2
    * @expectedException Exception
    * @expectedExceptionMessage     Unsupported unit
    */
    public function testToUnitException($v,$u,$u2,$e)
    {
        $t = new Temperature($v,$u);
        $this->assertEquals($e,round($t->toUnit($u2),4));
    }
    
    public function additionProvider2()
    {
        return array(
            array(20, 'C', 'Fs', 68),
            array(20, 'Ks', 'F', -423.67),
        );
    }
}
?>