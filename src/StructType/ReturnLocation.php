<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnLocation StructType
 * @subpackage Structs
 */
class ReturnLocation extends AbstractStructBase
{
    /**
     * The ExtendedLocationCode
     * @var UNKNOWN
     */
    public $ExtendedLocationCode;
    /**
     * The CounterLocation
     * @var UNKNOWN
     */
    public $CounterLocation;
    /**
     * Constructor method for ReturnLocation
     * @uses ReturnLocation::setExtendedLocationCode()
     * @uses ReturnLocation::setCounterLocation()
     * @param UNKNOWN $extendedLocationCode
     * @param UNKNOWN $counterLocation
     */
    public function __construct(UNKNOWN $extendedLocationCode = null, UNKNOWN $counterLocation = null)
    {
        $this
            ->setExtendedLocationCode($extendedLocationCode)
            ->setCounterLocation($counterLocation);
    }
    /**
     * Get ExtendedLocationCode value
     * @return UNKNOWN|null
     */
    public function getExtendedLocationCode()
    {
        return $this->ExtendedLocationCode;
    }
    /**
     * Set ExtendedLocationCode value
     * @param UNKNOWN $extendedLocationCode
     * @return \Ammonkc\Otaehi\StructType\ReturnLocation
     */
    public function setExtendedLocationCode(UNKNOWN $extendedLocationCode = null)
    {
        $this->ExtendedLocationCode = $extendedLocationCode;
        return $this;
    }
    /**
     * Get CounterLocation value
     * @return UNKNOWN|null
     */
    public function getCounterLocation()
    {
        return $this->CounterLocation;
    }
    /**
     * Set CounterLocation value
     * @param UNKNOWN $counterLocation
     * @return \Ammonkc\Otaehi\StructType\ReturnLocation
     */
    public function setCounterLocation(UNKNOWN $counterLocation = null)
    {
        $this->CounterLocation = $counterLocation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ReturnLocation
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
