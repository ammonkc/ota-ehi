<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginDestinationInformationType StructType
 * @subpackage Structs
 */
class OriginDestinationInformationType extends AbstractStructBase
{
    /**
     * The OriginLocation
     * @var \ammonkc\otaehi\StructType\OriginLocation
     */
    public $OriginLocation;
    /**
     * The DestinationLocation
     * @var \ammonkc\otaehi\StructType\DestinationLocation
     */
    public $DestinationLocation;
    /**
     * The ConnectionLocations
     * @var mixed
     */
    public $ConnectionLocations;
    /**
     * Constructor method for OriginDestinationInformationType
     * @uses OriginDestinationInformationType::setOriginLocation()
     * @uses OriginDestinationInformationType::setDestinationLocation()
     * @uses OriginDestinationInformationType::setConnectionLocations()
     * @param \ammonkc\otaehi\StructType\OriginLocation $originLocation
     * @param \ammonkc\otaehi\StructType\DestinationLocation $destinationLocation
     * @param mixed $connectionLocations
     */
    public function __construct(\ammonkc\otaehi\StructType\OriginLocation $originLocation = null, \ammonkc\otaehi\StructType\DestinationLocation $destinationLocation = null, $connectionLocations = null)
    {
        $this
            ->setOriginLocation($originLocation)
            ->setDestinationLocation($destinationLocation)
            ->setConnectionLocations($connectionLocations);
    }
    /**
     * Get OriginLocation value
     * @return \ammonkc\otaehi\StructType\OriginLocation|null
     */
    public function getOriginLocation()
    {
        return $this->OriginLocation;
    }
    /**
     * Set OriginLocation value
     * @param \ammonkc\otaehi\StructType\OriginLocation $originLocation
     * @return \ammonkc\otaehi\StructType\OriginDestinationInformationType
     */
    public function setOriginLocation(\ammonkc\otaehi\StructType\OriginLocation $originLocation = null)
    {
        $this->OriginLocation = $originLocation;
        return $this;
    }
    /**
     * Get DestinationLocation value
     * @return \ammonkc\otaehi\StructType\DestinationLocation|null
     */
    public function getDestinationLocation()
    {
        return $this->DestinationLocation;
    }
    /**
     * Set DestinationLocation value
     * @param \ammonkc\otaehi\StructType\DestinationLocation $destinationLocation
     * @return \ammonkc\otaehi\StructType\OriginDestinationInformationType
     */
    public function setDestinationLocation(\ammonkc\otaehi\StructType\DestinationLocation $destinationLocation = null)
    {
        $this->DestinationLocation = $destinationLocation;
        return $this;
    }
    /**
     * Get ConnectionLocations value
     * @return mixed|null
     */
    public function getConnectionLocations()
    {
        return $this->ConnectionLocations;
    }
    /**
     * Set ConnectionLocations value
     * @param mixed $connectionLocations
     * @return \ammonkc\otaehi\StructType\OriginDestinationInformationType
     */
    public function setConnectionLocations($connectionLocations = null)
    {
        $this->ConnectionLocations = $connectionLocations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OriginDestinationInformationType
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
