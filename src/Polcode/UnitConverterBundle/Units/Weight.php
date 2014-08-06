<?php

namespace Polcode\UnitConverterBundle\Units;

class Weight
{
    // default value is always typed as Kilograms
    protected $value;
    
    public function __construct($value, $unit)
    {
        $this->normalize($value, $unit);
    }
    
    private function normalize($value, $unit)
    {
        switch ($unit){
            case 'g':
                break;
            case 'dag':
                $this->value = $value * 100;
                break;
            case 'kg':
                $this->value = $value * 1000;
                break;
            case 't':
                $this->value = $value * 1000000;
                break;
            case 'oz':
                $this->value = $value * 28.35;
                break;
            case 'lb':
                $this->value = $value * 453.5;
                break;
            case 'qr':
                $this->value = $value * 12700;
                break;
            case 'cwt':
                $this->value = $value * 50802;
                break;
            default:
                throw new \Exception("Unsupported unit");
        }
    }
    
    public function toUnit($unit)
    {
        switch ($unit){
            case 'g':
                return $this->value;
            case 'dag':
                return $this->value / 100;
            case 'kg':
                return $this->value / 1000;
            case 't':
                return $this->value / 1000000;
            case 'oz':
                return $this->value / 28.35;
            case 'lb':
                return $this->value / 453.5;
            case 'qr':
                return $this->value / 12700;
            case 'cwt':
                return $this->value / 50802;
            default:
                throw new \Exception("Unsupported unit");
        }
    }
}