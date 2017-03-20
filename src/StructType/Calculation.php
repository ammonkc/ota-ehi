<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Calculation StructType
 * @subpackage Structs
 */
class Calculation extends AbstractStructBase
{
    /**
     * The UnitCharge
     * @var
     */
    public $UnitCharge;
    /**
     * The UnitName
     * @var
     */
    public $UnitName;
    /**
     * The Quantity
     * @var
     */
    public $Quantity;
    /**
     * The Percentage
     * @var
     */
    public $Percentage;
    /**
     * The Applicability
     * @var string
     */
    public $Applicability;
    /**
     * The MaxQuantity
     * @var
     */
    public $MaxQuantity;
    /**
     * The Total
     * @var
     */
    public $Total;
    /**
     * Constructor method for Calculation
     * @uses Calculation::setUnitCharge()
     * @uses Calculation::setUnitName()
     * @uses Calculation::setQuantity()
     * @uses Calculation::setPercentage()
     * @uses Calculation::setApplicability()
     * @uses Calculation::setMaxQuantity()
     * @uses Calculation::setTotal()
     * @param  $unitCharge
     * @param  $unitName
     * @param  $quantity
     * @param  $percentage
     * @param string $applicability
     * @param  $maxQuantity
     * @param  $total
     */
    public function __construct( $unitCharge = null,  $unitName = null,  $quantity = null,  $percentage = null, $applicability = null,  $maxQuantity = null,  $total = null)
    {
        $this
            ->setUnitCharge($unitCharge)
            ->setUnitName($unitName)
            ->setQuantity($quantity)
            ->setPercentage($percentage)
            ->setApplicability($applicability)
            ->setMaxQuantity($maxQuantity)
            ->setTotal($total);
    }
    /**
     * Get UnitCharge value
     * @return |null
     */
    public function getUnitCharge()
    {
        return $this->UnitCharge;
    }
    /**
     * Set UnitCharge value
     * @param  $unitCharge
     * @return \Ammonkc\Otaehi\StructType\Calculation
     */
    public function setUnitCharge( $unitCharge = null)
    {
        $this->UnitCharge = $unitCharge;
        return $this;
    }
    /**
     * Get UnitName value
     * @return |null
     */
    public function getUnitName()
    {
        return $this->UnitName;
    }
    /**
     * Set UnitName value
     * @param  $unitName
     * @return \Ammonkc\Otaehi\StructType\Calculation
     */
    public function setUnitName( $unitName = null)
    {
        $this->UnitName = $unitName;
        return $this;
    }
    /**
     * Get Quantity value
     * @return |null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param  $quantity
     * @return \Ammonkc\Otaehi\StructType\Calculation
     */
    public function setQuantity( $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get Percentage value
     * @return |null
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param  $percentage
     * @return \Ammonkc\Otaehi\StructType\Calculation
     */
    public function setPercentage( $percentage = null)
    {
        $this->Percentage = $percentage;
        return $this;
    }
    /**
     * Get Applicability value
     * @return string|null
     */
    public function getApplicability()
    {
        return $this->Applicability;
    }
    /**
     * Set Applicability value
     * @param string $applicability
     * @return \Ammonkc\Otaehi\StructType\Calculation
     */
    public function setApplicability($applicability = null)
    {
        // validation for constraint: string
        if (!is_null($applicability) && !is_string($applicability)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applicability)), __LINE__);
        }
        $this->Applicability = $applicability;
        return $this;
    }
    /**
     * Get MaxQuantity value
     * @return |null
     */
    public function getMaxQuantity()
    {
        return $this->MaxQuantity;
    }
    /**
     * Set MaxQuantity value
     * @param  $maxQuantity
     * @return \Ammonkc\Otaehi\StructType\Calculation
     */
    public function setMaxQuantity( $maxQuantity = null)
    {
        $this->MaxQuantity = $maxQuantity;
        return $this;
    }
    /**
     * Get Total value
     * @return |null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param  $total
     * @return \Ammonkc\Otaehi\StructType\Calculation
     */
    public function setTotal( $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Calculation
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
