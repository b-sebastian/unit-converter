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
                $this->value = $value / 1000;
                break;
            case 'dag':
                $this->value = $value / 100;
                break;
            case 'kg':
                $this->value = $value;
                break;
            case 't':
                $this->value = $value * 1000;
                break;
            case 'oz':
                $this->value = $value / 35.273369;
                break;
            case 'lb':
                $this->value = $value / 2.204623;
                break;
            case 'tUK':
                $this->value = $value / 0.000984;
                break;
            case 'cwtUK':
                $this->value = $value / 0.019680;
                break;
            default:
                throw new \Exception("Unsupported unit '{$unit}'");
        }
    }
    
    public function toUnit($unit)
    {
        switch ($unit){
            case 'g':
                return $this->value * 1000;
            case 'dag':
                return $this->value * 100;
            case 'kg':
                return $this->value;
            case 't':
                return $this->value  / 1000;
            case 'oz':
                return $this->value * 35.273369;
            case 'lb':
                return $this->value * 2.204623;
            case 'tUK':
                return $this->value * 0.000984;
            case 'cwtUK':
                return $this->value * 0.019684;
            default:
                throw new \Exception("Unsupported unit");
        }
    }
}