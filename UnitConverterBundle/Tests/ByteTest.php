<?php

namespace Polcode\UnitConverterBundle\Tests;

use Polcode\UnitConverterBundle\Units\Byte;

class ByteTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testToUnit($v,$u,$u2,$e)
    {
        $t = new Byte($v,$u);
        $this->assertEquals($e,$t->toUnit($u2));
    }
    
    public function additionProvider()
    {
        return array(
            array(2048, 'B', 'KB', 2),
            array(2097152, 'B', 'MB', 2),
            array(2048, 'MB', 'GB', 2),
            array(2, 'GB', 'MB', 2048),
        );
    }
}
?>