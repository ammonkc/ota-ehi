<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailAdditionalInfoType StructType
 * @subpackage Structs
 */
class VehicleAvailAdditionalInfoType extends AbstractStructBase
{
    /**
     * The PricedCoverages
     * @var \ammonkc\otaehi\StructType\PricedCoverages
     */
    public $PricedCoverages;
    /**
     * The PaymentRules
     * @var mixed
     */
    public $PaymentRules;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The ChargeablePeriod
     * @var string
     */
    public $ChargeablePeriod;
    /**
     * Constructor method for VehicleAvailAdditionalInfoType
     * @uses VehicleAvailAdditionalInfoType::setPricedCoverages()
     * @uses VehicleAvailAdditionalInfoType::setPaymentRules()
     * @uses VehicleAvailAdditionalInfoType::setTPA_Extensions()
     * @uses VehicleAvailAdditionalInfoType::setChargeablePeriod()
     * @param \ammonkc\otaehi\StructType\PricedCoverages $pricedCoverages
     * @param mixed $paymentRules
     * @param mixed $tPA_Extensions
     * @param string $chargeablePeriod
     */
    public function __construct(\ammonkc\otaehi\StructType\PricedCoverages $pricedCoverages = null, $paymentRules = null, $tPA_Extensions = null, $chargeablePeriod = null)
    {
        $this
            ->setPricedCoverages($pricedCoverages)
            ->setPaymentRules($paymentRules)
            ->setTPA_Extensions($tPA_Extensions)
            ->setChargeablePeriod($chargeablePeriod);
    }
    /**
     * Get PricedCoverages value
     * @return \ammonkc\otaehi\StructType\PricedCoverages|null
     */
    public function getPricedCoverages()
    {
        return $this->PricedCoverages;
    }
    /**
     * Set PricedCoverages value
     * @param \ammonkc\otaehi\StructType\PricedCoverages $pricedCoverages
     * @return \ammonkc\otaehi\StructType\VehicleAvailAdditionalInfoType
     */
    public function setPricedCoverages(\ammonkc\otaehi\StructType\PricedCoverages $pricedCoverages = null)
    {
        $this->PricedCoverages = $pricedCoverages;
        return $this;
    }
    /**
     * Get PaymentRules value
     * @return mixed|null
     */
    public function getPaymentRules()
    {
        return $this->PaymentRules;
    }
    /**
     * Set PaymentRules value
     * @param mixed $paymentRules
     * @return \ammonkc\otaehi\StructType\VehicleAvailAdditionalInfoType
     */
    public function setPaymentRules($paymentRules = null)
    {
        $this->PaymentRules = $paymentRules;
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailAdditionalInfoType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get ChargeablePeriod value
     * @return string|null
     */
    public function getChargeablePeriod()
    {
        return $this->ChargeablePeriod;
    }
    /**
     * Set ChargeablePeriod value
     * @param string $chargeablePeriod
     * @return \ammonkc\otaehi\StructType\VehicleAvailAdditionalInfoType
     */
    public function setChargeablePeriod($chargeablePeriod = null)
    {
        // validation for constraint: string
        if (!is_null($chargeablePeriod) && !is_string($chargeablePeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeablePeriod)), __LINE__);
        }
        $this->ChargeablePeriod = $chargeablePeriod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleAvailAdditionalInfoType
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
