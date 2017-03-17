<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyDimensionType StructType
 * @subpackage Structs
 */
class OntologyDimensionType extends AbstractStructBase
{
    /**
     * The DimensionUnit
     * @var \Ammonkc\Otaehi\StructType\DimensionUnit
     */
    public $DimensionUnit;
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
     * Constructor method for OntologyDimensionType
     * @uses OntologyDimensionType::setDimensionUnit()
     * @uses OntologyDimensionType::setOntologyExtension()
     * @uses OntologyDimensionType::setMeasurementSystem()
     * @uses OntologyDimensionType::setOntologyRefID()
     * @param \Ammonkc\Otaehi\StructType\DimensionUnit $dimensionUnit
     * @param mixed $ontologyExtension
     * @param string $measurementSystem
     * @param string $ontologyRefID
     */
    public function __construct(\Ammonkc\Otaehi\StructType\DimensionUnit $dimensionUnit = null, $ontologyExtension = null, $measurementSystem = null, $ontologyRefID = null)
    {
        $this
            ->setDimensionUnit($dimensionUnit)
            ->setOntologyExtension($ontologyExtension)
            ->setMeasurementSystem($measurementSystem)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get DimensionUnit value
     * @return \Ammonkc\Otaehi\StructType\DimensionUnit|null
     */
    public function getDimensionUnit()
    {
        return $this->DimensionUnit;
    }
    /**
     * Set DimensionUnit value
     * @param \Ammonkc\Otaehi\StructType\DimensionUnit $dimensionUnit
     * @return \Ammonkc\Otaehi\StructType\OntologyDimensionType
     */
    public function setDimensionUnit(\Ammonkc\Otaehi\StructType\DimensionUnit $dimensionUnit = null)
    {
        $this->DimensionUnit = $dimensionUnit;
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
     * @return \Ammonkc\Otaehi\StructType\OntologyDimensionType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyDimensionType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyDimensionType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyDimensionType
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
