<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateRestrictions StructType
 * @subpackage Structs
 */
class RateRestrictions extends AbstractStructBase
{
    /**
     * The ArriveByFlight
     * @var bool
     */
    public $ArriveByFlight;
    /**
     * The MinimumDayInd
     * @var bool
     */
    public $MinimumDayInd;
    /**
     * The MaximumDayInd
     * @var bool
     */
    public $MaximumDayInd;
    /**
     * The AdvancedBookingInd
     * @var bool
     */
    public $AdvancedBookingInd;
    /**
     * The RestrictedMileageInd
     * @var bool
     */
    public $RestrictedMileageInd;
    /**
     * The CorporateRateInd
     * @var bool
     */
    public $CorporateRateInd;
    /**
     * The GuaranteeReqInd
     * @var bool
     */
    public $GuaranteeReqInd;
    /**
     * The MaximumVehiclesAllowed
     * @var UNKNOWN
     */
    public $MaximumVehiclesAllowed;
    /**
     * The OvernightInd
     * @var bool
     */
    public $OvernightInd;
    /**
     * The OneWayPolicy
     * @var string
     */
    public $OneWayPolicy;
    /**
     * The CancellationPenaltyInd
     * @var bool
     */
    public $CancellationPenaltyInd;
    /**
     * The ModificationPenaltyInd
     * @var bool
     */
    public $ModificationPenaltyInd;
    /**
     * The MinimumAge
     * @var UNKNOWN
     */
    public $MinimumAge;
    /**
     * The MaximumAge
     * @var UNKNOWN
     */
    public $MaximumAge;
    /**
     * The NoShowFeeInd
     * @var bool
     */
    public $NoShowFeeInd;
    /**
     * Constructor method for RateRestrictions
     * @uses RateRestrictions::setArriveByFlight()
     * @uses RateRestrictions::setMinimumDayInd()
     * @uses RateRestrictions::setMaximumDayInd()
     * @uses RateRestrictions::setAdvancedBookingInd()
     * @uses RateRestrictions::setRestrictedMileageInd()
     * @uses RateRestrictions::setCorporateRateInd()
     * @uses RateRestrictions::setGuaranteeReqInd()
     * @uses RateRestrictions::setMaximumVehiclesAllowed()
     * @uses RateRestrictions::setOvernightInd()
     * @uses RateRestrictions::setOneWayPolicy()
     * @uses RateRestrictions::setCancellationPenaltyInd()
     * @uses RateRestrictions::setModificationPenaltyInd()
     * @uses RateRestrictions::setMinimumAge()
     * @uses RateRestrictions::setMaximumAge()
     * @uses RateRestrictions::setNoShowFeeInd()
     * @param bool $arriveByFlight
     * @param bool $minimumDayInd
     * @param bool $maximumDayInd
     * @param bool $advancedBookingInd
     * @param bool $restrictedMileageInd
     * @param bool $corporateRateInd
     * @param bool $guaranteeReqInd
     * @param UNKNOWN $maximumVehiclesAllowed
     * @param bool $overnightInd
     * @param string $oneWayPolicy
     * @param bool $cancellationPenaltyInd
     * @param bool $modificationPenaltyInd
     * @param UNKNOWN $minimumAge
     * @param UNKNOWN $maximumAge
     * @param bool $noShowFeeInd
     */
    public function __construct($arriveByFlight = null, $minimumDayInd = null, $maximumDayInd = null, $advancedBookingInd = null, $restrictedMileageInd = null, $corporateRateInd = null, $guaranteeReqInd = null, UNKNOWN $maximumVehiclesAllowed = null, $overnightInd = null, $oneWayPolicy = null, $cancellationPenaltyInd = null, $modificationPenaltyInd = null, UNKNOWN $minimumAge = null, UNKNOWN $maximumAge = null, $noShowFeeInd = null)
    {
        $this
            ->setArriveByFlight($arriveByFlight)
            ->setMinimumDayInd($minimumDayInd)
            ->setMaximumDayInd($maximumDayInd)
            ->setAdvancedBookingInd($advancedBookingInd)
            ->setRestrictedMileageInd($restrictedMileageInd)
            ->setCorporateRateInd($corporateRateInd)
            ->setGuaranteeReqInd($guaranteeReqInd)
            ->setMaximumVehiclesAllowed($maximumVehiclesAllowed)
            ->setOvernightInd($overnightInd)
            ->setOneWayPolicy($oneWayPolicy)
            ->setCancellationPenaltyInd($cancellationPenaltyInd)
            ->setModificationPenaltyInd($modificationPenaltyInd)
            ->setMinimumAge($minimumAge)
            ->setMaximumAge($maximumAge)
            ->setNoShowFeeInd($noShowFeeInd);
    }
    /**
     * Get ArriveByFlight value
     * @return bool|null
     */
    public function getArriveByFlight()
    {
        return $this->ArriveByFlight;
    }
    /**
     * Set ArriveByFlight value
     * @param bool $arriveByFlight
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setArriveByFlight($arriveByFlight = null)
    {
        $this->ArriveByFlight = $arriveByFlight;
        return $this;
    }
    /**
     * Get MinimumDayInd value
     * @return bool|null
     */
    public function getMinimumDayInd()
    {
        return $this->MinimumDayInd;
    }
    /**
     * Set MinimumDayInd value
     * @param bool $minimumDayInd
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setMinimumDayInd($minimumDayInd = null)
    {
        $this->MinimumDayInd = $minimumDayInd;
        return $this;
    }
    /**
     * Get MaximumDayInd value
     * @return bool|null
     */
    public function getMaximumDayInd()
    {
        return $this->MaximumDayInd;
    }
    /**
     * Set MaximumDayInd value
     * @param bool $maximumDayInd
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setMaximumDayInd($maximumDayInd = null)
    {
        $this->MaximumDayInd = $maximumDayInd;
        return $this;
    }
    /**
     * Get AdvancedBookingInd value
     * @return bool|null
     */
    public function getAdvancedBookingInd()
    {
        return $this->AdvancedBookingInd;
    }
    /**
     * Set AdvancedBookingInd value
     * @param bool $advancedBookingInd
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setAdvancedBookingInd($advancedBookingInd = null)
    {
        $this->AdvancedBookingInd = $advancedBookingInd;
        return $this;
    }
    /**
     * Get RestrictedMileageInd value
     * @return bool|null
     */
    public function getRestrictedMileageInd()
    {
        return $this->RestrictedMileageInd;
    }
    /**
     * Set RestrictedMileageInd value
     * @param bool $restrictedMileageInd
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setRestrictedMileageInd($restrictedMileageInd = null)
    {
        $this->RestrictedMileageInd = $restrictedMileageInd;
        return $this;
    }
    /**
     * Get CorporateRateInd value
     * @return bool|null
     */
    public function getCorporateRateInd()
    {
        return $this->CorporateRateInd;
    }
    /**
     * Set CorporateRateInd value
     * @param bool $corporateRateInd
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setCorporateRateInd($corporateRateInd = null)
    {
        $this->CorporateRateInd = $corporateRateInd;
        return $this;
    }
    /**
     * Get GuaranteeReqInd value
     * @return bool|null
     */
    public function getGuaranteeReqInd()
    {
        return $this->GuaranteeReqInd;
    }
    /**
     * Set GuaranteeReqInd value
     * @param bool $guaranteeReqInd
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setGuaranteeReqInd($guaranteeReqInd = null)
    {
        $this->GuaranteeReqInd = $guaranteeReqInd;
        return $this;
    }
    /**
     * Get MaximumVehiclesAllowed value
     * @return UNKNOWN|null
     */
    public function getMaximumVehiclesAllowed()
    {
        return $this->MaximumVehiclesAllowed;
    }
    /**
     * Set MaximumVehiclesAllowed value
     * @param UNKNOWN $maximumVehiclesAllowed
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setMaximumVehiclesAllowed(UNKNOWN $maximumVehiclesAllowed = null)
    {
        $this->MaximumVehiclesAllowed = $maximumVehiclesAllowed;
        return $this;
    }
    /**
     * Get OvernightInd value
     * @return bool|null
     */
    public function getOvernightInd()
    {
        return $this->OvernightInd;
    }
    /**
     * Set OvernightInd value
     * @param bool $overnightInd
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setOvernightInd($overnightInd = null)
    {
        $this->OvernightInd = $overnightInd;
        return $this;
    }
    /**
     * Get OneWayPolicy value
     * @return string|null
     */
    public function getOneWayPolicy()
    {
        return $this->OneWayPolicy;
    }
    /**
     * Set OneWayPolicy value
     * @param string $oneWayPolicy
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setOneWayPolicy($oneWayPolicy = null)
    {
        // validation for constraint: string
        if (!is_null($oneWayPolicy) && !is_string($oneWayPolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($oneWayPolicy)), __LINE__);
        }
        $this->OneWayPolicy = $oneWayPolicy;
        return $this;
    }
    /**
     * Get CancellationPenaltyInd value
     * @return bool|null
     */
    public function getCancellationPenaltyInd()
    {
        return $this->CancellationPenaltyInd;
    }
    /**
     * Set CancellationPenaltyInd value
     * @param bool $cancellationPenaltyInd
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setCancellationPenaltyInd($cancellationPenaltyInd = null)
    {
        $this->CancellationPenaltyInd = $cancellationPenaltyInd;
        return $this;
    }
    /**
     * Get ModificationPenaltyInd value
     * @return bool|null
     */
    public function getModificationPenaltyInd()
    {
        return $this->ModificationPenaltyInd;
    }
    /**
     * Set ModificationPenaltyInd value
     * @param bool $modificationPenaltyInd
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setModificationPenaltyInd($modificationPenaltyInd = null)
    {
        $this->ModificationPenaltyInd = $modificationPenaltyInd;
        return $this;
    }
    /**
     * Get MinimumAge value
     * @return UNKNOWN|null
     */
    public function getMinimumAge()
    {
        return $this->MinimumAge;
    }
    /**
     * Set MinimumAge value
     * @param UNKNOWN $minimumAge
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setMinimumAge(UNKNOWN $minimumAge = null)
    {
        $this->MinimumAge = $minimumAge;
        return $this;
    }
    /**
     * Get MaximumAge value
     * @return UNKNOWN|null
     */
    public function getMaximumAge()
    {
        return $this->MaximumAge;
    }
    /**
     * Set MaximumAge value
     * @param UNKNOWN $maximumAge
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setMaximumAge(UNKNOWN $maximumAge = null)
    {
        $this->MaximumAge = $maximumAge;
        return $this;
    }
    /**
     * Get NoShowFeeInd value
     * @return bool|null
     */
    public function getNoShowFeeInd()
    {
        return $this->NoShowFeeInd;
    }
    /**
     * Set NoShowFeeInd value
     * @param bool $noShowFeeInd
     * @return \ammonkc\otaehi\StructType\RateRestrictions
     */
    public function setNoShowFeeInd($noShowFeeInd = null)
    {
        $this->NoShowFeeInd = $noShowFeeInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\RateRestrictions
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
