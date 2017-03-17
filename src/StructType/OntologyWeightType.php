<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyWeightType StructType
 * @subpackage Structs
 */
class OntologyWeightType extends AbstractStructBase
{
    /**
     * The WeightUnit
     * @var \ammonkc\otaehi\StructType\WeightUnit
     */
    public $WeightUnit;
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
     * Constructor method for OntologyWeightType
     * @uses OntologyWeightType::setWeightUnit()
     * @uses OntologyWeightType::setMeasurementSystem()
     * @uses OntologyWeightType::setOntologyRefID()
     * @param \ammonkc\otaehi\StructType\WeightUnit $weightUnit
     * @param string $measurementSystem
     * @param string $ontologyRefID
     */
    public function __construct(\ammonkc\otaehi\StructType\WeightUnit $weightUnit = null, $measurementSystem = null, $ontologyRefID = null)
    {
        $this
            ->setWeightUnit($weightUnit)
            ->setMeasurementSystem($measurementSystem)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get WeightUnit value
     * @return \ammonkc\otaehi\StructType\WeightUnit|null
     */
    public function getWeightUnit()
    {
        return $this->WeightUnit;
    }
    /**
     * Set WeightUnit value
     * @param \ammonkc\otaehi\StructType\WeightUnit $weightUnit
     * @return \ammonkc\otaehi\StructType\OntologyWeightType
     */
    public function setWeightUnit(\ammonkc\otaehi\StructType\WeightUnit $weightUnit = null)
    {
        $this->WeightUnit = $weightUnit;
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
     * @return \ammonkc\otaehi\StructType\OntologyWeightType
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
     * @return \ammonkc\otaehi\StructType\OntologyWeightType
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
     * @return \ammonkc\otaehi\StructType\OntologyWeightType
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
