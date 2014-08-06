<?php

namespace Polcode\UnitConverterBundle\Tests;

use Polcode\UnitConverterBundle\Units\Weight;

class WeightTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testToUnit($v,$u,$u2,$e)
    {
        $t = new Weight($v,$u);
        $this->assertEquals($e,$t->toUnit($u2));
    }
    
    public function additionProvider()
    {
        return array(
            array(2000, 'g', 'kg', 2),
            array(2000, 'kg', 't', 2),
            array(2646, 'kg', 'oz', 93334.9033),
            array(2222, 'lb', 'qr', 76.160),
        );
    }
}
?>