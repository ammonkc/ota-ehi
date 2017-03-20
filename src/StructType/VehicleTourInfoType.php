<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleTourInfoType StructType
 * @subpackage Structs
 */
class VehicleTourInfoType extends AbstractStructBase
{
    /**
     * The TourOperator
     * @var mixed
     */
    public $TourOperator;
    /**
     * The TourNumber
     * @var
     */
    public $TourNumber;
    /**
     * Constructor method for VehicleTourInfoType
     * @uses VehicleTourInfoType::setTourOperator()
     * @uses VehicleTourInfoType::setTourNumber()
     * @param mixed $tourOperator
     * @param  $tourNumber
     */
    public function __construct($tourOperator = null,  $tourNumber = null)
    {
        $this
            ->setTourOperator($tourOperator)
            ->setTourNumber($tourNumber);
    }
    /**
     * Get TourOperator value
     * @return mixed|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param mixed $tourOperator
     * @return \Ammonkc\Otaehi\StructType\VehicleTourInfoType
     */
    public function setTourOperator($tourOperator = null)
    {
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Get TourNumber value
     * @return |null
     */
    public function getTourNumber()
    {
        return $this->TourNumber;
    }
    /**
     * Set TourNumber value
     * @param  $tourNumber
     * @return \Ammonkc\Otaehi\StructType\VehicleTourInfoType
     */
    public function setTourNumber( $tourNumber = null)
    {
        $this->TourNumber = $tourNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleTourInfoType
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
