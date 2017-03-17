<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculationMethod StructType
 * @subpackage Structs
 */
class CalculationMethod extends AbstractStructBase
{
    /**
     * The Formula
     * @var \ammonkc\otaehi\StructType\Formula
     */
    public $Formula;
    /**
     * The Distance
     * @var \ammonkc\otaehi\StructType\Distance
     */
    public $Distance;
    /**
     * The Duration
     * @var \ammonkc\otaehi\StructType\Duration
     */
    public $Duration;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The OtherType
     * @var string
     */
    public $OtherType;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for CalculationMethod
     * @uses CalculationMethod::setFormula()
     * @uses CalculationMethod::setDistance()
     * @uses CalculationMethod::setDuration()
     * @uses CalculationMethod::setOntologyExtension()
     * @uses CalculationMethod::setOtherType()
     * @uses CalculationMethod::setOntologyRefID()
     * @param \ammonkc\otaehi\StructType\Formula $formula
     * @param \ammonkc\otaehi\StructType\Distance $distance
     * @param \ammonkc\otaehi\StructType\Duration $duration
     * @param mixed $ontologyExtension
     * @param string $otherType
     * @param string $ontologyRefID
     */
    public function __construct(\ammonkc\otaehi\StructType\Formula $formula = null, \ammonkc\otaehi\StructType\Distance $distance = null, \ammonkc\otaehi\StructType\Duration $duration = null, $ontologyExtension = null, $otherType = null, $ontologyRefID = null)
    {
        $this
            ->setFormula($formula)
            ->setDistance($distance)
            ->setDuration($duration)
            ->setOntologyExtension($ontologyExtension)
            ->setOtherType($otherType)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get Formula value
     * @return \ammonkc\otaehi\StructType\Formula|null
     */
    public function getFormula()
    {
        return $this->Formula;
    }
    /**
     * Set Formula value
     * @param \ammonkc\otaehi\StructType\Formula $formula
     * @return \ammonkc\otaehi\StructType\CalculationMethod
     */
    public function setFormula(\ammonkc\otaehi\StructType\Formula $formula = null)
    {
        $this->Formula = $formula;
        return $this;
    }
    /**
     * Get Distance value
     * @return \ammonkc\otaehi\StructType\Distance|null
     */
    public function getDistance()
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \ammonkc\otaehi\StructType\Distance $distance
     * @return \ammonkc\otaehi\StructType\CalculationMethod
     */
    public function setDistance(\ammonkc\otaehi\StructType\Distance $distance = null)
    {
        $this->Distance = $distance;
        return $this;
    }
    /**
     * Get Duration value
     * @return \ammonkc\otaehi\StructType\Duration|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param \ammonkc\otaehi\StructType\Duration $duration
     * @return \ammonkc\otaehi\StructType\CalculationMethod
     */
    public function setDuration(\ammonkc\otaehi\StructType\Duration $duration = null)
    {
        $this->Duration = $duration;
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
     * @return \ammonkc\otaehi\StructType\CalculationMethod
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Get OtherType value
     * @return string|null
     */
    public function getOtherType()
    {
        return $this->OtherType;
    }
    /**
     * Set OtherType value
     * @param string $otherType
     * @return \ammonkc\otaehi\StructType\CalculationMethod
     */
    public function setOtherType($otherType = null)
    {
        // validation for constraint: string
        if (!is_null($otherType) && !is_string($otherType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherType)), __LINE__);
        }
        $this->OtherType = $otherType;
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
     * @return \ammonkc\otaehi\StructType\CalculationMethod
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
     * @return \ammonkc\otaehi\StructType\CalculationMethod
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
