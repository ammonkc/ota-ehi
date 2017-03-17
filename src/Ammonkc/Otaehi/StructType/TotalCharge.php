<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalCharge StructType
 * @subpackage Structs
 */
class TotalCharge extends AbstractStructBase
{
    /**
     * The RateConvertInd
     * @var bool
     */
    public $RateConvertInd;
    /**
     * The RateTotalAmount
     * @var UNKNOWN
     */
    public $RateTotalAmount;
    /**
     * The EstimatedTotalAmount
     * @var UNKNOWN
     */
    public $EstimatedTotalAmount;
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
     * Constructor method for TotalCharge
     * @uses TotalCharge::setRateConvertInd()
     * @uses TotalCharge::setRateTotalAmount()
     * @uses TotalCharge::setEstimatedTotalAmount()
     * @uses TotalCharge::setCurrencyCode()
     * @uses TotalCharge::setDecimalPlaces()
     * @param bool $rateConvertInd
     * @param UNKNOWN $rateTotalAmount
     * @param UNKNOWN $estimatedTotalAmount
     * @param UNKNOWN $currencyCode
     * @param int $decimalPlaces
     */
    public function __construct($rateConvertInd = null, UNKNOWN $rateTotalAmount = null, UNKNOWN $estimatedTotalAmount = null, UNKNOWN $currencyCode = null, $decimalPlaces = null)
    {
        $this
            ->setRateConvertInd($rateConvertInd)
            ->setRateTotalAmount($rateTotalAmount)
            ->setEstimatedTotalAmount($estimatedTotalAmount)
            ->setCurrencyCode($currencyCode)
            ->setDecimalPlaces($decimalPlaces);
    }
    /**
     * Get RateConvertInd value
     * @return bool|null
     */
    public function getRateConvertInd()
    {
        return $this->RateConvertInd;
    }
    /**
     * Set RateConvertInd value
     * @param bool $rateConvertInd
     * @return \Ammonkc\Otaehi\StructType\TotalCharge
     */
    public function setRateConvertInd($rateConvertInd = null)
    {
        $this->RateConvertInd = $rateConvertInd;
        return $this;
    }
    /**
     * Get RateTotalAmount value
     * @return UNKNOWN|null
     */
    public function getRateTotalAmount()
    {
        return $this->RateTotalAmount;
    }
    /**
     * Set RateTotalAmount value
     * @param UNKNOWN $rateTotalAmount
     * @return \Ammonkc\Otaehi\StructType\TotalCharge
     */
    public function setRateTotalAmount(UNKNOWN $rateTotalAmount = null)
    {
        $this->RateTotalAmount = $rateTotalAmount;
        return $this;
    }
    /**
     * Get EstimatedTotalAmount value
     * @return UNKNOWN|null
     */
    public function getEstimatedTotalAmount()
    {
        return $this->EstimatedTotalAmount;
    }
    /**
     * Set EstimatedTotalAmount value
     * @param UNKNOWN $estimatedTotalAmount
     * @return \Ammonkc\Otaehi\StructType\TotalCharge
     */
    public function setEstimatedTotalAmount(UNKNOWN $estimatedTotalAmount = null)
    {
        $this->EstimatedTotalAmount = $estimatedTotalAmount;
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
     * @return \Ammonkc\Otaehi\StructType\TotalCharge
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
     * @return \Ammonkc\Otaehi\StructType\TotalCharge
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
     * @return \Ammonkc\Otaehi\StructType\TotalCharge
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
