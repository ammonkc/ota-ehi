<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateRulesType StructType
 * @subpackage Structs
 */
class RateRulesType extends AbstractStructBase
{
    /**
     * The AdvanceBooking
     * @var \ammonkc\otaehi\StructType\AdvanceBooking
     */
    public $AdvanceBooking;
    /**
     * The PickupReturnRules
     * @var \ammonkc\otaehi\StructType\PickupReturnRules
     */
    public $PickupReturnRules;
    /**
     * The RateGuarantee
     * @var \ammonkc\otaehi\StructType\RateGuarantee
     */
    public $RateGuarantee;
    /**
     * The PaymentRules
     * @var \ammonkc\otaehi\StructType\PaymentRules
     */
    public $PaymentRules;
    /**
     * The CancelPenaltyInfo
     * @var \ammonkc\otaehi\StructType\CancelPenaltyInfo
     */
    public $CancelPenaltyInfo;
    /**
     * The RateDeposit
     * @var \ammonkc\otaehi\StructType\RateDeposit
     */
    public $RateDeposit;
    /**
     * The MinimumKeep
     * @var string
     */
    public $MinimumKeep;
    /**
     * The MaximumKeep
     * @var string
     */
    public $MaximumKeep;
    /**
     * The MaximumRental
     * @var string
     */
    public $MaximumRental;
    /**
     * Constructor method for RateRulesType
     * @uses RateRulesType::setAdvanceBooking()
     * @uses RateRulesType::setPickupReturnRules()
     * @uses RateRulesType::setRateGuarantee()
     * @uses RateRulesType::setPaymentRules()
     * @uses RateRulesType::setCancelPenaltyInfo()
     * @uses RateRulesType::setRateDeposit()
     * @uses RateRulesType::setMinimumKeep()
     * @uses RateRulesType::setMaximumKeep()
     * @uses RateRulesType::setMaximumRental()
     * @param \ammonkc\otaehi\StructType\AdvanceBooking $advanceBooking
     * @param \ammonkc\otaehi\StructType\PickupReturnRules $pickupReturnRules
     * @param \ammonkc\otaehi\StructType\RateGuarantee $rateGuarantee
     * @param \ammonkc\otaehi\StructType\PaymentRules $paymentRules
     * @param \ammonkc\otaehi\StructType\CancelPenaltyInfo $cancelPenaltyInfo
     * @param \ammonkc\otaehi\StructType\RateDeposit $rateDeposit
     * @param string $minimumKeep
     * @param string $maximumKeep
     * @param string $maximumRental
     */
    public function __construct(\ammonkc\otaehi\StructType\AdvanceBooking $advanceBooking = null, \ammonkc\otaehi\StructType\PickupReturnRules $pickupReturnRules = null, \ammonkc\otaehi\StructType\RateGuarantee $rateGuarantee = null, \ammonkc\otaehi\StructType\PaymentRules $paymentRules = null, \ammonkc\otaehi\StructType\CancelPenaltyInfo $cancelPenaltyInfo = null, \ammonkc\otaehi\StructType\RateDeposit $rateDeposit = null, $minimumKeep = null, $maximumKeep = null, $maximumRental = null)
    {
        $this
            ->setAdvanceBooking($advanceBooking)
            ->setPickupReturnRules($pickupReturnRules)
            ->setRateGuarantee($rateGuarantee)
            ->setPaymentRules($paymentRules)
            ->setCancelPenaltyInfo($cancelPenaltyInfo)
            ->setRateDeposit($rateDeposit)
            ->setMinimumKeep($minimumKeep)
            ->setMaximumKeep($maximumKeep)
            ->setMaximumRental($maximumRental);
    }
    /**
     * Get AdvanceBooking value
     * @return \ammonkc\otaehi\StructType\AdvanceBooking|null
     */
    public function getAdvanceBooking()
    {
        return $this->AdvanceBooking;
    }
    /**
     * Set AdvanceBooking value
     * @param \ammonkc\otaehi\StructType\AdvanceBooking $advanceBooking
     * @return \ammonkc\otaehi\StructType\RateRulesType
     */
    public function setAdvanceBooking(\ammonkc\otaehi\StructType\AdvanceBooking $advanceBooking = null)
    {
        $this->AdvanceBooking = $advanceBooking;
        return $this;
    }
    /**
     * Get PickupReturnRules value
     * @return \ammonkc\otaehi\StructType\PickupReturnRules|null
     */
    public function getPickupReturnRules()
    {
        return $this->PickupReturnRules;
    }
    /**
     * Set PickupReturnRules value
     * @param \ammonkc\otaehi\StructType\PickupReturnRules $pickupReturnRules
     * @return \ammonkc\otaehi\StructType\RateRulesType
     */
    public function setPickupReturnRules(\ammonkc\otaehi\StructType\PickupReturnRules $pickupReturnRules = null)
    {
        $this->PickupReturnRules = $pickupReturnRules;
        return $this;
    }
    /**
     * Get RateGuarantee value
     * @return \ammonkc\otaehi\StructType\RateGuarantee|null
     */
    public function getRateGuarantee()
    {
        return $this->RateGuarantee;
    }
    /**
     * Set RateGuarantee value
     * @param \ammonkc\otaehi\StructType\RateGuarantee $rateGuarantee
     * @return \ammonkc\otaehi\StructType\RateRulesType
     */
    public function setRateGuarantee(\ammonkc\otaehi\StructType\RateGuarantee $rateGuarantee = null)
    {
        $this->RateGuarantee = $rateGuarantee;
        return $this;
    }
    /**
     * Get PaymentRules value
     * @return \ammonkc\otaehi\StructType\PaymentRules|null
     */
    public function getPaymentRules()
    {
        return $this->PaymentRules;
    }
    /**
     * Set PaymentRules value
     * @param \ammonkc\otaehi\StructType\PaymentRules $paymentRules
     * @return \ammonkc\otaehi\StructType\RateRulesType
     */
    public function setPaymentRules(\ammonkc\otaehi\StructType\PaymentRules $paymentRules = null)
    {
        $this->PaymentRules = $paymentRules;
        return $this;
    }
    /**
     * Get CancelPenaltyInfo value
     * @return \ammonkc\otaehi\StructType\CancelPenaltyInfo|null
     */
    public function getCancelPenaltyInfo()
    {
        return $this->CancelPenaltyInfo;
    }
    /**
     * Set CancelPenaltyInfo value
     * @param \ammonkc\otaehi\StructType\CancelPenaltyInfo $cancelPenaltyInfo
     * @return \ammonkc\otaehi\StructType\RateRulesType
     */
    public function setCancelPenaltyInfo(\ammonkc\otaehi\StructType\CancelPenaltyInfo $cancelPenaltyInfo = null)
    {
        $this->CancelPenaltyInfo = $cancelPenaltyInfo;
        return $this;
    }
    /**
     * Get RateDeposit value
     * @return \ammonkc\otaehi\StructType\RateDeposit|null
     */
    public function getRateDeposit()
    {
        return $this->RateDeposit;
    }
    /**
     * Set RateDeposit value
     * @param \ammonkc\otaehi\StructType\RateDeposit $rateDeposit
     * @return \ammonkc\otaehi\StructType\RateRulesType
     */
    public function setRateDeposit(\ammonkc\otaehi\StructType\RateDeposit $rateDeposit = null)
    {
        $this->RateDeposit = $rateDeposit;
        return $this;
    }
    /**
     * Get MinimumKeep value
     * @return string|null
     */
    public function getMinimumKeep()
    {
        return $this->MinimumKeep;
    }
    /**
     * Set MinimumKeep value
     * @param string $minimumKeep
     * @return \ammonkc\otaehi\StructType\RateRulesType
     */
    public function setMinimumKeep($minimumKeep = null)
    {
        // validation for constraint: string
        if (!is_null($minimumKeep) && !is_string($minimumKeep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minimumKeep)), __LINE__);
        }
        $this->MinimumKeep = $minimumKeep;
        return $this;
    }
    /**
     * Get MaximumKeep value
     * @return string|null
     */
    public function getMaximumKeep()
    {
        return $this->MaximumKeep;
    }
    /**
     * Set MaximumKeep value
     * @param string $maximumKeep
     * @return \ammonkc\otaehi\StructType\RateRulesType
     */
    public function setMaximumKeep($maximumKeep = null)
    {
        // validation for constraint: string
        if (!is_null($maximumKeep) && !is_string($maximumKeep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximumKeep)), __LINE__);
        }
        $this->MaximumKeep = $maximumKeep;
        return $this;
    }
    /**
     * Get MaximumRental value
     * @return string|null
     */
    public function getMaximumRental()
    {
        return $this->MaximumRental;
    }
    /**
     * Set MaximumRental value
     * @param string $maximumRental
     * @return \ammonkc\otaehi\StructType\RateRulesType
     */
    public function setMaximumRental($maximumRental = null)
    {
        // validation for constraint: string
        if (!is_null($maximumRental) && !is_string($maximumRental)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximumRental)), __LINE__);
        }
        $this->MaximumRental = $maximumRental;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\RateRulesType
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
