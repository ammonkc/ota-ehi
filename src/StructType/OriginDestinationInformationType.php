<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginDestinationInformationType StructType
 * @subpackage Structs
 */
class OriginDestinationInformationType extends AbstractStructBase
{
    /**
     * The OriginLocation
     * @var \Ammonkc\Otaehi\StructType\OriginLocation
     */
    public $OriginLocation;
    /**
     * The DestinationLocation
     * @var \Ammonkc\Otaehi\StructType\DestinationLocation
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
     * @param \Ammonkc\Otaehi\StructType\OriginLocation $originLocation
     * @param \Ammonkc\Otaehi\StructType\DestinationLocation $destinationLocation
     * @param mixed $connectionLocations
     */
    public function __construct(\Ammonkc\Otaehi\StructType\OriginLocation $originLocation = null, \Ammonkc\Otaehi\StructType\DestinationLocation $destinationLocation = null, $connectionLocations = null)
    {
        $this
            ->setOriginLocation($originLocation)
            ->setDestinationLocation($destinationLocation)
            ->setConnectionLocations($connectionLocations);
    }
    /**
     * Get OriginLocation value
     * @return \Ammonkc\Otaehi\StructType\OriginLocation|null
     */
    public function getOriginLocation()
    {
        return $this->OriginLocation;
    }
    /**
     * Set OriginLocation value
     * @param \Ammonkc\Otaehi\StructType\OriginLocation $originLocation
     * @return \Ammonkc\Otaehi\StructType\OriginDestinationInformationType
     */
    public function setOriginLocation(\Ammonkc\Otaehi\StructType\OriginLocation $originLocation = null)
    {
        $this->OriginLocation = $originLocation;
        return $this;
    }
    /**
     * Get DestinationLocation value
     * @return \Ammonkc\Otaehi\StructType\DestinationLocation|null
     */
    public function getDestinationLocation()
    {
        return $this->DestinationLocation;
    }
    /**
     * Set DestinationLocation value
     * @param \Ammonkc\Otaehi\StructType\DestinationLocation $destinationLocation
     * @return \Ammonkc\Otaehi\StructType\OriginDestinationInformationType
     */
    public function setDestinationLocation(\Ammonkc\Otaehi\StructType\DestinationLocation $destinationLocation = null)
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
     * @return \Ammonkc\Otaehi\StructType\OriginDestinationInformationType
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
     * @return \Ammonkc\Otaehi\StructType\OriginDestinationInformationType
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
