<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRentalRateType StructType
 * @subpackage Structs
 */
class VehicleRentalRateType extends AbstractStructBase
{
    /**
     * The RateDistance
     * @var \ammonkc\otaehi\StructType\RateDistance
     */
    public $RateDistance;
    /**
     * The VehicleCharges
     * @var \ammonkc\otaehi\StructType\VehicleCharges
     */
    public $VehicleCharges;
    /**
     * The RateQualifier
     * @var \ammonkc\otaehi\StructType\RateQualifier
     */
    public $RateQualifier;
    /**
     * The RateRestrictions
     * @var \ammonkc\otaehi\StructType\RateRestrictions
     */
    public $RateRestrictions;
    /**
     * The RateGuarantee
     * @var \ammonkc\otaehi\StructType\RateGuarantee
     */
    public $RateGuarantee;
    /**
     * The PickupReturnRule
     * @var \ammonkc\otaehi\StructType\PickupReturnRule
     */
    public $PickupReturnRule;
    /**
     * The NoShowFeeInfo
     * @var mixed
     */
    public $NoShowFeeInfo;
    /**
     * The QuoteID
     * @var UNKNOWN
     */
    public $QuoteID;
    /**
     * Constructor method for VehicleRentalRateType
     * @uses VehicleRentalRateType::setRateDistance()
     * @uses VehicleRentalRateType::setVehicleCharges()
     * @uses VehicleRentalRateType::setRateQualifier()
     * @uses VehicleRentalRateType::setRateRestrictions()
     * @uses VehicleRentalRateType::setRateGuarantee()
     * @uses VehicleRentalRateType::setPickupReturnRule()
     * @uses VehicleRentalRateType::setNoShowFeeInfo()
     * @uses VehicleRentalRateType::setQuoteID()
     * @param \ammonkc\otaehi\StructType\RateDistance $rateDistance
     * @param \ammonkc\otaehi\StructType\VehicleCharges $vehicleCharges
     * @param \ammonkc\otaehi\StructType\RateQualifier $rateQualifier
     * @param \ammonkc\otaehi\StructType\RateRestrictions $rateRestrictions
     * @param \ammonkc\otaehi\StructType\RateGuarantee $rateGuarantee
     * @param \ammonkc\otaehi\StructType\PickupReturnRule $pickupReturnRule
     * @param mixed $noShowFeeInfo
     * @param UNKNOWN $quoteID
     */
    public function __construct(\ammonkc\otaehi\StructType\RateDistance $rateDistance = null, \ammonkc\otaehi\StructType\VehicleCharges $vehicleCharges = null, \ammonkc\otaehi\StructType\RateQualifier $rateQualifier = null, \ammonkc\otaehi\StructType\RateRestrictions $rateRestrictions = null, \ammonkc\otaehi\StructType\RateGuarantee $rateGuarantee = null, \ammonkc\otaehi\StructType\PickupReturnRule $pickupReturnRule = null, $noShowFeeInfo = null, UNKNOWN $quoteID = null)
    {
        $this
            ->setRateDistance($rateDistance)
            ->setVehicleCharges($vehicleCharges)
            ->setRateQualifier($rateQualifier)
            ->setRateRestrictions($rateRestrictions)
            ->setRateGuarantee($rateGuarantee)
            ->setPickupReturnRule($pickupReturnRule)
            ->setNoShowFeeInfo($noShowFeeInfo)
            ->setQuoteID($quoteID);
    }
    /**
     * Get RateDistance value
     * @return \ammonkc\otaehi\StructType\RateDistance|null
     */
    public function getRateDistance()
    {
        return $this->RateDistance;
    }
    /**
     * Set RateDistance value
     * @param \ammonkc\otaehi\StructType\RateDistance $rateDistance
     * @return \ammonkc\otaehi\StructType\VehicleRentalRateType
     */
    public function setRateDistance(\ammonkc\otaehi\StructType\RateDistance $rateDistance = null)
    {
        $this->RateDistance = $rateDistance;
        return $this;
    }
    /**
     * Get VehicleCharges value
     * @return \ammonkc\otaehi\StructType\VehicleCharges|null
     */
    public function getVehicleCharges()
    {
        return $this->VehicleCharges;
    }
    /**
     * Set VehicleCharges value
     * @param \ammonkc\otaehi\StructType\VehicleCharges $vehicleCharges
     * @return \ammonkc\otaehi\StructType\VehicleRentalRateType
     */
    public function setVehicleCharges(\ammonkc\otaehi\StructType\VehicleCharges $vehicleCharges = null)
    {
        $this->VehicleCharges = $vehicleCharges;
        return $this;
    }
    /**
     * Get RateQualifier value
     * @return \ammonkc\otaehi\StructType\RateQualifier|null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @param \ammonkc\otaehi\StructType\RateQualifier $rateQualifier
     * @return \ammonkc\otaehi\StructType\VehicleRentalRateType
     */
    public function setRateQualifier(\ammonkc\otaehi\StructType\RateQualifier $rateQualifier = null)
    {
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Get RateRestrictions value
     * @return \ammonkc\otaehi\StructType\RateRestrictions|null
     */
    public function getRateRestrictions()
    {
        return $this->RateRestrictions;
    }
    /**
     * Set RateRestrictions value
     * @param \ammonkc\otaehi\StructType\RateRestrictions $rateRestrictions
     * @return \ammonkc\otaehi\StructType\VehicleRentalRateType
     */
    public function setRateRestrictions(\ammonkc\otaehi\StructType\RateRestrictions $rateRestrictions = null)
    {
        $this->RateRestrictions = $rateRestrictions;
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
     * @return \ammonkc\otaehi\StructType\VehicleRentalRateType
     */
    public function setRateGuarantee(\ammonkc\otaehi\StructType\RateGuarantee $rateGuarantee = null)
    {
        $this->RateGuarantee = $rateGuarantee;
        return $this;
    }
    /**
     * Get PickupReturnRule value
     * @return \ammonkc\otaehi\StructType\PickupReturnRule|null
     */
    public function getPickupReturnRule()
    {
        return $this->PickupReturnRule;
    }
    /**
     * Set PickupReturnRule value
     * @param \ammonkc\otaehi\StructType\PickupReturnRule $pickupReturnRule
     * @return \ammonkc\otaehi\StructType\VehicleRentalRateType
     */
    public function setPickupReturnRule(\ammonkc\otaehi\StructType\PickupReturnRule $pickupReturnRule = null)
    {
        $this->PickupReturnRule = $pickupReturnRule;
        return $this;
    }
    /**
     * Get NoShowFeeInfo value
     * @return mixed|null
     */
    public function getNoShowFeeInfo()
    {
        return $this->NoShowFeeInfo;
    }
    /**
     * Set NoShowFeeInfo value
     * @param mixed $noShowFeeInfo
     * @return \ammonkc\otaehi\StructType\VehicleRentalRateType
     */
    public function setNoShowFeeInfo($noShowFeeInfo = null)
    {
        $this->NoShowFeeInfo = $noShowFeeInfo;
        return $this;
    }
    /**
     * Get QuoteID value
     * @return UNKNOWN|null
     */
    public function getQuoteID()
    {
        return $this->QuoteID;
    }
    /**
     * Set QuoteID value
     * @param UNKNOWN $quoteID
     * @return \ammonkc\otaehi\StructType\VehicleRentalRateType
     */
    public function setQuoteID(UNKNOWN $quoteID = null)
    {
        $this->QuoteID = $quoteID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleRentalRateType
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
