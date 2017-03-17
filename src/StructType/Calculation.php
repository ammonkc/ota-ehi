<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Calculation StructType
 * @subpackage Structs
 */
class Calculation extends AbstractStructBase
{
    /**
     * The UnitCharge
     * @var UNKNOWN
     */
    public $UnitCharge;
    /**
     * The UnitName
     * @var UNKNOWN
     */
    public $UnitName;
    /**
     * The Quantity
     * @var UNKNOWN
     */
    public $Quantity;
    /**
     * The Percentage
     * @var UNKNOWN
     */
    public $Percentage;
    /**
     * The Applicability
     * @var string
     */
    public $Applicability;
    /**
     * The MaxQuantity
     * @var UNKNOWN
     */
    public $MaxQuantity;
    /**
     * The Total
     * @var UNKNOWN
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
     * @param UNKNOWN $unitCharge
     * @param UNKNOWN $unitName
     * @param UNKNOWN $quantity
     * @param UNKNOWN $percentage
     * @param string $applicability
     * @param UNKNOWN $maxQuantity
     * @param UNKNOWN $total
     */
    public function __construct(UNKNOWN $unitCharge = null, UNKNOWN $unitName = null, UNKNOWN $quantity = null, UNKNOWN $percentage = null, $applicability = null, UNKNOWN $maxQuantity = null, UNKNOWN $total = null)
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
     * @return UNKNOWN|null
     */
    public function getUnitCharge()
    {
        return $this->UnitCharge;
    }
    /**
     * Set UnitCharge value
     * @param UNKNOWN $unitCharge
     * @return \ammonkc\otaehi\StructType\Calculation
     */
    public function setUnitCharge(UNKNOWN $unitCharge = null)
    {
        $this->UnitCharge = $unitCharge;
        return $this;
    }
    /**
     * Get UnitName value
     * @return UNKNOWN|null
     */
    public function getUnitName()
    {
        return $this->UnitName;
    }
    /**
     * Set UnitName value
     * @param UNKNOWN $unitName
     * @return \ammonkc\otaehi\StructType\Calculation
     */
    public function setUnitName(UNKNOWN $unitName = null)
    {
        $this->UnitName = $unitName;
        return $this;
    }
    /**
     * Get Quantity value
     * @return UNKNOWN|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param UNKNOWN $quantity
     * @return \ammonkc\otaehi\StructType\Calculation
     */
    public function setQuantity(UNKNOWN $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get Percentage value
     * @return UNKNOWN|null
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param UNKNOWN $percentage
     * @return \ammonkc\otaehi\StructType\Calculation
     */
    public function setPercentage(UNKNOWN $percentage = null)
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
     * @return \ammonkc\otaehi\StructType\Calculation
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
     * @return UNKNOWN|null
     */
    public function getMaxQuantity()
    {
        return $this->MaxQuantity;
    }
    /**
     * Set MaxQuantity value
     * @param UNKNOWN $maxQuantity
     * @return \ammonkc\otaehi\StructType\Calculation
     */
    public function setMaxQuantity(UNKNOWN $maxQuantity = null)
    {
        $this->MaxQuantity = $maxQuantity;
        return $this;
    }
    /**
     * Get Total value
     * @return UNKNOWN|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param UNKNOWN $total
     * @return \ammonkc\otaehi\StructType\Calculation
     */
    public function setTotal(UNKNOWN $total = null)
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
     * @return \ammonkc\otaehi\StructType\Calculation
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
