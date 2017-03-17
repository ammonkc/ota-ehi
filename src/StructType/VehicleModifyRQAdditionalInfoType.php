<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleModifyRQAdditionalInfoType StructType
 * @subpackage Structs
 */
class VehicleModifyRQAdditionalInfoType extends AbstractStructBase
{
    /**
     * The SpecialReqPref
     * @var \ammonkc\otaehi\StructType\VehicleSpecialReqPrefType
     */
    public $SpecialReqPref;
    /**
     * The CoveragePrefs
     * @var \ammonkc\otaehi\StructType\CoveragePrefs
     */
    public $CoveragePrefs;
    /**
     * The OffLocService
     * @var \ammonkc\otaehi\StructType\OffLocationServiceType
     */
    public $OffLocService;
    /**
     * The ArrivalDetails
     * @var \ammonkc\otaehi\StructType\VehicleArrivalDetailsType
     */
    public $ArrivalDetails;
    /**
     * The RentalPaymentPref
     * @var \ammonkc\otaehi\StructType\RentalPaymentPref
     */
    public $RentalPaymentPref;
    /**
     * The Reference
     * @var \ammonkc\otaehi\StructType\Reference
     */
    public $Reference;
    /**
     * The TourInfo
     * @var \ammonkc\otaehi\StructType\VehicleTourInfoType
     */
    public $TourInfo;
    /**
     * The WrittenConfInst
     * @var \ammonkc\otaehi\StructType\WrittenConfInstType
     */
    public $WrittenConfInst;
    /**
     * The Remark
     * @var \ammonkc\otaehi\StructType\ParagraphType
     */
    public $Remark;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The LuggageQty
     * @var int
     */
    public $LuggageQty;
    /**
     * The PassengerQty
     * @var int
     */
    public $PassengerQty;
    /**
     * The GasPrePay
     * @var bool
     */
    public $GasPrePay;
    /**
     * The SmokingAllowed
     * @var bool
     */
    public $SmokingAllowed;
    /**
     * Constructor method for VehicleModifyRQAdditionalInfoType
     * @uses VehicleModifyRQAdditionalInfoType::setSpecialReqPref()
     * @uses VehicleModifyRQAdditionalInfoType::setCoveragePrefs()
     * @uses VehicleModifyRQAdditionalInfoType::setOffLocService()
     * @uses VehicleModifyRQAdditionalInfoType::setArrivalDetails()
     * @uses VehicleModifyRQAdditionalInfoType::setRentalPaymentPref()
     * @uses VehicleModifyRQAdditionalInfoType::setReference()
     * @uses VehicleModifyRQAdditionalInfoType::setTourInfo()
     * @uses VehicleModifyRQAdditionalInfoType::setWrittenConfInst()
     * @uses VehicleModifyRQAdditionalInfoType::setRemark()
     * @uses VehicleModifyRQAdditionalInfoType::setTPA_Extensions()
     * @uses VehicleModifyRQAdditionalInfoType::setLuggageQty()
     * @uses VehicleModifyRQAdditionalInfoType::setPassengerQty()
     * @uses VehicleModifyRQAdditionalInfoType::setGasPrePay()
     * @uses VehicleModifyRQAdditionalInfoType::setSmokingAllowed()
     * @param \ammonkc\otaehi\StructType\VehicleSpecialReqPrefType $specialReqPref
     * @param \ammonkc\otaehi\StructType\CoveragePrefs $coveragePrefs
     * @param \ammonkc\otaehi\StructType\OffLocationServiceType $offLocService
     * @param \ammonkc\otaehi\StructType\VehicleArrivalDetailsType $arrivalDetails
     * @param \ammonkc\otaehi\StructType\RentalPaymentPref $rentalPaymentPref
     * @param \ammonkc\otaehi\StructType\Reference $reference
     * @param \ammonkc\otaehi\StructType\VehicleTourInfoType $tourInfo
     * @param \ammonkc\otaehi\StructType\WrittenConfInstType $writtenConfInst
     * @param \ammonkc\otaehi\StructType\ParagraphType $remark
     * @param mixed $tPA_Extensions
     * @param int $luggageQty
     * @param int $passengerQty
     * @param bool $gasPrePay
     * @param bool $smokingAllowed
     */
    public function __construct(\ammonkc\otaehi\StructType\VehicleSpecialReqPrefType $specialReqPref = null, \ammonkc\otaehi\StructType\CoveragePrefs $coveragePrefs = null, \ammonkc\otaehi\StructType\OffLocationServiceType $offLocService = null, \ammonkc\otaehi\StructType\VehicleArrivalDetailsType $arrivalDetails = null, \ammonkc\otaehi\StructType\RentalPaymentPref $rentalPaymentPref = null, \ammonkc\otaehi\StructType\Reference $reference = null, \ammonkc\otaehi\StructType\VehicleTourInfoType $tourInfo = null, \ammonkc\otaehi\StructType\WrittenConfInstType $writtenConfInst = null, \ammonkc\otaehi\StructType\ParagraphType $remark = null, $tPA_Extensions = null, $luggageQty = null, $passengerQty = null, $gasPrePay = null, $smokingAllowed = null)
    {
        $this
            ->setSpecialReqPref($specialReqPref)
            ->setCoveragePrefs($coveragePrefs)
            ->setOffLocService($offLocService)
            ->setArrivalDetails($arrivalDetails)
            ->setRentalPaymentPref($rentalPaymentPref)
            ->setReference($reference)
            ->setTourInfo($tourInfo)
            ->setWrittenConfInst($writtenConfInst)
            ->setRemark($remark)
            ->setTPA_Extensions($tPA_Extensions)
            ->setLuggageQty($luggageQty)
            ->setPassengerQty($passengerQty)
            ->setGasPrePay($gasPrePay)
            ->setSmokingAllowed($smokingAllowed);
    }
    /**
     * Get SpecialReqPref value
     * @return \ammonkc\otaehi\StructType\VehicleSpecialReqPrefType|null
     */
    public function getSpecialReqPref()
    {
        return $this->SpecialReqPref;
    }
    /**
     * Set SpecialReqPref value
     * @param \ammonkc\otaehi\StructType\VehicleSpecialReqPrefType $specialReqPref
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setSpecialReqPref(\ammonkc\otaehi\StructType\VehicleSpecialReqPrefType $specialReqPref = null)
    {
        $this->SpecialReqPref = $specialReqPref;
        return $this;
    }
    /**
     * Get CoveragePrefs value
     * @return \ammonkc\otaehi\StructType\CoveragePrefs|null
     */
    public function getCoveragePrefs()
    {
        return $this->CoveragePrefs;
    }
    /**
     * Set CoveragePrefs value
     * @param \ammonkc\otaehi\StructType\CoveragePrefs $coveragePrefs
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setCoveragePrefs(\ammonkc\otaehi\StructType\CoveragePrefs $coveragePrefs = null)
    {
        $this->CoveragePrefs = $coveragePrefs;
        return $this;
    }
    /**
     * Get OffLocService value
     * @return \ammonkc\otaehi\StructType\OffLocationServiceType|null
     */
    public function getOffLocService()
    {
        return $this->OffLocService;
    }
    /**
     * Set OffLocService value
     * @param \ammonkc\otaehi\StructType\OffLocationServiceType $offLocService
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setOffLocService(\ammonkc\otaehi\StructType\OffLocationServiceType $offLocService = null)
    {
        $this->OffLocService = $offLocService;
        return $this;
    }
    /**
     * Get ArrivalDetails value
     * @return \ammonkc\otaehi\StructType\VehicleArrivalDetailsType|null
     */
    public function getArrivalDetails()
    {
        return $this->ArrivalDetails;
    }
    /**
     * Set ArrivalDetails value
     * @param \ammonkc\otaehi\StructType\VehicleArrivalDetailsType $arrivalDetails
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setArrivalDetails(\ammonkc\otaehi\StructType\VehicleArrivalDetailsType $arrivalDetails = null)
    {
        $this->ArrivalDetails = $arrivalDetails;
        return $this;
    }
    /**
     * Get RentalPaymentPref value
     * @return \ammonkc\otaehi\StructType\RentalPaymentPref|null
     */
    public function getRentalPaymentPref()
    {
        return $this->RentalPaymentPref;
    }
    /**
     * Set RentalPaymentPref value
     * @param \ammonkc\otaehi\StructType\RentalPaymentPref $rentalPaymentPref
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setRentalPaymentPref(\ammonkc\otaehi\StructType\RentalPaymentPref $rentalPaymentPref = null)
    {
        $this->RentalPaymentPref = $rentalPaymentPref;
        return $this;
    }
    /**
     * Get Reference value
     * @return \ammonkc\otaehi\StructType\Reference|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param \ammonkc\otaehi\StructType\Reference $reference
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setReference(\ammonkc\otaehi\StructType\Reference $reference = null)
    {
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Get TourInfo value
     * @return \ammonkc\otaehi\StructType\VehicleTourInfoType|null
     */
    public function getTourInfo()
    {
        return $this->TourInfo;
    }
    /**
     * Set TourInfo value
     * @param \ammonkc\otaehi\StructType\VehicleTourInfoType $tourInfo
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setTourInfo(\ammonkc\otaehi\StructType\VehicleTourInfoType $tourInfo = null)
    {
        $this->TourInfo = $tourInfo;
        return $this;
    }
    /**
     * Get WrittenConfInst value
     * @return \ammonkc\otaehi\StructType\WrittenConfInstType|null
     */
    public function getWrittenConfInst()
    {
        return $this->WrittenConfInst;
    }
    /**
     * Set WrittenConfInst value
     * @param \ammonkc\otaehi\StructType\WrittenConfInstType $writtenConfInst
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setWrittenConfInst(\ammonkc\otaehi\StructType\WrittenConfInstType $writtenConfInst = null)
    {
        $this->WrittenConfInst = $writtenConfInst;
        return $this;
    }
    /**
     * Get Remark value
     * @return \ammonkc\otaehi\StructType\ParagraphType|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \ammonkc\otaehi\StructType\ParagraphType $remark
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setRemark(\ammonkc\otaehi\StructType\ParagraphType $remark = null)
    {
        $this->Remark = $remark;
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
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get LuggageQty value
     * @return int|null
     */
    public function getLuggageQty()
    {
        return $this->LuggageQty;
    }
    /**
     * Set LuggageQty value
     * @param int $luggageQty
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setLuggageQty($luggageQty = null)
    {
        // validation for constraint: int
        if (!is_null($luggageQty) && !is_numeric($luggageQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($luggageQty)), __LINE__);
        }
        $this->LuggageQty = $luggageQty;
        return $this;
    }
    /**
     * Get PassengerQty value
     * @return int|null
     */
    public function getPassengerQty()
    {
        return $this->PassengerQty;
    }
    /**
     * Set PassengerQty value
     * @param int $passengerQty
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setPassengerQty($passengerQty = null)
    {
        // validation for constraint: int
        if (!is_null($passengerQty) && !is_numeric($passengerQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($passengerQty)), __LINE__);
        }
        $this->PassengerQty = $passengerQty;
        return $this;
    }
    /**
     * Get GasPrePay value
     * @return bool|null
     */
    public function getGasPrePay()
    {
        return $this->GasPrePay;
    }
    /**
     * Set GasPrePay value
     * @param bool $gasPrePay
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setGasPrePay($gasPrePay = null)
    {
        $this->GasPrePay = $gasPrePay;
        return $this;
    }
    /**
     * Get SmokingAllowed value
     * @return bool|null
     */
    public function getSmokingAllowed()
    {
        return $this->SmokingAllowed;
    }
    /**
     * Set SmokingAllowed value
     * @param bool $smokingAllowed
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setSmokingAllowed($smokingAllowed = null)
    {
        $this->SmokingAllowed = $smokingAllowed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQAdditionalInfoType
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
