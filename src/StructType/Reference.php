<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reference StructType
 * @subpackage Structs
 */
class Reference extends AbstractStructBase
{
    /**
     * The DateTime
     * @var string
     */
    public $DateTime;
    /**
     * The Amount
     * @var UNKNOWN
     */
    public $Amount;
    /**
     * The CurrencyCode
     * @var UNKNOWN
     */
    public $CurrencyCode;
    /**
     * The DecimalPlaces
     * @var int
     */
    public $DecimalPlaces;
    /**
     * Constructor method for Reference
     * @uses Reference::setDateTime()
     * @uses Reference::setAmount()
     * @uses Reference::setCurrencyCode()
     * @uses Reference::setDecimalPlaces()
     * @param string $dateTime
     * @param UNKNOWN $amount
     * @param UNKNOWN $currencyCode
     * @param int $decimalPlaces
     */
    public function __construct($dateTime = null, UNKNOWN $amount = null, UNKNOWN $currencyCode = null, $decimalPlaces = null)
    {
        $this
            ->setDateTime($dateTime)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->setDecimalPlaces($decimalPlaces);
    }
    /**
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \Ammonkc\Otaehi\StructType\Reference
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
        return $this;
    }
    /**
     * Get Amount value
     * @return UNKNOWN|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param UNKNOWN $amount
     * @return \Ammonkc\Otaehi\StructType\Reference
     */
    public function setAmount(UNKNOWN $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return UNKNOWN|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param UNKNOWN $currencyCode
     * @return \Ammonkc\Otaehi\StructType\Reference
     */
    public function setCurrencyCode(UNKNOWN $currencyCode = null)
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
     * @return \Ammonkc\Otaehi\StructType\Reference
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Reference
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
