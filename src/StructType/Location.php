<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location StructType
 * @subpackage Structs
 */
class Location extends AbstractStructBase
{
    /**
     * The _
     * @var \ammonkc\otaehi\StructType\LocationType
     */
    public $_;
    /**
     * The ExtendedLocationCode
     * @var StringLength1to8
     */
    public $ExtendedLocationCode;
    /**
     * The CounterLocation
     * @var OTA_CodeType
     */
    public $CounterLocation;
    /**
     * Constructor method for Location
     * @uses Location::set_()
     * @uses Location::setExtendedLocationCode()
     * @uses Location::setCounterLocation()
     * @param \ammonkc\otaehi\StructType\LocationType $_
     * @param StringLength1to8 $extendedLocationCode
     * @param OTA_CodeType $counterLocation
     */
    public function __construct(\ammonkc\otaehi\StructType\LocationType $_ = null, StringLength1to8 $extendedLocationCode = null, OTA_CodeType $counterLocation = null)
    {
        $this
            ->set_($_)
            ->setExtendedLocationCode($extendedLocationCode)
            ->setCounterLocation($counterLocation);
    }
    /**
     * Get _ value
     * @return \ammonkc\otaehi\StructType\LocationType|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param \ammonkc\otaehi\StructType\LocationType $_
     * @return \ammonkc\otaehi\StructType\Location
     */
    public function set_(\ammonkc\otaehi\StructType\LocationType $_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Get ExtendedLocationCode value
     * @return StringLength1to8|null
     */
    public function getExtendedLocationCode()
    {
        return $this->ExtendedLocationCode;
    }
    /**
     * Set ExtendedLocationCode value
     * @param StringLength1to8 $extendedLocationCode
     * @return \ammonkc\otaehi\StructType\Location
     */
    public function setExtendedLocationCode(StringLength1to8 $extendedLocationCode = null)
    {
        $this->ExtendedLocationCode = $extendedLocationCode;
        return $this;
    }
    /**
     * Get CounterLocation value
     * @return OTA_CodeType|null
     */
    public function getCounterLocation()
    {
        return $this->CounterLocation;
    }
    /**
     * Set CounterLocation value
     * @param OTA_CodeType $counterLocation
     * @return \ammonkc\otaehi\StructType\Location
     */
    public function setCounterLocation(OTA_CodeType $counterLocation = null)
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
     * @return \ammonkc\otaehi\StructType\Location
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
