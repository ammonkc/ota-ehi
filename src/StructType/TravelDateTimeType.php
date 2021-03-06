<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelDateTimeType StructType
 * @subpackage Structs
 */
class TravelDateTimeType extends AbstractStructBase
{
    /**
     * The DepartureDateTime
     * @var mixed
     */
    public $DepartureDateTime;
    /**
     * The ArrivalDateTime
     * @var mixed
     */
    public $ArrivalDateTime;
    /**
     * Constructor method for TravelDateTimeType
     * @uses TravelDateTimeType::setDepartureDateTime()
     * @uses TravelDateTimeType::setArrivalDateTime()
     * @param mixed $departureDateTime
     * @param mixed $arrivalDateTime
     */
    public function __construct($departureDateTime = null, $arrivalDateTime = null)
    {
        $this
            ->setDepartureDateTime($departureDateTime)
            ->setArrivalDateTime($arrivalDateTime);
    }
    /**
     * Get DepartureDateTime value
     * @return mixed|null
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }
    /**
     * Set DepartureDateTime value
     * @param mixed $departureDateTime
     * @return \Ammonkc\Otaehi\StructType\TravelDateTimeType
     */
    public function setDepartureDateTime($departureDateTime = null)
    {
        $this->DepartureDateTime = $departureDateTime;
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * @return mixed|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }
    /**
     * Set ArrivalDateTime value
     * @param mixed $arrivalDateTime
     * @return \Ammonkc\Otaehi\StructType\TravelDateTimeType
     */
    public function setArrivalDateTime($arrivalDateTime = null)
    {
        $this->ArrivalDateTime = $arrivalDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\TravelDateTimeType
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
