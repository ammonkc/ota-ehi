<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleChargeType StructType
 * @subpackage Structs
 */
class VehicleChargeType extends AbstractStructBase
{
    /**
     * The TaxAmounts
     * @var \ammonkc\otaehi\StructType\TaxAmounts
     */
    public $TaxAmounts;
    /**
     * The MinMax
     * @var \ammonkc\otaehi\StructType\MinMax
     */
    public $MinMax;
    /**
     * The Calculation
     * @var \ammonkc\otaehi\StructType\Calculation
     */
    public $Calculation;
    /**
     * The TaxInclusive
     * @var bool
     */
    public $TaxInclusive;
    /**
     * The Description
     * @var UNKNOWN
     */
    public $Description;
    /**
     * The GuaranteedInd
     * @var bool
     */
    public $GuaranteedInd;
    /**
     * The IncludedInRate
     * @var bool
     */
    public $IncludedInRate;
    /**
     * The IncludedInEstTotalInd
     * @var bool
     */
    public $IncludedInEstTotalInd;
    /**
     * The RateConvertInd
     * @var bool
     */
    public $RateConvertInd;
    /**
     * Constructor method for VehicleChargeType
     * @uses VehicleChargeType::setTaxAmounts()
     * @uses VehicleChargeType::setMinMax()
     * @uses VehicleChargeType::setCalculation()
     * @uses VehicleChargeType::setTaxInclusive()
     * @uses VehicleChargeType::setDescription()
     * @uses VehicleChargeType::setGuaranteedInd()
     * @uses VehicleChargeType::setIncludedInRate()
     * @uses VehicleChargeType::setIncludedInEstTotalInd()
     * @uses VehicleChargeType::setRateConvertInd()
     * @param \ammonkc\otaehi\StructType\TaxAmounts $taxAmounts
     * @param \ammonkc\otaehi\StructType\MinMax $minMax
     * @param \ammonkc\otaehi\StructType\Calculation $calculation
     * @param bool $taxInclusive
     * @param UNKNOWN $description
     * @param bool $guaranteedInd
     * @param bool $includedInRate
     * @param bool $includedInEstTotalInd
     * @param bool $rateConvertInd
     */
    public function __construct(\ammonkc\otaehi\StructType\TaxAmounts $taxAmounts = null, \ammonkc\otaehi\StructType\MinMax $minMax = null, \ammonkc\otaehi\StructType\Calculation $calculation = null, $taxInclusive = null, UNKNOWN $description = null, $guaranteedInd = null, $includedInRate = null, $includedInEstTotalInd = null, $rateConvertInd = null)
    {
        $this
            ->setTaxAmounts($taxAmounts)
            ->setMinMax($minMax)
            ->setCalculation($calculation)
            ->setTaxInclusive($taxInclusive)
            ->setDescription($description)
            ->setGuaranteedInd($guaranteedInd)
            ->setIncludedInRate($includedInRate)
            ->setIncludedInEstTotalInd($includedInEstTotalInd)
            ->setRateConvertInd($rateConvertInd);
    }
    /**
     * Get TaxAmounts value
     * @return \ammonkc\otaehi\StructType\TaxAmounts|null
     */
    public function getTaxAmounts()
    {
        return $this->TaxAmounts;
    }
    /**
     * Set TaxAmounts value
     * @param \ammonkc\otaehi\StructType\TaxAmounts $taxAmounts
     * @return \ammonkc\otaehi\StructType\VehicleChargeType
     */
    public function setTaxAmounts(\ammonkc\otaehi\StructType\TaxAmounts $taxAmounts = null)
    {
        $this->TaxAmounts = $taxAmounts;
        return $this;
    }
    /**
     * Get MinMax value
     * @return \ammonkc\otaehi\StructType\MinMax|null
     */
    public function getMinMax()
    {
        return $this->MinMax;
    }
    /**
     * Set MinMax value
     * @param \ammonkc\otaehi\StructType\MinMax $minMax
     * @return \ammonkc\otaehi\StructType\VehicleChargeType
     */
    public function setMinMax(\ammonkc\otaehi\StructType\MinMax $minMax = null)
    {
        $this->MinMax = $minMax;
        return $this;
    }
    /**
     * Get Calculation value
     * @return \ammonkc\otaehi\StructType\Calculation|null
     */
    public function getCalculation()
    {
        return $this->Calculation;
    }
    /**
     * Set Calculation value
     * @param \ammonkc\otaehi\StructType\Calculation $calculation
     * @return \ammonkc\otaehi\StructType\VehicleChargeType
     */
    public function setCalculation(\ammonkc\otaehi\StructType\Calculation $calculation = null)
    {
        $this->Calculation = $calculation;
        return $this;
    }
    /**
     * Get TaxInclusive value
     * @return bool|null
     */
    public function getTaxInclusive()
    {
        return $this->TaxInclusive;
    }
    /**
     * Set TaxInclusive value
     * @param bool $taxInclusive
     * @return \ammonkc\otaehi\StructType\VehicleChargeType
     */
    public function setTaxInclusive($taxInclusive = null)
    {
        $this->TaxInclusive = $taxInclusive;
        return $this;
    }
    /**
     * Get Description value
     * @return UNKNOWN|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param UNKNOWN $description
     * @return \ammonkc\otaehi\StructType\VehicleChargeType
     */
    public function setDescription(UNKNOWN $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get GuaranteedInd value
     * @return bool|null
     */
    public function getGuaranteedInd()
    {
        return $this->GuaranteedInd;
    }
    /**
     * Set GuaranteedInd value
     * @param bool $guaranteedInd
     * @return \ammonkc\otaehi\StructType\VehicleChargeType
     */
    public function setGuaranteedInd($guaranteedInd = null)
    {
        $this->GuaranteedInd = $guaranteedInd;
        return $this;
    }
    /**
     * Get IncludedInRate value
     * @return bool|null
     */
    public function getIncludedInRate()
    {
        return $this->IncludedInRate;
    }
    /**
     * Set IncludedInRate value
     * @param bool $includedInRate
     * @return \ammonkc\otaehi\StructType\VehicleChargeType
     */
    public function setIncludedInRate($includedInRate = null)
    {
        $this->IncludedInRate = $includedInRate;
        return $this;
    }
    /**
     * Get IncludedInEstTotalInd value
     * @return bool|null
     */
    public function getIncludedInEstTotalInd()
    {
        return $this->IncludedInEstTotalInd;
    }
    /**
     * Set IncludedInEstTotalInd value
     * @param bool $includedInEstTotalInd
     * @return \ammonkc\otaehi\StructType\VehicleChargeType
     */
    public function setIncludedInEstTotalInd($includedInEstTotalInd = null)
    {
        $this->IncludedInEstTotalInd = $includedInEstTotalInd;
        return $this;
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
     * @return \ammonkc\otaehi\StructType\VehicleChargeType
     */
    public function setRateConvertInd($rateConvertInd = null)
    {
        $this->RateConvertInd = $rateConvertInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleChargeType
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
