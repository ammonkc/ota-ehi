<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumDuration StructType
 * @subpackage Structs
 */
class MaximumDuration extends AbstractStructBase
{
    /**
     * The Value
     * @var float
     */
    public $Value;
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
     * Constructor method for MaximumDuration
     * @uses MaximumDuration::setValue()
     * @uses MaximumDuration::setOtherType()
     * @uses MaximumDuration::setOntologyRefID()
     * @param float $value
     * @param string $otherType
     * @param string $ontologyRefID
     */
    public function __construct($value = null, $otherType = null, $ontologyRefID = null)
    {
        $this
            ->setValue($value)
            ->setOtherType($otherType)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get Value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \Ammonkc\Otaehi\StructType\MaximumDuration
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
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
     * @return \Ammonkc\Otaehi\StructType\MaximumDuration
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
     * @return \Ammonkc\Otaehi\StructType\MaximumDuration
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
     * @return \Ammonkc\Otaehi\StructType\MaximumDuration
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
