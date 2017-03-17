<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargeUnit StructType
 * @subpackage Structs
 */
class ChargeUnit extends AbstractStructBase
{
    /**
     * The Unit
     * @var \Ammonkc\Otaehi\StructType\Unit
     */
    public $Unit;
    /**
     * The Frequency
     * @var \Ammonkc\Otaehi\StructType\Frequency
     */
    public $Frequency;
    /**
     * Constructor method for ChargeUnit
     * @uses ChargeUnit::setUnit()
     * @uses ChargeUnit::setFrequency()
     * @param \Ammonkc\Otaehi\StructType\Unit $unit
     * @param \Ammonkc\Otaehi\StructType\Frequency $frequency
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Unit $unit = null, \Ammonkc\Otaehi\StructType\Frequency $frequency = null)
    {
        $this
            ->setUnit($unit)
            ->setFrequency($frequency);
    }
    /**
     * Get Unit value
     * @return \Ammonkc\Otaehi\StructType\Unit|null
     */
    public function getUnit()
    {
        return $this->Unit;
    }
    /**
     * Set Unit value
     * @param \Ammonkc\Otaehi\StructType\Unit $unit
     * @return \Ammonkc\Otaehi\StructType\ChargeUnit
     */
    public function setUnit(\Ammonkc\Otaehi\StructType\Unit $unit = null)
    {
        $this->Unit = $unit;
        return $this;
    }
    /**
     * Get Frequency value
     * @return \Ammonkc\Otaehi\StructType\Frequency|null
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }
    /**
     * Set Frequency value
     * @param \Ammonkc\Otaehi\StructType\Frequency $frequency
     * @return \Ammonkc\Otaehi\StructType\ChargeUnit
     */
    public function setFrequency(\Ammonkc\Otaehi\StructType\Frequency $frequency = null)
    {
        $this->Frequency = $frequency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ChargeUnit
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
