<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgeSurcharge StructType
 * @subpackage Structs
 */
class AgeSurcharge extends AbstractStructBase
{
    /**
     * The Age
     * @var
     */
    public $Age;
    /**
     * The ChargeType
     * @var
     */
    public $ChargeType;
    /**
     * The CurrencyCode
     * @var
     */
    public $CurrencyCode;
    /**
     * The DecimalPlaces
     * @var int
     */
    public $DecimalPlaces;
    /**
     * The Amount
     * @var
     */
    public $Amount;
    /**
     * Constructor method for AgeSurcharge
     * @uses AgeSurcharge::setAge()
     * @uses AgeSurcharge::setChargeType()
     * @uses AgeSurcharge::setCurrencyCode()
     * @uses AgeSurcharge::setDecimalPlaces()
     * @uses AgeSurcharge::setAmount()
     * @param  $age
     * @param  $chargeType
     * @param  $currencyCode
     * @param int $decimalPlaces
     * @param  $amount
     */
    public function __construct( $age = null,  $chargeType = null,  $currencyCode = null, $decimalPlaces = null,  $amount = null)
    {
        $this
            ->setAge($age)
            ->setChargeType($chargeType)
            ->setCurrencyCode($currencyCode)
            ->setDecimalPlaces($decimalPlaces)
            ->setAmount($amount);
    }
    /**
     * Get Age value
     * @return |null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param  $age
     * @return \Ammonkc\Otaehi\StructType\AgeSurcharge
     */
    public function setAge( $age = null)
    {
        $this->Age = $age;
        return $this;
    }
    /**
     * Get ChargeType value
     * @return |null
     */
    public function getChargeType()
    {
        return $this->ChargeType;
    }
    /**
     * Set ChargeType value
     * @param  $chargeType
     * @return \Ammonkc\Otaehi\StructType\AgeSurcharge
     */
    public function setChargeType( $chargeType = null)
    {
        $this->ChargeType = $chargeType;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return |null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param  $currencyCode
     * @return \Ammonkc\Otaehi\StructType\AgeSurcharge
     */
    public function setCurrencyCode( $currencyCode = null)
    {
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get DecimalPlaces value
     * @return int|null
     */
    public function getDecimalPlaces()
    {
        return $this->DecimalPlaces;
    }
    /**
     * Set DecimalPlaces value
     * @param int $decimalPlaces
     * @return \Ammonkc\Otaehi\StructType\AgeSurcharge
     */
    public function setDecimalPlaces($decimalPlaces = null)
    {
        // validation for constraint: int
        if (!is_null($decimalPlaces) && !is_numeric($decimalPlaces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($decimalPlaces)), __LINE__);
        }
        $this->DecimalPlaces = $decimalPlaces;
        return $this;
    }
    /**
     * Get Amount value
     * @return |null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param  $amount
     * @return \Ammonkc\Otaehi\StructType\AgeSurcharge
     */
    public function setAmount( $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\AgeSurcharge
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
