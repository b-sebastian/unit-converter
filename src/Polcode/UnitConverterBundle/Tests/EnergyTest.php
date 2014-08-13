<?php

namespace Polcode\UnitConverterBundle\Tests;

use Polcode\UnitConverterBundle\Units\Energy;

class EnergyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testToUnit($v,$u,$u2,$e)
    {
        $t = new Energy($v,$u);
        $this->assertEquals($e,round($t->toUnit($u2),5));
    }
    
    public function additionProvider()
    {
        return array(
            array(1,'Nm','ft-lb', 0.73756),
        );
    }
}
?>