<?php

namespace Polcode\UnitConverterBundle\Units;

class Temperature
{
    // default value is always type as Celcius
    protected $value;
    
    public function __construct($value, $unit)
    {
        $this->value = $value;
        $this->normalize($unit);
    }
    
    private function normalize($unit)
    {
        switch ($unit){
            case 'F':
                $this->value = ($this->value - 32) *5/9;
                break;
            case 'K':
                $this->value = $this->value - 273.15;
                break;
            case 'C':
                break;
            default:
                throw new \Exception("Unsupported unit");
        }
        return $this->value;
    }
    
    public function toUnit($unit)
    {
        switch ($unit){
            case 'F':
                return $this->value *9/5 +32;
            case 'K':
                return $this->value + 273.15;
            case 'C':
                break;
            default:
                throw new \Exception("Unsupported unit");
        }
        return $this->value;
    }
}