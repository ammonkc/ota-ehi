<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleReservationRQAdditionalInfoType StructType
 * @subpackage Structs
 */
class VehicleReservationRQAdditionalInfoType extends AbstractStructBase
{
    /**
     * The SpecialReqPref
     * @var mixed
     */
    public $SpecialReqPref;
    /**
     * The CoveragePrefs
     * @var \Ammonkc\Otaehi\StructType\CoveragePrefs
     */
    public $CoveragePrefs;
    /**
     * The OffLocService
     * @var mixed
     */
    public $OffLocService;
    /**
     * The ArrivalDetails
     * @var mixed
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
     * @var mixed
     */
    public $TourInfo;
    /**
     * The WrittenConfInst
     * @var mixed
     */
    public $WrittenConfInst;
    /**
     * The Remark
     * @var mixed
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
     * Constructor method for VehicleReservationRQAdditionalInfoType
     * @uses VehicleReservationRQAdditionalInfoType::setSpecialReqPref()
     * @uses VehicleReservationRQAdditionalInfoType::setCoveragePrefs()
     * @uses VehicleReservationRQAdditionalInfoType::setOffLocService()
     * @uses VehicleReservationRQAdditionalInfoType::setArrivalDetails()
     * @uses VehicleReservationRQAdditionalInfoType::setRentalPaymentPref()
     * @uses VehicleReservationRQAdditionalInfoType::setReference()
     * @uses VehicleReservationRQAdditionalInfoType::setTourInfo()
     * @uses VehicleReservationRQAdditionalInfoType::setWrittenConfInst()
     * @uses VehicleReservationRQAdditionalInfoType::setRemark()
     * @uses VehicleReservationRQAdditionalInfoType::setTPA_Extensions()
     * @uses VehicleReservationRQAdditionalInfoType::setLuggageQty()
     * @uses VehicleReservationRQAdditionalInfoType::setPassengerQty()
     * @uses VehicleReservationRQAdditionalInfoType::setGasPrePay()
     * @param mixed $specialReqPref
     * @param \Ammonkc\Otaehi\StructType\CoveragePrefs $coveragePrefs
     * @param mixed $offLocService
     * @param mixed $arrivalDetails
     * @param \Ammonkc\Otaehi\StructType\RentalPaymentPref $rentalPaymentPref
     * @param \Ammonkc\Otaehi\StructType\Reference $reference
     * @param mixed $tourInfo
     * @param mixed $writtenConfInst
     * @param mixed $remark
     * @param mixed $tPA_Extensions
     * @param int $luggageQty
     * @param int $passengerQty
     * @param bool $gasPrePay
     */
    public function __construct($specialReqPref = null, \Ammonkc\Otaehi\StructType\CoveragePrefs $coveragePrefs = null, $offLocService = null, $arrivalDetails = null, \Ammonkc\Otaehi\StructType\RentalPaymentPref $rentalPaymentPref = null, \Ammonkc\Otaehi\StructType\Reference $reference = null, $tourInfo = null, $writtenConfInst = null, $remark = null, $tPA_Extensions = null, $luggageQty = null, $passengerQty = null, $gasPrePay = null)
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
            ->setGasPrePay($gasPrePay);
    }
    /**
     * Get SpecialReqPref value
     * @return mixed|null
     */
    public function getSpecialReqPref()
    {
        return $this->SpecialReqPref;
    }
    /**
     * Set SpecialReqPref value
     * @param mixed $specialReqPref
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setSpecialReqPref($specialReqPref = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setCoveragePrefs(\Ammonkc\Otaehi\StructType\CoveragePrefs $coveragePrefs = null)
    {
        $this->CoveragePrefs = $coveragePrefs;
        return $this;
    }
    /**
     * Get OffLocService value
     * @return mixed|null
     */
    public function getOffLocService()
    {
        return $this->OffLocService;
    }
    /**
     * Set OffLocService value
     * @param mixed $offLocService
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setOffLocService($offLocService = null)
    {
        $this->OffLocService = $offLocService;
        return $this;
    }
    /**
     * Get ArrivalDetails value
     * @return mixed|null
     */
    public function getArrivalDetails()
    {
        return $this->ArrivalDetails;
    }
    /**
     * Set ArrivalDetails value
     * @param mixed $arrivalDetails
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setArrivalDetails($arrivalDetails = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setReference(\Ammonkc\Otaehi\StructType\Reference $reference = null)
    {
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Get TourInfo value
     * @return mixed|null
     */
    public function getTourInfo()
    {
        return $this->TourInfo;
    }
    /**
     * Set TourInfo value
     * @param mixed $tourInfo
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setTourInfo($tourInfo = null)
    {
        $this->TourInfo = $tourInfo;
        return $this;
    }
    /**
     * Get WrittenConfInst value
     * @return mixed|null
     */
    public function getWrittenConfInst()
    {
        return $this->WrittenConfInst;
    }
    /**
     * Set WrittenConfInst value
     * @param mixed $writtenConfInst
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setWrittenConfInst($writtenConfInst = null)
    {
        $this->WrittenConfInst = $writtenConfInst;
        return $this;
    }
    /**
     * Get Remark value
     * @return mixed|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param mixed $remark
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setRemark($remark = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
     */
    public function setGasPrePay($gasPrePay = null)
    {
        $this->GasPrePay = $gasPrePay;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQAdditionalInfoType
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
