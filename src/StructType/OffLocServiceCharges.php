<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffLocServiceCharges StructType
 * @subpackage Structs
 */
class OffLocServiceCharges extends AbstractStructBase
{
    /**
     * The OffLocServiceCharge
     * @var \Ammonkc\Otaehi\StructType\OffLocServiceCharge
     */
    public $OffLocServiceCharge;
    /**
     * Constructor method for OffLocServiceCharges
     * @uses OffLocServiceCharges::setOffLocServiceCharge()
     * @param \Ammonkc\Otaehi\StructType\OffLocServiceCharge $offLocServiceCharge
     */
    public function __construct(\Ammonkc\Otaehi\StructType\OffLocServiceCharge $offLocServiceCharge = null)
    {
        $this
            ->setOffLocServiceCharge($offLocServiceCharge);
    }
    /**
     * Get OffLocServiceCharge value
     * @return \Ammonkc\Otaehi\StructType\OffLocServiceCharge|null
     */
    public function getOffLocServiceCharge()
    {
        return $this->OffLocServiceCharge;
    }
    /**
     * Set OffLocServiceCharge value
     * @param \Ammonkc\Otaehi\StructType\OffLocServiceCharge $offLocServiceCharge
     * @return \Ammonkc\Otaehi\StructType\OffLocServiceCharges
     */
    public function setOffLocServiceCharge(\Ammonkc\Otaehi\StructType\OffLocServiceCharge $offLocServiceCharge = null)
    {
        $this->OffLocServiceCharge = $offLocServiceCharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\OffLocServiceCharges
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
