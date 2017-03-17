<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OneWayDropLocations StructType
 * @subpackage Structs
 */
class OneWayDropLocations extends AbstractStructBase
{
    /**
     * The OneWayDropLocation
     * @var \Ammonkc\Otaehi\StructType\OneWayDropLocation
     */
    public $OneWayDropLocation;
    /**
     * Constructor method for OneWayDropLocations
     * @uses OneWayDropLocations::setOneWayDropLocation()
     * @param \Ammonkc\Otaehi\StructType\OneWayDropLocation $oneWayDropLocation
     */
    public function __construct(\Ammonkc\Otaehi\StructType\OneWayDropLocation $oneWayDropLocation = null)
    {
        $this
            ->setOneWayDropLocation($oneWayDropLocation);
    }
    /**
     * Get OneWayDropLocation value
     * @return \Ammonkc\Otaehi\StructType\OneWayDropLocation|null
     */
    public function getOneWayDropLocation()
    {
        return $this->OneWayDropLocation;
    }
    /**
     * Set OneWayDropLocation value
     * @param \Ammonkc\Otaehi\StructType\OneWayDropLocation $oneWayDropLocation
     * @return \Ammonkc\Otaehi\StructType\OneWayDropLocations
     */
    public function setOneWayDropLocation(\Ammonkc\Otaehi\StructType\OneWayDropLocation $oneWayDropLocation = null)
    {
        $this->OneWayDropLocation = $oneWayDropLocation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\OneWayDropLocations
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
