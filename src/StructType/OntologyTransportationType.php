<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyTransportationType StructType
 * @subpackage Structs
 */
class OntologyTransportationType extends AbstractStructBase
{
    /**
     * The TripDirection
     * @var \ammonkc\otaehi\StructType\TripDirection
     */
    public $TripDirection;
    /**
     * The FlightAndRail
     * @var \ammonkc\otaehi\StructType\FlightAndRail
     */
    public $FlightAndRail;
    /**
     * The Vehicle
     * @var \ammonkc\otaehi\StructType\Vehicle
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
     * @param \ammonkc\otaehi\StructType\TripDirection $tripDirection
     * @param \ammonkc\otaehi\StructType\FlightAndRail $flightAndRail
     * @param \ammonkc\otaehi\StructType\Vehicle $vehicle
     * @param mixed $ontologyExtension
     */
    public function __construct(\ammonkc\otaehi\StructType\TripDirection $tripDirection = null, \ammonkc\otaehi\StructType\FlightAndRail $flightAndRail = null, \ammonkc\otaehi\StructType\Vehicle $vehicle = null, $ontologyExtension = null)
    {
        $this
            ->setTripDirection($tripDirection)
            ->setFlightAndRail($flightAndRail)
            ->setVehicle($vehicle)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get TripDirection value
     * @return \ammonkc\otaehi\StructType\TripDirection|null
     */
    public function getTripDirection()
    {
        return $this->TripDirection;
    }
    /**
     * Set TripDirection value
     * @param \ammonkc\otaehi\StructType\TripDirection $tripDirection
     * @return \ammonkc\otaehi\StructType\OntologyTransportationType
     */
    public function setTripDirection(\ammonkc\otaehi\StructType\TripDirection $tripDirection = null)
    {
        $this->TripDirection = $tripDirection;
        return $this;
    }
    /**
     * Get FlightAndRail value
     * @return \ammonkc\otaehi\StructType\FlightAndRail|null
     */
    public function getFlightAndRail()
    {
        return $this->FlightAndRail;
    }
    /**
     * Set FlightAndRail value
     * @param \ammonkc\otaehi\StructType\FlightAndRail $flightAndRail
     * @return \ammonkc\otaehi\StructType\OntologyTransportationType
     */
    public function setFlightAndRail(\ammonkc\otaehi\StructType\FlightAndRail $flightAndRail = null)
    {
        $this->FlightAndRail = $flightAndRail;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \ammonkc\otaehi\StructType\Vehicle|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \ammonkc\otaehi\StructType\Vehicle $vehicle
     * @return \ammonkc\otaehi\StructType\OntologyTransportationType
     */
    public function setVehicle(\ammonkc\otaehi\StructType\Vehicle $vehicle = null)
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
     * @return \ammonkc\otaehi\StructType\OntologyTransportationType
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
     * @return \ammonkc\otaehi\StructType\OntologyTransportationType
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
