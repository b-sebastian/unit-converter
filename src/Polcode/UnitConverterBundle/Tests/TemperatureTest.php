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
        $this->assertEquals($e,$t->toUnit($u2));
    }
    
    public function additionProvider()
    {
        return array(
            array(20, 'C', 'C', 20),
            array(20, 'C', 'K', 293.15),
            array(20, 'C', 'F', 68),
            array(20, 'K', 'F', -423.67),
        );
    }
}
?>