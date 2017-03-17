<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DropOffLocation StructType
 * @subpackage Structs
 */
class DropOffLocation extends AbstractStructBase
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
     * The Name
     * @var UNKNOWN
     */
    public $Name;
    /**
     * Constructor method for DropOffLocation
     * @uses DropOffLocation::setExtendedLocationCode()
     * @uses DropOffLocation::setCounterLocation()
     * @uses DropOffLocation::setName()
     * @param UNKNOWN $extendedLocationCode
     * @param UNKNOWN $counterLocation
     * @param UNKNOWN $name
     */
    public function __construct(UNKNOWN $extendedLocationCode = null, UNKNOWN $counterLocation = null, UNKNOWN $name = null)
    {
        $this
            ->setExtendedLocationCode($extendedLocationCode)
            ->setCounterLocation($counterLocation)
            ->setName($name);
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
     * @return \ammonkc\otaehi\StructType\DropOffLocation
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
     * @return \ammonkc\otaehi\StructType\DropOffLocation
     */
    public function setCounterLocation(UNKNOWN $counterLocation = null)
    {
        $this->CounterLocation = $counterLocation;
        return $this;
    }
    /**
     * Get Name value
     * @return UNKNOWN|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param UNKNOWN $name
     * @return \ammonkc\otaehi\StructType\DropOffLocation
     */
    public function setName(UNKNOWN $name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\DropOffLocation
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
