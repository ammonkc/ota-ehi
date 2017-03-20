<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorLocation StructType
 * @subpackage Structs
 */
class VendorLocation extends AbstractStructBase
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
     * The CounterLocInfo
     * @var string
     */
    public $CounterLocInfo;
    /**
     * Constructor method for VendorLocation
     * @uses VendorLocation::setExtendedLocationCode()
     * @uses VendorLocation::setCounterLocation()
     * @uses VendorLocation::setName()
     * @uses VendorLocation::setCounterLocInfo()
     * @param  $extendedLocationCode
     * @param  $counterLocation
     * @param  $name
     * @param string $counterLocInfo
     */
    public function __construct( $extendedLocationCode = null,  $counterLocation = null,  $name = null, $counterLocInfo = null)
    {
        $this
            ->setExtendedLocationCode($extendedLocationCode)
            ->setCounterLocation($counterLocation)
            ->setName($name)
            ->setCounterLocInfo($counterLocInfo);
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
     * @return \Ammonkc\Otaehi\StructType\VendorLocation
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
     * @return \Ammonkc\Otaehi\StructType\VendorLocation
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
     * @return \Ammonkc\Otaehi\StructType\VendorLocation
     */
    public function setName( $name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get CounterLocInfo value
     * @return string|null
     */
    public function getCounterLocInfo()
    {
        return $this->CounterLocInfo;
    }
    /**
     * Set CounterLocInfo value
     * @param string $counterLocInfo
     * @return \Ammonkc\Otaehi\StructType\VendorLocation
     */
    public function setCounterLocInfo($counterLocInfo = null)
    {
        // validation for constraint: string
        if (!is_null($counterLocInfo) && !is_string($counterLocInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($counterLocInfo)), __LINE__);
        }
        $this->CounterLocInfo = $counterLocInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VendorLocation
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
