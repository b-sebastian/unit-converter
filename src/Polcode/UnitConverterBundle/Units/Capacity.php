<?php

namespace Polcode\UnitConverterBundle\Units;

class Capacity
{
    // default value is always typed as Cubic metre
    protected $value;
    
    public function __construct($value, $unit)
    {
        $this->normalize($value, $unit);
    }
    
    private function normalize($value, $unit)
    {
        switch ($unit){
            case 'mm3':
                $this->value = $value * 0.000000001;
                break;
            case 'cm3':
                $this->value = $value * 0.000001;
                break;
            case 'l':
                $this->value = $value * 0.001;
                break;
            case 'm3':
                break;
            case 'in3':
                $this->value = $value * 1/61023.744;
                break;
            case 'yd3':
                $this->value = $value * 1/1.308;
                break;
            case 'galUK':
                $this->value = $value * 1/219.969;
                break;
            case 'ft3':
                $this->value = $value * 1/35.315;
                break;
            default:
                throw new \Exception("Unsupported unit");
        }
    }
    
    public function toUnit($unit)
    {
        switch ($unit){
            case 'm3':
                return $this->value;
            case 'mm3':
                return $this->value * 1000000000;
            case 'cm3':
                return $this->value * 1000000;
            case 'l':
                return $this->value * 1000;
            case 'in3':
                return $this->value * 61023.744;
            case 'yd3':
                return $this->value * 1.308;
            case 'galUK':
                return $this->value * 219.969;
            case 'ft3':
                return $this->value * 35.315;
            default:
                throw new \Exception("Unsupported unit");
        }
    }
}