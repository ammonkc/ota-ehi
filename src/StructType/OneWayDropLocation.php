<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OneWayDropLocation StructType
 * @subpackage Structs
 */
class OneWayDropLocation extends AbstractStructBase
{
    /**
     * The ExtendedLocationCode
     * @var UNKNOWN
     */
    public $ExtendedLocationCode;
    /**
     * Constructor method for OneWayDropLocation
     * @uses OneWayDropLocation::setExtendedLocationCode()
     * @param UNKNOWN $extendedLocationCode
     */
    public function __construct(UNKNOWN $extendedLocationCode = null)
    {
        $this
            ->setExtendedLocationCode($extendedLocationCode);
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
     * @return \ammonkc\otaehi\StructType\OneWayDropLocation
     */
    public function setExtendedLocationCode(UNKNOWN $extendedLocationCode = null)
    {
        $this->ExtendedLocationCode = $extendedLocationCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OneWayDropLocation
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
