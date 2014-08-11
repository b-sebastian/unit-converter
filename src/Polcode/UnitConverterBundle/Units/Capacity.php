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
                $this->value = $value;
                break;
            case 'in3':
                $this->value = $value * 1/61023.744094;
                break;
            case 'yd3':
                $this->value = $value * 1/1.307950;
                break;
            case 'galUK':
                $this->value = $value * 1/219.969248;
                break;
            case 'ft3':
                $this->value = $value * 1/35.314666;
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
                return $this->value * 61023.7440947323;
            case 'yd3':
                return $this->value * 1.3079506193;
            case 'galUK':
                return $this->value * 219.9692482991;
            case 'ft3':
                return $this->value * 35.3146667215;
            default:
                throw new \Exception("Unsupported unit");
        }
    }
}