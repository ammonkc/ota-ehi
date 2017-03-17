<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeductibleType StructType
 * @subpackage Structs
 */
class DeductibleType extends AbstractStructBase
{
    /**
     * The LiabilityAmount
     * @var UNKNOWN
     */
    public $LiabilityAmount;
    /**
     * The ExcessAmount
     * @var UNKNOWN
     */
    public $ExcessAmount;
    /**
     * Constructor method for DeductibleType
     * @uses DeductibleType::setLiabilityAmount()
     * @uses DeductibleType::setExcessAmount()
     * @param UNKNOWN $liabilityAmount
     * @param UNKNOWN $excessAmount
     */
    public function __construct(UNKNOWN $liabilityAmount = null, UNKNOWN $excessAmount = null)
    {
        $this
            ->setLiabilityAmount($liabilityAmount)
            ->setExcessAmount($excessAmount);
    }
    /**
     * Get LiabilityAmount value
     * @return UNKNOWN|null
     */
    public function getLiabilityAmount()
    {
        return $this->LiabilityAmount;
    }
    /**
     * Set LiabilityAmount value
     * @param UNKNOWN $liabilityAmount
     * @return \ammonkc\otaehi\StructType\DeductibleType
     */
    public function setLiabilityAmount(UNKNOWN $liabilityAmount = null)
    {
        $this->LiabilityAmount = $liabilityAmount;
        return $this;
    }
    /**
     * Get ExcessAmount value
     * @return UNKNOWN|null
     */
    public function getExcessAmount()
    {
        return $this->ExcessAmount;
    }
    /**
     * Set ExcessAmount value
     * @param UNKNOWN $excessAmount
     * @return \ammonkc\otaehi\StructType\DeductibleType
     */
    public function setExcessAmount(UNKNOWN $excessAmount = null)
    {
        $this->ExcessAmount = $excessAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\DeductibleType
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
