<?php

namespace Polcode\UnitConverterBundle\Units;

class Length
{
    // default value is always typed as metre
    protected $value;
    
    public function __construct($value, $unit)
    {
        $this->normalize($value, $unit);
    }
    
    private function normalize($value, $unit)
    {
        switch ($unit){
            case 'm':
                break;
            case 'km':
                $this->value = $value * 1000;
                break;
            case 'dm':
                $this->value = $value * 0.1;
                break;
            case 'cm':
                $this->value = $value * 0.01;
                break;
            case 'mm':
                $this->value = $value * 0.001;
                break;
            case 'in':
                $this->value = $value * 1/39.370079;
                break;
            case 'ft':
                $this->value = $value * 1/3.280840;
                break;
            case 'yd':
                $this->value = $value * 1/1.093613;
                break;
            case 'mi':
                $this->value = $value * 1/0.000621;
                break;
            default:
                throw new \Exception("Unsupported unit");
        }
    }
    
    public function toUnit($unit)
    {
        switch ($unit){
            case 'm':
                return $this->value;
            case 'km':
                return $this->value / 1000;
            case 'dm':
                return $this->value * 10;
            case 'cm':
                return $this->value * 100;
            case 'mm':
                return $this->value * 1000;
            case 'in':
                return $this->value * 39.370079;
            case 'ft':
                return $this->value * 3.280840;
            case 'yd':
                return $this->value * 1.093613;
            case 'mi':
                return $this->value * 0.000621;
            default:
                throw new \Exception("Unsupported unit");
        }
    }
}