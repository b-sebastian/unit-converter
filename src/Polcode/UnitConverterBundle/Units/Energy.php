<?php

namespace Polcode\UnitConverterBundle\Units;

class Energy
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
            case 'Nm':
                return $this->value;
            case 'ft-lb':
            case 'ft-lbf':
            case 'lbf-ft':
                return $this->value = $this->value / 1.3558179483314004;
            default:
                throw new \Exception("Unsupported unit '{$unit}'");
        }
    }

    private function normalize($value, $unit)
    {
        switch ($unit) {
            case 'Nm':
                $this->value = $value;
                break;
            case 'ft-lb':
            case 'ft-lbf':
            case 'lbf-ft':
                $this->value = $value * 1.3558179483314004;
                break;
            default:
                throw new \Exception("Unsupported unit '{$unit}'");
        }
    }
}