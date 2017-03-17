<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnLocServiceCharges StructType
 * @subpackage Structs
 */
class OnLocServiceCharges extends AbstractStructBase
{
    /**
     * The OnLocServiceCharge
     * @var \Ammonkc\Otaehi\StructType\OnLocServiceCharge
     */
    public $OnLocServiceCharge;
    /**
     * Constructor method for OnLocServiceCharges
     * @uses OnLocServiceCharges::setOnLocServiceCharge()
     * @param \Ammonkc\Otaehi\StructType\OnLocServiceCharge $onLocServiceCharge
     */
    public function __construct(\Ammonkc\Otaehi\StructType\OnLocServiceCharge $onLocServiceCharge = null)
    {
        $this
            ->setOnLocServiceCharge($onLocServiceCharge);
    }
    /**
     * Get OnLocServiceCharge value
     * @return \Ammonkc\Otaehi\StructType\OnLocServiceCharge|null
     */
    public function getOnLocServiceCharge()
    {
        return $this->OnLocServiceCharge;
    }
    /**
     * Set OnLocServiceCharge value
     * @param \Ammonkc\Otaehi\StructType\OnLocServiceCharge $onLocServiceCharge
     * @return \Ammonkc\Otaehi\StructType\OnLocServiceCharges
     */
    public function setOnLocServiceCharge(\Ammonkc\Otaehi\StructType\OnLocServiceCharge $onLocServiceCharge = null)
    {
        $this->OnLocServiceCharge = $onLocServiceCharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\OnLocServiceCharges
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
