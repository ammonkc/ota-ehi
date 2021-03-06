<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeductibleType StructType
 * @subpackage Structs
 */
class DeductibleType extends AbstractStructBase
{
    /**
     * The LiabilityAmount
     * @var
     */
    public $LiabilityAmount;
    /**
     * The ExcessAmount
     * @var
     */
    public $ExcessAmount;
    /**
     * Constructor method for DeductibleType
     * @uses DeductibleType::setLiabilityAmount()
     * @uses DeductibleType::setExcessAmount()
     * @param  $liabilityAmount
     * @param  $excessAmount
     */
    public function __construct( $liabilityAmount = null,  $excessAmount = null)
    {
        $this
            ->setLiabilityAmount($liabilityAmount)
            ->setExcessAmount($excessAmount);
    }
    /**
     * Get LiabilityAmount value
     * @return |null
     */
    public function getLiabilityAmount()
    {
        return $this->LiabilityAmount;
    }
    /**
     * Set LiabilityAmount value
     * @param  $liabilityAmount
     * @return \Ammonkc\Otaehi\StructType\DeductibleType
     */
    public function setLiabilityAmount( $liabilityAmount = null)
    {
        $this->LiabilityAmount = $liabilityAmount;
        return $this;
    }
    /**
     * Get ExcessAmount value
     * @return |null
     */
    public function getExcessAmount()
    {
        return $this->ExcessAmount;
    }
    /**
     * Set ExcessAmount value
     * @param  $excessAmount
     * @return \Ammonkc\Otaehi\StructType\DeductibleType
     */
    public function setExcessAmount( $excessAmount = null)
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
     * @return \Ammonkc\Otaehi\StructType\DeductibleType
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
