<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleArrivalDetailsType StructType
 * @subpackage Structs
 */
class VehicleArrivalDetailsType extends AbstractStructBase
{
    /**
     * The ArrivalLocation
     * @var mixed
     */
    public $ArrivalLocation;
    /**
     * The MarketingCompany
     * @var mixed
     */
    public $MarketingCompany;
    /**
     * The OperatingCompany
     * @var mixed
     */
    public $OperatingCompany;
    /**
     * The TransportationCode
     * @var UNKNOWN
     */
    public $TransportationCode;
    /**
     * The Number
     * @var UNKNOWN
     */
    public $Number;
    /**
     * The ArrivalDateTime
     * @var string
     */
    public $ArrivalDateTime;
    /**
     * Constructor method for VehicleArrivalDetailsType
     * @uses VehicleArrivalDetailsType::setArrivalLocation()
     * @uses VehicleArrivalDetailsType::setMarketingCompany()
     * @uses VehicleArrivalDetailsType::setOperatingCompany()
     * @uses VehicleArrivalDetailsType::setTransportationCode()
     * @uses VehicleArrivalDetailsType::setNumber()
     * @uses VehicleArrivalDetailsType::setArrivalDateTime()
     * @param mixed $arrivalLocation
     * @param mixed $marketingCompany
     * @param mixed $operatingCompany
     * @param UNKNOWN $transportationCode
     * @param UNKNOWN $number
     * @param string $arrivalDateTime
     */
    public function __construct($arrivalLocation = null, $marketingCompany = null, $operatingCompany = null, UNKNOWN $transportationCode = null, UNKNOWN $number = null, $arrivalDateTime = null)
    {
        $this
            ->setArrivalLocation($arrivalLocation)
            ->setMarketingCompany($marketingCompany)
            ->setOperatingCompany($operatingCompany)
            ->setTransportationCode($transportationCode)
            ->setNumber($number)
            ->setArrivalDateTime($arrivalDateTime);
    }
    /**
     * Get ArrivalLocation value
     * @return mixed|null
     */
    public function getArrivalLocation()
    {
        return $this->ArrivalLocation;
    }
    /**
     * Set ArrivalLocation value
     * @param mixed $arrivalLocation
     * @return \ammonkc\otaehi\StructType\VehicleArrivalDetailsType
     */
    public function setArrivalLocation($arrivalLocation = null)
    {
        $this->ArrivalLocation = $arrivalLocation;
        return $this;
    }
    /**
     * Get MarketingCompany value
     * @return mixed|null
     */
    public function getMarketingCompany()
    {
        return $this->MarketingCompany;
    }
    /**
     * Set MarketingCompany value
     * @param mixed $marketingCompany
     * @return \ammonkc\otaehi\StructType\VehicleArrivalDetailsType
     */
    public function setMarketingCompany($marketingCompany = null)
    {
        $this->MarketingCompany = $marketingCompany;
        return $this;
    }
    /**
     * Get OperatingCompany value
     * @return mixed|null
     */
    public function getOperatingCompany()
    {
        return $this->OperatingCompany;
    }
    /**
     * Set OperatingCompany value
     * @param mixed $operatingCompany
     * @return \ammonkc\otaehi\StructType\VehicleArrivalDetailsType
     */
    public function setOperatingCompany($operatingCompany = null)
    {
        $this->OperatingCompany = $operatingCompany;
        return $this;
    }
    /**
     * Get TransportationCode value
     * @return UNKNOWN|null
     */
    public function getTransportationCode()
    {
        return $this->TransportationCode;
    }
    /**
     * Set TransportationCode value
     * @param UNKNOWN $transportationCode
     * @return \ammonkc\otaehi\StructType\VehicleArrivalDetailsType
     */
    public function setTransportationCode(UNKNOWN $transportationCode = null)
    {
        $this->TransportationCode = $transportationCode;
        return $this;
    }
    /**
     * Get Number value
     * @return UNKNOWN|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param UNKNOWN $number
     * @return \ammonkc\otaehi\StructType\VehicleArrivalDetailsType
     */
    public function setNumber(UNKNOWN $number = null)
    {
        $this->Number = $number;
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * @return string|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }
    /**
     * Set ArrivalDateTime value
     * @param string $arrivalDateTime
     * @return \ammonkc\otaehi\StructType\VehicleArrivalDetailsType
     */
    public function setArrivalDateTime($arrivalDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDateTime) && !is_string($arrivalDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDateTime)), __LINE__);
        }
        $this->ArrivalDateTime = $arrivalDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleArrivalDetailsType
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
