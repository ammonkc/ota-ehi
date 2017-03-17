<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternateCurrencyType StructType
 * @subpackage Structs
 */
class AlternateCurrencyType extends AbstractStructBase
{
    /**
     * The CurrencyType
     * @var mixed
     */
    public $CurrencyType;
    /**
     * The Conversion
     * @var \ammonkc\otaehi\StructType\Conversion
     */
    public $Conversion;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The AwardCode
     * @var string
     */
    public $AwardCode;
    /**
     * The DiscountPercentage
     * @var UNKNOWN
     */
    public $DiscountPercentage;
    /**
     * The Quantity
     * @var int
     */
    public $Quantity;
    /**
     * Constructor method for AlternateCurrencyType
     * @uses AlternateCurrencyType::setCurrencyType()
     * @uses AlternateCurrencyType::setConversion()
     * @uses AlternateCurrencyType::setTPA_Extensions()
     * @uses AlternateCurrencyType::setAwardCode()
     * @uses AlternateCurrencyType::setDiscountPercentage()
     * @uses AlternateCurrencyType::setQuantity()
     * @param mixed $currencyType
     * @param \ammonkc\otaehi\StructType\Conversion $conversion
     * @param mixed $tPA_Extensions
     * @param string $awardCode
     * @param UNKNOWN $discountPercentage
     * @param int $quantity
     */
    public function __construct($currencyType = null, \ammonkc\otaehi\StructType\Conversion $conversion = null, $tPA_Extensions = null, $awardCode = null, UNKNOWN $discountPercentage = null, $quantity = null)
    {
        $this
            ->setCurrencyType($currencyType)
            ->setConversion($conversion)
            ->setTPA_Extensions($tPA_Extensions)
            ->setAwardCode($awardCode)
            ->setDiscountPercentage($discountPercentage)
            ->setQuantity($quantity);
    }
    /**
     * Get CurrencyType value
     * @return mixed|null
     */
    public function getCurrencyType()
    {
        return $this->CurrencyType;
    }
    /**
     * Set CurrencyType value
     * @param mixed $currencyType
     * @return \ammonkc\otaehi\StructType\AlternateCurrencyType
     */
    public function setCurrencyType($currencyType = null)
    {
        $this->CurrencyType = $currencyType;
        return $this;
    }
    /**
     * Get Conversion value
     * @return \ammonkc\otaehi\StructType\Conversion|null
     */
    public function getConversion()
    {
        return $this->Conversion;
    }
    /**
     * Set Conversion value
     * @param \ammonkc\otaehi\StructType\Conversion $conversion
     * @return \ammonkc\otaehi\StructType\AlternateCurrencyType
     */
    public function setConversion(\ammonkc\otaehi\StructType\Conversion $conversion = null)
    {
        $this->Conversion = $conversion;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \ammonkc\otaehi\StructType\AlternateCurrencyType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get AwardCode value
     * @return string|null
     */
    public function getAwardCode()
    {
        return $this->AwardCode;
    }
    /**
     * Set AwardCode value
     * @param string $awardCode
     * @return \ammonkc\otaehi\StructType\AlternateCurrencyType
     */
    public function setAwardCode($awardCode = null)
    {
        // validation for constraint: string
        if (!is_null($awardCode) && !is_string($awardCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($awardCode)), __LINE__);
        }
        $this->AwardCode = $awardCode;
        return $this;
    }
    /**
     * Get DiscountPercentage value
     * @return UNKNOWN|null
     */
    public function getDiscountPercentage()
    {
        return $this->DiscountPercentage;
    }
    /**
     * Set DiscountPercentage value
     * @param UNKNOWN $discountPercentage
     * @return \ammonkc\otaehi\StructType\AlternateCurrencyType
     */
    public function setDiscountPercentage(UNKNOWN $discountPercentage = null)
    {
        $this->DiscountPercentage = $discountPercentage;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \ammonkc\otaehi\StructType\AlternateCurrencyType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\AlternateCurrencyType
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
