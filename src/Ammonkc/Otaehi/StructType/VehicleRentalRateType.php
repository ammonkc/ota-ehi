<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRentalRateType StructType
 * @subpackage Structs
 */
class VehicleRentalRateType extends AbstractStructBase
{
    /**
     * The RateDistance
     * @var \Ammonkc\Otaehi\StructType\RateDistance
     */
    public $RateDistance;
    /**
     * The VehicleCharges
     * @var \Ammonkc\Otaehi\StructType\VehicleCharges
     */
    public $VehicleCharges;
    /**
     * The RateQualifier
     * @var \Ammonkc\Otaehi\StructType\RateQualifier
     */
    public $RateQualifier;
    /**
     * The RateRestrictions
     * @var \Ammonkc\Otaehi\StructType\RateRestrictions
     */
    public $RateRestrictions;
    /**
     * The RateGuarantee
     * @var \Ammonkc\Otaehi\StructType\RateGuarantee
     */
    public $RateGuarantee;
    /**
     * The PickupReturnRule
     * @var \Ammonkc\Otaehi\StructType\PickupReturnRule
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
     * @param \Ammonkc\Otaehi\StructType\RateDistance $rateDistance
     * @param \Ammonkc\Otaehi\StructType\VehicleCharges $vehicleCharges
     * @param \Ammonkc\Otaehi\StructType\RateQualifier $rateQualifier
     * @param \Ammonkc\Otaehi\StructType\RateRestrictions $rateRestrictions
     * @param \Ammonkc\Otaehi\StructType\RateGuarantee $rateGuarantee
     * @param \Ammonkc\Otaehi\StructType\PickupReturnRule $pickupReturnRule
     * @param mixed $noShowFeeInfo
     * @param UNKNOWN $quoteID
     */
    public function __construct(\Ammonkc\Otaehi\StructType\RateDistance $rateDistance = null, \Ammonkc\Otaehi\StructType\VehicleCharges $vehicleCharges = null, \Ammonkc\Otaehi\StructType\RateQualifier $rateQualifier = null, \Ammonkc\Otaehi\StructType\RateRestrictions $rateRestrictions = null, \Ammonkc\Otaehi\StructType\RateGuarantee $rateGuarantee = null, \Ammonkc\Otaehi\StructType\PickupReturnRule $pickupReturnRule = null, $noShowFeeInfo = null, UNKNOWN $quoteID = null)
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
     * @return \Ammonkc\Otaehi\StructType\RateDistance|null
     */
    public function getRateDistance()
    {
        return $this->RateDistance;
    }
    /**
     * Set RateDistance value
     * @param \Ammonkc\Otaehi\StructType\RateDistance $rateDistance
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalRateType
     */
    public function setRateDistance(\Ammonkc\Otaehi\StructType\RateDistance $rateDistance = null)
    {
        $this->RateDistance = $rateDistance;
        return $this;
    }
    /**
     * Get VehicleCharges value
     * @return \Ammonkc\Otaehi\StructType\VehicleCharges|null
     */
    public function getVehicleCharges()
    {
        return $this->VehicleCharges;
    }
    /**
     * Set VehicleCharges value
     * @param \Ammonkc\Otaehi\StructType\VehicleCharges $vehicleCharges
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalRateType
     */
    public function setVehicleCharges(\Ammonkc\Otaehi\StructType\VehicleCharges $vehicleCharges = null)
    {
        $this->VehicleCharges = $vehicleCharges;
        return $this;
    }
    /**
     * Get RateQualifier value
     * @return \Ammonkc\Otaehi\StructType\RateQualifier|null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @param \Ammonkc\Otaehi\StructType\RateQualifier $rateQualifier
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalRateType
     */
    public function setRateQualifier(\Ammonkc\Otaehi\StructType\RateQualifier $rateQualifier = null)
    {
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Get RateRestrictions value
     * @return \Ammonkc\Otaehi\StructType\RateRestrictions|null
     */
    public function getRateRestrictions()
    {
        return $this->RateRestrictions;
    }
    /**
     * Set RateRestrictions value
     * @param \Ammonkc\Otaehi\StructType\RateRestrictions $rateRestrictions
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalRateType
     */
    public function setRateRestrictions(\Ammonkc\Otaehi\StructType\RateRestrictions $rateRestrictions = null)
    {
        $this->RateRestrictions = $rateRestrictions;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalRateType
     */
    public function setRateGuarantee(\Ammonkc\Otaehi\StructType\RateGuarantee $rateGuarantee = null)
    {
        $this->RateGuarantee = $rateGuarantee;
        return $this;
    }
    /**
     * Get PickupReturnRule value
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRule|null
     */
    public function getPickupReturnRule()
    {
        return $this->PickupReturnRule;
    }
    /**
     * Set PickupReturnRule value
     * @param \Ammonkc\Otaehi\StructType\PickupReturnRule $pickupReturnRule
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalRateType
     */
    public function setPickupReturnRule(\Ammonkc\Otaehi\StructType\PickupReturnRule $pickupReturnRule = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalRateType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalRateType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalRateType
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
