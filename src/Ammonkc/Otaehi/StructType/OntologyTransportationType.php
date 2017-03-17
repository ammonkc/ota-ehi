<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyTransportationType StructType
 * @subpackage Structs
 */
class OntologyTransportationType extends AbstractStructBase
{
    /**
     * The TripDirection
     * @var \Ammonkc\Otaehi\StructType\TripDirection
     */
    public $TripDirection;
    /**
     * The FlightAndRail
     * @var \Ammonkc\Otaehi\StructType\FlightAndRail
     */
    public $FlightAndRail;
    /**
     * The Vehicle
     * @var \Ammonkc\Otaehi\StructType\Vehicle
     */
    public $Vehicle;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * Constructor method for OntologyTransportationType
     * @uses OntologyTransportationType::setTripDirection()
     * @uses OntologyTransportationType::setFlightAndRail()
     * @uses OntologyTransportationType::setVehicle()
     * @uses OntologyTransportationType::setOntologyExtension()
     * @param \Ammonkc\Otaehi\StructType\TripDirection $tripDirection
     * @param \Ammonkc\Otaehi\StructType\FlightAndRail $flightAndRail
     * @param \Ammonkc\Otaehi\StructType\Vehicle $vehicle
     * @param mixed $ontologyExtension
     */
    public function __construct(\Ammonkc\Otaehi\StructType\TripDirection $tripDirection = null, \Ammonkc\Otaehi\StructType\FlightAndRail $flightAndRail = null, \Ammonkc\Otaehi\StructType\Vehicle $vehicle = null, $ontologyExtension = null)
    {
        $this
            ->setTripDirection($tripDirection)
            ->setFlightAndRail($flightAndRail)
            ->setVehicle($vehicle)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get TripDirection value
     * @return \Ammonkc\Otaehi\StructType\TripDirection|null
     */
    public function getTripDirection()
    {
        return $this->TripDirection;
    }
    /**
     * Set TripDirection value
     * @param \Ammonkc\Otaehi\StructType\TripDirection $tripDirection
     * @return \Ammonkc\Otaehi\StructType\OntologyTransportationType
     */
    public function setTripDirection(\Ammonkc\Otaehi\StructType\TripDirection $tripDirection = null)
    {
        $this->TripDirection = $tripDirection;
        return $this;
    }
    /**
     * Get FlightAndRail value
     * @return \Ammonkc\Otaehi\StructType\FlightAndRail|null
     */
    public function getFlightAndRail()
    {
        return $this->FlightAndRail;
    }
    /**
     * Set FlightAndRail value
     * @param \Ammonkc\Otaehi\StructType\FlightAndRail $flightAndRail
     * @return \Ammonkc\Otaehi\StructType\OntologyTransportationType
     */
    public function setFlightAndRail(\Ammonkc\Otaehi\StructType\FlightAndRail $flightAndRail = null)
    {
        $this->FlightAndRail = $flightAndRail;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Ammonkc\Otaehi\StructType\Vehicle|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Ammonkc\Otaehi\StructType\Vehicle $vehicle
     * @return \Ammonkc\Otaehi\StructType\OntologyTransportationType
     */
    public function setVehicle(\Ammonkc\Otaehi\StructType\Vehicle $vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get OntologyExtension value
     * @return mixed|null
     */
    public function getOntologyExtension()
    {
        return $this->OntologyExtension;
    }
    /**
     * Set OntologyExtension value
     * @param mixed $ontologyExtension
     * @return \Ammonkc\Otaehi\StructType\OntologyTransportationType
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\OntologyTransportationType
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
