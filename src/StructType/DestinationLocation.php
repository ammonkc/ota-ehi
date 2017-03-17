<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationLocation StructType
 * @subpackage Structs
 */
class DestinationLocation extends AbstractStructBase
{
    /**
     * The MultiAirportCityInd
     * @var bool
     */
    public $MultiAirportCityInd;
    /**
     * The AlternateLocationInd
     * @var bool
     */
    public $AlternateLocationInd;
    /**
     * Constructor method for DestinationLocation
     * @uses DestinationLocation::setMultiAirportCityInd()
     * @uses DestinationLocation::setAlternateLocationInd()
     * @param bool $multiAirportCityInd
     * @param bool $alternateLocationInd
     */
    public function __construct($multiAirportCityInd = null, $alternateLocationInd = null)
    {
        $this
            ->setMultiAirportCityInd($multiAirportCityInd)
            ->setAlternateLocationInd($alternateLocationInd);
    }
    /**
     * Get MultiAirportCityInd value
     * @return bool|null
     */
    public function getMultiAirportCityInd()
    {
        return $this->MultiAirportCityInd;
    }
    /**
     * Set MultiAirportCityInd value
     * @param bool $multiAirportCityInd
     * @return \ammonkc\otaehi\StructType\DestinationLocation
     */
    public function setMultiAirportCityInd($multiAirportCityInd = null)
    {
        $this->MultiAirportCityInd = $multiAirportCityInd;
        return $this;
    }
    /**
     * Get AlternateLocationInd value
     * @return bool|null
     */
    public function getAlternateLocationInd()
    {
        return $this->AlternateLocationInd;
    }
    /**
     * Set AlternateLocationInd value
     * @param bool $alternateLocationInd
     * @return \ammonkc\otaehi\StructType\DestinationLocation
     */
    public function setAlternateLocationInd($alternateLocationInd = null)
    {
        $this->AlternateLocationInd = $alternateLocationInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\DestinationLocation
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
