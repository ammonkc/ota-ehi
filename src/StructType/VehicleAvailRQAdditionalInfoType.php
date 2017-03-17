<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailRQAdditionalInfoType StructType
 * @subpackage Structs
 */
class VehicleAvailRQAdditionalInfoType extends AbstractStructBase
{
    /**
     * The Customer
     * @var mixed
     */
    public $Customer;
    /**
     * The SpecialReqPref
     * @var mixed
     */
    public $SpecialReqPref;
    /**
     * The CoveragePrefs
     * @var \ammonkc\otaehi\StructType\CoveragePrefs
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
     * The TourInfo
     * @var mixed
     */
    public $TourInfo;
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
     * The SingleQuote
     * @var bool
     */
    public $SingleQuote;
    /**
     * Constructor method for VehicleAvailRQAdditionalInfoType
     * @uses VehicleAvailRQAdditionalInfoType::setCustomer()
     * @uses VehicleAvailRQAdditionalInfoType::setSpecialReqPref()
     * @uses VehicleAvailRQAdditionalInfoType::setCoveragePrefs()
     * @uses VehicleAvailRQAdditionalInfoType::setOffLocService()
     * @uses VehicleAvailRQAdditionalInfoType::setArrivalDetails()
     * @uses VehicleAvailRQAdditionalInfoType::setTourInfo()
     * @uses VehicleAvailRQAdditionalInfoType::setTPA_Extensions()
     * @uses VehicleAvailRQAdditionalInfoType::setLuggageQty()
     * @uses VehicleAvailRQAdditionalInfoType::setPassengerQty()
     * @uses VehicleAvailRQAdditionalInfoType::setGasPrePay()
     * @uses VehicleAvailRQAdditionalInfoType::setSingleQuote()
     * @param mixed $customer
     * @param mixed $specialReqPref
     * @param \ammonkc\otaehi\StructType\CoveragePrefs $coveragePrefs
     * @param mixed $offLocService
     * @param mixed $arrivalDetails
     * @param mixed $tourInfo
     * @param mixed $tPA_Extensions
     * @param int $luggageQty
     * @param int $passengerQty
     * @param bool $gasPrePay
     * @param bool $singleQuote
     */
    public function __construct($customer = null, $specialReqPref = null, \ammonkc\otaehi\StructType\CoveragePrefs $coveragePrefs = null, $offLocService = null, $arrivalDetails = null, $tourInfo = null, $tPA_Extensions = null, $luggageQty = null, $passengerQty = null, $gasPrePay = null, $singleQuote = null)
    {
        $this
            ->setCustomer($customer)
            ->setSpecialReqPref($specialReqPref)
            ->setCoveragePrefs($coveragePrefs)
            ->setOffLocService($offLocService)
            ->setArrivalDetails($arrivalDetails)
            ->setTourInfo($tourInfo)
            ->setTPA_Extensions($tPA_Extensions)
            ->setLuggageQty($luggageQty)
            ->setPassengerQty($passengerQty)
            ->setGasPrePay($gasPrePay)
            ->setSingleQuote($singleQuote);
    }
    /**
     * Get Customer value
     * @return mixed|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param mixed $customer
     * @return \ammonkc\otaehi\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setCustomer($customer = null)
    {
        $this->Customer = $customer;
        return $this;
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setSpecialReqPref($specialReqPref = null)
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setCoveragePrefs(\ammonkc\otaehi\StructType\CoveragePrefs $coveragePrefs = null)
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailRQAdditionalInfoType
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setArrivalDetails($arrivalDetails = null)
    {
        $this->ArrivalDetails = $arrivalDetails;
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setTourInfo($tourInfo = null)
    {
        $this->TourInfo = $tourInfo;
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailRQAdditionalInfoType
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailRQAdditionalInfoType
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailRQAdditionalInfoType
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setGasPrePay($gasPrePay = null)
    {
        $this->GasPrePay = $gasPrePay;
        return $this;
    }
    /**
     * Get SingleQuote value
     * @return bool|null
     */
    public function getSingleQuote()
    {
        return $this->SingleQuote;
    }
    /**
     * Set SingleQuote value
     * @param bool $singleQuote
     * @return \ammonkc\otaehi\StructType\VehicleAvailRQAdditionalInfoType
     */
    public function setSingleQuote($singleQuote = null)
    {
        $this->SingleQuote = $singleQuote;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleAvailRQAdditionalInfoType
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
