<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleModifyRQAdditionalInfoType StructType
 * @subpackage Structs
 */
class VehicleModifyRQAdditionalInfoType extends AbstractStructBase
{
    /**
     * The SpecialReqPref
     * @var \Ammonkc\Otaehi\StructType\VehicleSpecialReqPrefType
     */
    public $SpecialReqPref;
    /**
     * The CoveragePrefs
     * @var \Ammonkc\Otaehi\StructType\CoveragePrefs
     */
    public $CoveragePrefs;
    /**
     * The OffLocService
     * @var \Ammonkc\Otaehi\StructType\OffLocationServiceType
     */
    public $OffLocService;
    /**
     * The ArrivalDetails
     * @var \Ammonkc\Otaehi\StructType\VehicleArrivalDetailsType
     */
    public $ArrivalDetails;
    /**
     * The RentalPaymentPref
     * @var \Ammonkc\Otaehi\StructType\RentalPaymentPref
     */
    public $RentalPaymentPref;
    /**
     * The Reference
     * @var \Ammonkc\Otaehi\StructType\Reference
     */
    public $Reference;
    /**
     * The TourInfo
     * @var \Ammonkc\Otaehi\StructType\VehicleTourInfoType
     */
    public $TourInfo;
    /**
     * The WrittenConfInst
     * @var \Ammonkc\Otaehi\StructType\WrittenConfInstType
     */
    public $WrittenConfInst;
    /**
     * The Remark
     * @var \Ammonkc\Otaehi\StructType\ParagraphType
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
     * @param \Ammonkc\Otaehi\StructType\VehicleSpecialReqPrefType $specialReqPref
     * @param \Ammonkc\Otaehi\StructType\CoveragePrefs $coveragePrefs
     * @param \Ammonkc\Otaehi\StructType\OffLocationServiceType $offLocService
     * @param \Ammonkc\Otaehi\StructType\VehicleArrivalDetailsType $arrivalDetails
     * @param \Ammonkc\Otaehi\StructType\RentalPaymentPref $rentalPaymentPref
     * @param \Ammonkc\Otaehi\StructType\Reference $reference
     * @param \Ammonkc\Otaehi\StructType\VehicleTourInfoType $tourInfo
     * @param \Ammonkc\Otaehi\StructType\WrittenConfInstType $writtenConfInst
     * @param \Ammonkc\Otaehi\StructType\ParagraphType $remark
     * @param mixed $tPA_Extensions
     * @param int $luggageQty
     * @param int $passengerQty
     * @param bool $gasPrePay
     * @param bool $smokingAllowed
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VehicleSpecialReqPrefType $specialReqPref = null, \Ammonkc\Otaehi\StructType\CoveragePrefs $coveragePrefs = null, \Ammonkc\Otaehi\StructType\OffLocationServiceType $offLocService = null, \Ammonkc\Otaehi\StructType\VehicleArrivalDetailsType $arrivalDetails = null, \Ammonkc\Otaehi\StructType\RentalPaymentPref $rentalPaymentPref = null, \Ammonkc\Otaehi\StructType\Reference $reference = null, \Ammonkc\Otaehi\StructType\VehicleTourInfoType $tourInfo = null, \Ammonkc\Otaehi\StructType\WrittenConfInstType $writtenConfInst = null, \Ammonkc\Otaehi\StructType\ParagraphType $remark = null, $tPA_Extensions = null, $luggageQty = null, $passengerQty = null, $gasPrePay = null, $smokingAllowed = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleSpecialReqPrefType|null
     */
    public function getSpecialReqPref()
    {
        return $this->SpecialReqPref;
    }
    /**
     * Set SpecialReqPref value
     * @param \Ammonkc\Otaehi\StructType\VehicleSpecialReqPrefType $specialReqPref
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setSpecialReqPref(\Ammonkc\Otaehi\StructType\VehicleSpecialReqPrefType $specialReqPref = null)
    {
        $this->SpecialReqPref = $specialReqPref;
        return $this;
    }
    /**
     * Get CoveragePrefs value
     * @return \Ammonkc\Otaehi\StructType\CoveragePrefs|null
     */
    public function getCoveragePrefs()
    {
        return $this->CoveragePrefs;
    }
    /**
     * Set CoveragePrefs value
     * @param \Ammonkc\Otaehi\StructType\CoveragePrefs $coveragePrefs
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setCoveragePrefs(\Ammonkc\Otaehi\StructType\CoveragePrefs $coveragePrefs = null)
    {
        $this->CoveragePrefs = $coveragePrefs;
        return $this;
    }
    /**
     * Get OffLocService value
     * @return \Ammonkc\Otaehi\StructType\OffLocationServiceType|null
     */
    public function getOffLocService()
    {
        return $this->OffLocService;
    }
    /**
     * Set OffLocService value
     * @param \Ammonkc\Otaehi\StructType\OffLocationServiceType $offLocService
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setOffLocService(\Ammonkc\Otaehi\StructType\OffLocationServiceType $offLocService = null)
    {
        $this->OffLocService = $offLocService;
        return $this;
    }
    /**
     * Get ArrivalDetails value
     * @return \Ammonkc\Otaehi\StructType\VehicleArrivalDetailsType|null
     */
    public function getArrivalDetails()
    {
        return $this->ArrivalDetails;
    }
    /**
     * Set ArrivalDetails value
     * @param \Ammonkc\Otaehi\StructType\VehicleArrivalDetailsType $arrivalDetails
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setArrivalDetails(\Ammonkc\Otaehi\StructType\VehicleArrivalDetailsType $arrivalDetails = null)
    {
        $this->ArrivalDetails = $arrivalDetails;
        return $this;
    }
    /**
     * Get RentalPaymentPref value
     * @return \Ammonkc\Otaehi\StructType\RentalPaymentPref|null
     */
    public function getRentalPaymentPref()
    {
        return $this->RentalPaymentPref;
    }
    /**
     * Set RentalPaymentPref value
     * @param \Ammonkc\Otaehi\StructType\RentalPaymentPref $rentalPaymentPref
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setRentalPaymentPref(\Ammonkc\Otaehi\StructType\RentalPaymentPref $rentalPaymentPref = null)
    {
        $this->RentalPaymentPref = $rentalPaymentPref;
        return $this;
    }
    /**
     * Get Reference value
     * @return \Ammonkc\Otaehi\StructType\Reference|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param \Ammonkc\Otaehi\StructType\Reference $reference
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setReference(\Ammonkc\Otaehi\StructType\Reference $reference = null)
    {
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Get TourInfo value
     * @return \Ammonkc\Otaehi\StructType\VehicleTourInfoType|null
     */
    public function getTourInfo()
    {
        return $this->TourInfo;
    }
    /**
     * Set TourInfo value
     * @param \Ammonkc\Otaehi\StructType\VehicleTourInfoType $tourInfo
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setTourInfo(\Ammonkc\Otaehi\StructType\VehicleTourInfoType $tourInfo = null)
    {
        $this->TourInfo = $tourInfo;
        return $this;
    }
    /**
     * Get WrittenConfInst value
     * @return \Ammonkc\Otaehi\StructType\WrittenConfInstType|null
     */
    public function getWrittenConfInst()
    {
        return $this->WrittenConfInst;
    }
    /**
     * Set WrittenConfInst value
     * @param \Ammonkc\Otaehi\StructType\WrittenConfInstType $writtenConfInst
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setWrittenConfInst(\Ammonkc\Otaehi\StructType\WrittenConfInstType $writtenConfInst = null)
    {
        $this->WrittenConfInst = $writtenConfInst;
        return $this;
    }
    /**
     * Get Remark value
     * @return \Ammonkc\Otaehi\StructType\ParagraphType|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \Ammonkc\Otaehi\StructType\ParagraphType $remark
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
     */
    public function setRemark(\Ammonkc\Otaehi\StructType\ParagraphType $remark = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQAdditionalInfoType
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
