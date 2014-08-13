<?php

namespace Polcode\UnitConverterBundle\Tests;

use Polcode\UnitConverterBundle\Units\Power;

class PowerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testToUnit($v,$u,$u2,$e)
    {
        $t = new Power($v,$u);
        $this->assertEquals($e,round($t->toUnit($u2),2));
    }
    
    public function additionProvider()
    {
        return array(
            array(60, 'W', 'W', 60),
            array(197, 'hp', 'kW', 144.89),
            array(197, 'PS', 'kW', 144.89),
        );
    }
}
?>