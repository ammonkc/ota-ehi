<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateRulesType StructType
 * @subpackage Structs
 */
class RateRulesType extends AbstractStructBase
{
    /**
     * The AdvanceBooking
     * @var \Ammonkc\Otaehi\StructType\AdvanceBooking
     */
    public $AdvanceBooking;
    /**
     * The PickupReturnRules
     * @var \Ammonkc\Otaehi\StructType\PickupReturnRules
     */
    public $PickupReturnRules;
    /**
     * The RateGuarantee
     * @var \Ammonkc\Otaehi\StructType\RateGuarantee
     */
    public $RateGuarantee;
    /**
     * The PaymentRules
     * @var \Ammonkc\Otaehi\StructType\PaymentRules
     */
    public $PaymentRules;
    /**
     * The CancelPenaltyInfo
     * @var \Ammonkc\Otaehi\StructType\CancelPenaltyInfo
     */
    public $CancelPenaltyInfo;
    /**
     * The RateDeposit
     * @var \Ammonkc\Otaehi\StructType\RateDeposit
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
     * @param \Ammonkc\Otaehi\StructType\AdvanceBooking $advanceBooking
     * @param \Ammonkc\Otaehi\StructType\PickupReturnRules $pickupReturnRules
     * @param \Ammonkc\Otaehi\StructType\RateGuarantee $rateGuarantee
     * @param \Ammonkc\Otaehi\StructType\PaymentRules $paymentRules
     * @param \Ammonkc\Otaehi\StructType\CancelPenaltyInfo $cancelPenaltyInfo
     * @param \Ammonkc\Otaehi\StructType\RateDeposit $rateDeposit
     * @param string $minimumKeep
     * @param string $maximumKeep
     * @param string $maximumRental
     */
    public function __construct(\Ammonkc\Otaehi\StructType\AdvanceBooking $advanceBooking = null, \Ammonkc\Otaehi\StructType\PickupReturnRules $pickupReturnRules = null, \Ammonkc\Otaehi\StructType\RateGuarantee $rateGuarantee = null, \Ammonkc\Otaehi\StructType\PaymentRules $paymentRules = null, \Ammonkc\Otaehi\StructType\CancelPenaltyInfo $cancelPenaltyInfo = null, \Ammonkc\Otaehi\StructType\RateDeposit $rateDeposit = null, $minimumKeep = null, $maximumKeep = null, $maximumRental = null)
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
     * @return \Ammonkc\Otaehi\StructType\AdvanceBooking|null
     */
    public function getAdvanceBooking()
    {
        return $this->AdvanceBooking;
    }
    /**
     * Set AdvanceBooking value
     * @param \Ammonkc\Otaehi\StructType\AdvanceBooking $advanceBooking
     * @return \Ammonkc\Otaehi\StructType\RateRulesType
     */
    public function setAdvanceBooking(\Ammonkc\Otaehi\StructType\AdvanceBooking $advanceBooking = null)
    {
        $this->AdvanceBooking = $advanceBooking;
        return $this;
    }
    /**
     * Get PickupReturnRules value
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRules|null
     */
    public function getPickupReturnRules()
    {
        return $this->PickupReturnRules;
    }
    /**
     * Set PickupReturnRules value
     * @param \Ammonkc\Otaehi\StructType\PickupReturnRules $pickupReturnRules
     * @return \Ammonkc\Otaehi\StructType\RateRulesType
     */
    public function setPickupReturnRules(\Ammonkc\Otaehi\StructType\PickupReturnRules $pickupReturnRules = null)
    {
        $this->PickupReturnRules = $pickupReturnRules;
        return $this;
    }
    /**
     * Get RateGuarantee value
     * @return \Ammonkc\Otaehi\StructType\RateGuarantee|null
     */
    public function getRateGuarantee()
    {
        return $this->RateGuarantee;
    }
    /**
     * Set RateGuarantee value
     * @param \Ammonkc\Otaehi\StructType\RateGuarantee $rateGuarantee
     * @return \Ammonkc\Otaehi\StructType\RateRulesType
     */
    public function setRateGuarantee(\Ammonkc\Otaehi\StructType\RateGuarantee $rateGuarantee = null)
    {
        $this->RateGuarantee = $rateGuarantee;
        return $this;
    }
    /**
     * Get PaymentRules value
     * @return \Ammonkc\Otaehi\StructType\PaymentRules|null
     */
    public function getPaymentRules()
    {
        return $this->PaymentRules;
    }
    /**
     * Set PaymentRules value
     * @param \Ammonkc\Otaehi\StructType\PaymentRules $paymentRules
     * @return \Ammonkc\Otaehi\StructType\RateRulesType
     */
    public function setPaymentRules(\Ammonkc\Otaehi\StructType\PaymentRules $paymentRules = null)
    {
        $this->PaymentRules = $paymentRules;
        return $this;
    }
    /**
     * Get CancelPenaltyInfo value
     * @return \Ammonkc\Otaehi\StructType\CancelPenaltyInfo|null
     */
    public function getCancelPenaltyInfo()
    {
        return $this->CancelPenaltyInfo;
    }
    /**
     * Set CancelPenaltyInfo value
     * @param \Ammonkc\Otaehi\StructType\CancelPenaltyInfo $cancelPenaltyInfo
     * @return \Ammonkc\Otaehi\StructType\RateRulesType
     */
    public function setCancelPenaltyInfo(\Ammonkc\Otaehi\StructType\CancelPenaltyInfo $cancelPenaltyInfo = null)
    {
        $this->CancelPenaltyInfo = $cancelPenaltyInfo;
        return $this;
    }
    /**
     * Get RateDeposit value
     * @return \Ammonkc\Otaehi\StructType\RateDeposit|null
     */
    public function getRateDeposit()
    {
        return $this->RateDeposit;
    }
    /**
     * Set RateDeposit value
     * @param \Ammonkc\Otaehi\StructType\RateDeposit $rateDeposit
     * @return \Ammonkc\Otaehi\StructType\RateRulesType
     */
    public function setRateDeposit(\Ammonkc\Otaehi\StructType\RateDeposit $rateDeposit = null)
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
     * @return \Ammonkc\Otaehi\StructType\RateRulesType
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
     * @return \Ammonkc\Otaehi\StructType\RateRulesType
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
     * @return \Ammonkc\Otaehi\StructType\RateRulesType
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
     * @return \Ammonkc\Otaehi\StructType\RateRulesType
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
