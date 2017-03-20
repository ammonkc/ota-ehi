<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalType StructType
 * @subpackage Structs
 */
class TotalType extends AbstractStructBase
{
    /**
     * The Taxes
     * @var mixed
     */
    public $Taxes;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The AmountBeforeTax
     * @var
     */
    public $AmountBeforeTax;
    /**
     * The AmountAfterTax
     * @var
     */
    public $AmountAfterTax;
    /**
     * The AdditionalFeesExcludedIndicator
     * @var bool
     */
    public $AdditionalFeesExcludedIndicator;
    /**
     * The Type
     * @var
     */
    public $Type;
    /**
     * The ServiceOverrideIndicator
     * @var bool
     */
    public $ServiceOverrideIndicator;
    /**
     * The RateOverrideIndicator
     * @var bool
     */
    public $RateOverrideIndicator;
    /**
     * The AmountIncludingMarkup
     * @var
     */
    public $AmountIncludingMarkup;
    /**
     * Constructor method for TotalType
     * @uses TotalType::setTaxes()
     * @uses TotalType::setTPA_Extensions()
     * @uses TotalType::setAmountBeforeTax()
     * @uses TotalType::setAmountAfterTax()
     * @uses TotalType::setAdditionalFeesExcludedIndicator()
     * @uses TotalType::setType()
     * @uses TotalType::setServiceOverrideIndicator()
     * @uses TotalType::setRateOverrideIndicator()
     * @uses TotalType::setAmountIncludingMarkup()
     * @param mixed $taxes
     * @param mixed $tPA_Extensions
     * @param  $amountBeforeTax
     * @param  $amountAfterTax
     * @param bool $additionalFeesExcludedIndicator
     * @param  $type
     * @param bool $serviceOverrideIndicator
     * @param bool $rateOverrideIndicator
     * @param  $amountIncludingMarkup
     */
    public function __construct($taxes = null, $tPA_Extensions = null,  $amountBeforeTax = null,  $amountAfterTax = null, $additionalFeesExcludedIndicator = null,  $type = null, $serviceOverrideIndicator = null, $rateOverrideIndicator = null,  $amountIncludingMarkup = null)
    {
        $this
            ->setTaxes($taxes)
            ->setTPA_Extensions($tPA_Extensions)
            ->setAmountBeforeTax($amountBeforeTax)
            ->setAmountAfterTax($amountAfterTax)
            ->setAdditionalFeesExcludedIndicator($additionalFeesExcludedIndicator)
            ->setType($type)
            ->setServiceOverrideIndicator($serviceOverrideIndicator)
            ->setRateOverrideIndicator($rateOverrideIndicator)
            ->setAmountIncludingMarkup($amountIncludingMarkup);
    }
    /**
     * Get Taxes value
     * @return mixed|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param mixed $taxes
     * @return \Ammonkc\Otaehi\StructType\TotalType
     */
    public function setTaxes($taxes = null)
    {
        $this->Taxes = $taxes;
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
     * @return \Ammonkc\Otaehi\StructType\TotalType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get AmountBeforeTax value
     * @return |null
     */
    public function getAmountBeforeTax()
    {
        return $this->AmountBeforeTax;
    }
    /**
     * Set AmountBeforeTax value
     * @param  $amountBeforeTax
     * @return \Ammonkc\Otaehi\StructType\TotalType
     */
    public function setAmountBeforeTax( $amountBeforeTax = null)
    {
        $this->AmountBeforeTax = $amountBeforeTax;
        return $this;
    }
    /**
     * Get AmountAfterTax value
     * @return |null
     */
    public function getAmountAfterTax()
    {
        return $this->AmountAfterTax;
    }
    /**
     * Set AmountAfterTax value
     * @param  $amountAfterTax
     * @return \Ammonkc\Otaehi\StructType\TotalType
     */
    public function setAmountAfterTax( $amountAfterTax = null)
    {
        $this->AmountAfterTax = $amountAfterTax;
        return $this;
    }
    /**
     * Get AdditionalFeesExcludedIndicator value
     * @return bool|null
     */
    public function getAdditionalFeesExcludedIndicator()
    {
        return $this->AdditionalFeesExcludedIndicator;
    }
    /**
     * Set AdditionalFeesExcludedIndicator value
     * @param bool $additionalFeesExcludedIndicator
     * @return \Ammonkc\Otaehi\StructType\TotalType
     */
    public function setAdditionalFeesExcludedIndicator($additionalFeesExcludedIndicator = null)
    {
        $this->AdditionalFeesExcludedIndicator = $additionalFeesExcludedIndicator;
        return $this;
    }
    /**
     * Get Type value
     * @return |null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param  $type
     * @return \Ammonkc\Otaehi\StructType\TotalType
     */
    public function setType( $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ServiceOverrideIndicator value
     * @return bool|null
     */
    public function getServiceOverrideIndicator()
    {
        return $this->ServiceOverrideIndicator;
    }
    /**
     * Set ServiceOverrideIndicator value
     * @param bool $serviceOverrideIndicator
     * @return \Ammonkc\Otaehi\StructType\TotalType
     */
    public function setServiceOverrideIndicator($serviceOverrideIndicator = null)
    {
        $this->ServiceOverrideIndicator = $serviceOverrideIndicator;
        return $this;
    }
    /**
     * Get RateOverrideIndicator value
     * @return bool|null
     */
    public function getRateOverrideIndicator()
    {
        return $this->RateOverrideIndicator;
    }
    /**
     * Set RateOverrideIndicator value
     * @param bool $rateOverrideIndicator
     * @return \Ammonkc\Otaehi\StructType\TotalType
     */
    public function setRateOverrideIndicator($rateOverrideIndicator = null)
    {
        $this->RateOverrideIndicator = $rateOverrideIndicator;
        return $this;
    }
    /**
     * Get AmountIncludingMarkup value
     * @return |null
     */
    public function getAmountIncludingMarkup()
    {
        return $this->AmountIncludingMarkup;
    }
    /**
     * Set AmountIncludingMarkup value
     * @param  $amountIncludingMarkup
     * @return \Ammonkc\Otaehi\StructType\TotalType
     */
    public function setAmountIncludingMarkup( $amountIncludingMarkup = null)
    {
        $this->AmountIncludingMarkup = $amountIncludingMarkup;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\TotalType
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
