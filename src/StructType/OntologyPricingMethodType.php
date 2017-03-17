<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyPricingMethodType StructType
 * @subpackage Structs
 */
class OntologyPricingMethodType extends AbstractStructBase
{
    /**
     * The InclusiveInd
     * @var bool
     */
    public $InclusiveInd;
    /**
     * The ApproximateInd
     * @var bool
     */
    public $ApproximateInd;
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
     * Constructor method for OntologyPricingMethodType
     * @uses OntologyPricingMethodType::setInclusiveInd()
     * @uses OntologyPricingMethodType::setApproximateInd()
     * @uses OntologyPricingMethodType::setOtherType()
     * @uses OntologyPricingMethodType::setOntologyRefID()
     * @param bool $inclusiveInd
     * @param bool $approximateInd
     * @param string $otherType
     * @param string $ontologyRefID
     */
    public function __construct($inclusiveInd = null, $approximateInd = null, $otherType = null, $ontologyRefID = null)
    {
        $this
            ->setInclusiveInd($inclusiveInd)
            ->setApproximateInd($approximateInd)
            ->setOtherType($otherType)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get InclusiveInd value
     * @return bool|null
     */
    public function getInclusiveInd()
    {
        return $this->InclusiveInd;
    }
    /**
     * Set InclusiveInd value
     * @param bool $inclusiveInd
     * @return \ammonkc\otaehi\StructType\OntologyPricingMethodType
     */
    public function setInclusiveInd($inclusiveInd = null)
    {
        $this->InclusiveInd = $inclusiveInd;
        return $this;
    }
    /**
     * Get ApproximateInd value
     * @return bool|null
     */
    public function getApproximateInd()
    {
        return $this->ApproximateInd;
    }
    /**
     * Set ApproximateInd value
     * @param bool $approximateInd
     * @return \ammonkc\otaehi\StructType\OntologyPricingMethodType
     */
    public function setApproximateInd($approximateInd = null)
    {
        $this->ApproximateInd = $approximateInd;
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
     * @return \ammonkc\otaehi\StructType\OntologyPricingMethodType
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
     * @return \ammonkc\otaehi\StructType\OntologyPricingMethodType
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
     * @return \ammonkc\otaehi\StructType\OntologyPricingMethodType
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
