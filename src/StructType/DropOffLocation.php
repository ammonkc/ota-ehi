<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DropOffLocation StructType
 * @subpackage Structs
 */
class DropOffLocation extends AbstractStructBase
{
    /**
     * The ExtendedLocationCode
     * @var
     */
    public $ExtendedLocationCode;
    /**
     * The CounterLocation
     * @var
     */
    public $CounterLocation;
    /**
     * The Name
     * @var
     */
    public $Name;
    /**
     * Constructor method for DropOffLocation
     * @uses DropOffLocation::setExtendedLocationCode()
     * @uses DropOffLocation::setCounterLocation()
     * @uses DropOffLocation::setName()
     * @param  $extendedLocationCode
     * @param  $counterLocation
     * @param  $name
     */
    public function __construct( $extendedLocationCode = null,  $counterLocation = null,  $name = null)
    {
        $this
            ->setExtendedLocationCode($extendedLocationCode)
            ->setCounterLocation($counterLocation)
            ->setName($name);
    }
    /**
     * Get ExtendedLocationCode value
     * @return |null
     */
    public function getExtendedLocationCode()
    {
        return $this->ExtendedLocationCode;
    }
    /**
     * Set ExtendedLocationCode value
     * @param  $extendedLocationCode
     * @return \Ammonkc\Otaehi\StructType\DropOffLocation
     */
    public function setExtendedLocationCode( $extendedLocationCode = null)
    {
        $this->ExtendedLocationCode = $extendedLocationCode;
        return $this;
    }
    /**
     * Get CounterLocation value
     * @return |null
     */
    public function getCounterLocation()
    {
        return $this->CounterLocation;
    }
    /**
     * Set CounterLocation value
     * @param  $counterLocation
     * @return \Ammonkc\Otaehi\StructType\DropOffLocation
     */
    public function setCounterLocation( $counterLocation = null)
    {
        $this->CounterLocation = $counterLocation;
        return $this;
    }
    /**
     * Get Name value
     * @return |null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param  $name
     * @return \Ammonkc\Otaehi\StructType\DropOffLocation
     */
    public function setName( $name = null)
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
     * @return \Ammonkc\Otaehi\StructType\DropOffLocation
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
