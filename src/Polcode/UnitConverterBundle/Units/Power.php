<?php

namespace Polcode\UnitConverterBundle\Units;

class Power
{
    // default value
    protected $value;

    public function __construct($value, $unit)
    {
        $this->normalize($value, $unit);
    }

    public function toUnit($unit)
    {
        switch ($unit) {
            case 'W':
                return $this->value;
            case 'kW':
                return $this->value / 1000;
            case 'hp':
                return $this->value = $this->value / 735.49875;
            default:
                throw new \Exception("Unsupported unit '{$unit}'");
        }
    }

    private function normalize($value, $unit)
    {
        switch ($unit) {
            case 'W':
                $this->value = $value;
                break;
            case 'kW':
                $this->value = $value * 1000;
                break;
            case 'hp':
                $this->value = $value * 735.49875;
                break;
            default:
                throw new \Exception("Unsupported unit '{$unit}'");
        }
    }
}