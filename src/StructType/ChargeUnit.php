<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargeUnit StructType
 * @subpackage Structs
 */
class ChargeUnit extends AbstractStructBase
{
    /**
     * The Unit
     * @var \ammonkc\otaehi\StructType\Unit
     */
    public $Unit;
    /**
     * The Frequency
     * @var \ammonkc\otaehi\StructType\Frequency
     */
    public $Frequency;
    /**
     * Constructor method for ChargeUnit
     * @uses ChargeUnit::setUnit()
     * @uses ChargeUnit::setFrequency()
     * @param \ammonkc\otaehi\StructType\Unit $unit
     * @param \ammonkc\otaehi\StructType\Frequency $frequency
     */
    public function __construct(\ammonkc\otaehi\StructType\Unit $unit = null, \ammonkc\otaehi\StructType\Frequency $frequency = null)
    {
        $this
            ->setUnit($unit)
            ->setFrequency($frequency);
    }
    /**
     * Get Unit value
     * @return \ammonkc\otaehi\StructType\Unit|null
     */
    public function getUnit()
    {
        return $this->Unit;
    }
    /**
     * Set Unit value
     * @param \ammonkc\otaehi\StructType\Unit $unit
     * @return \ammonkc\otaehi\StructType\ChargeUnit
     */
    public function setUnit(\ammonkc\otaehi\StructType\Unit $unit = null)
    {
        $this->Unit = $unit;
        return $this;
    }
    /**
     * Get Frequency value
     * @return \ammonkc\otaehi\StructType\Frequency|null
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }
    /**
     * Set Frequency value
     * @param \ammonkc\otaehi\StructType\Frequency $frequency
     * @return \ammonkc\otaehi\StructType\ChargeUnit
     */
    public function setFrequency(\ammonkc\otaehi\StructType\Frequency $frequency = null)
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
     * @return \ammonkc\otaehi\StructType\ChargeUnit
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
