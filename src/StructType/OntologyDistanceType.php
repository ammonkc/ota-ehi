<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyDistanceType StructType
 * @subpackage Structs
 */
class OntologyDistanceType extends AbstractStructBase
{
    /**
     * The Distance
     * @var \Ammonkc\Otaehi\StructType\Distance
     */
    public $Distance;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The MeasurementSystem
     * @var string
     */
    public $MeasurementSystem;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for OntologyDistanceType
     * @uses OntologyDistanceType::setDistance()
     * @uses OntologyDistanceType::setOntologyExtension()
     * @uses OntologyDistanceType::setMeasurementSystem()
     * @uses OntologyDistanceType::setOntologyRefID()
     * @param \Ammonkc\Otaehi\StructType\Distance $distance
     * @param mixed $ontologyExtension
     * @param string $measurementSystem
     * @param string $ontologyRefID
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Distance $distance = null, $ontologyExtension = null, $measurementSystem = null, $ontologyRefID = null)
    {
        $this
            ->setDistance($distance)
            ->setOntologyExtension($ontologyExtension)
            ->setMeasurementSystem($measurementSystem)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get Distance value
     * @return \Ammonkc\Otaehi\StructType\Distance|null
     */
    public function getDistance()
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \Ammonkc\Otaehi\StructType\Distance $distance
     * @return \Ammonkc\Otaehi\StructType\OntologyDistanceType
     */
    public function setDistance(\Ammonkc\Otaehi\StructType\Distance $distance = null)
    {
        $this->Distance = $distance;
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
     * @return \Ammonkc\Otaehi\StructType\OntologyDistanceType
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Get MeasurementSystem value
     * @return string|null
     */
    public function getMeasurementSystem()
    {
        return $this->MeasurementSystem;
    }
    /**
     * Set MeasurementSystem value
     * @param string $measurementSystem
     * @return \Ammonkc\Otaehi\StructType\OntologyDistanceType
     */
    public function setMeasurementSystem($measurementSystem = null)
    {
        // validation for constraint: string
        if (!is_null($measurementSystem) && !is_string($measurementSystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($measurementSystem)), __LINE__);
        }
        $this->MeasurementSystem = $measurementSystem;
        return $this;
    }
    /**
     * Get OntologyRefID value
     * @return string|null
     */
    public function getOntologyRefID()
    {
        return $this->OntologyRefID;
    }
    /**
     * Set OntologyRefID value
     * @param string $ontologyRefID
     * @return \Ammonkc\Otaehi\StructType\OntologyDistanceType
     */
    public function setOntologyRefID($ontologyRefID = null)
    {
        // validation for constraint: string
        if (!is_null($ontologyRefID) && !is_string($ontologyRefID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ontologyRefID)), __LINE__);
        }
        $this->OntologyRefID = $ontologyRefID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\OntologyDistanceType
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
