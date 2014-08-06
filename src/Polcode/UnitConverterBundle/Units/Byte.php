<?php

namespace Polcode\UnitConverterBundle\Units;

class Byte
{
    // default value is always typed as Byte
    protected $value;
    
    public function __construct($value, $unit)
    {
        $this->normalize($value, $unit);
    }
    
    private function normalize($value, $unit)
    {
        switch ($unit){
            case 'KB':
                $this->value = $value * 1024;
                break;
            case 'MB':
                $this->value = $value * 1048576;
                break;
            case 'GB':
                $this->value = $value * 1073741824;
                break;
            case 'TB':
                $this->value = $value * 1099511627776;
                break;
            case 'B':
                $this->value = $value;
                break;
            default:
                throw new \Exception("Unsupported unit");
        }
    }
    
    public function toUnit($unit)
    {
        switch ($unit){
            case 'KB':
                return $this->value / 1024;
            case 'MB':
                return $this->value / 1048576;
            case 'GB':
                return $this->value / 1073741824;
            case 'TB':
                return $this->value / 1099511627776;
            case 'B':
                return $this->value;
            default:
                throw new \Exception("Unsupported unit");
        }
    }
}