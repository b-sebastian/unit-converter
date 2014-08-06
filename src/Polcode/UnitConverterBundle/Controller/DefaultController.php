<?php

namespace Polcode\UnitConverterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Polcode\UnitConverterBundle\Units\Temperature;
use Polcode\UnitConverterBundle\Units\Byte;
use Polcode\UnitConverterBundle\Units\Weight;
use Polcode\UnitConverterBundle\Units\Capacity;
use Polcode\UnitConverterBundle\Units\Lenght;

class DefaultController extends Controller
{
    public function tempAction()
    {        
        //$temp = new Temperature(25,'C');
        //$value=$temp->toUnit('K');
        
        //$byte = new Byte(2048,'GB');
        //$value = $byte->toUnit('TB');
        
        //$weight = new Weight(2222,'lb');
        //$value = $weight->toUnit('qr');
        
        //$capacity = new Capacity(2222, 'l');
        //$value = $capacity->toUnit('galUK');
        
        $lenght = new Lenght(2222, 'ft');
        $value = $lenght->toUnit('m');
        
        return $this->render('PolcodeUnitConverterBundle:Default:form.html.twig', array(
            'result' => $value,
        ));
    }
    
}
