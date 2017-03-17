<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Offer StructType
 * @subpackage Structs
 */
class Offer extends AbstractStructBase
{
    /**
     * The Communication
     * @var \ammonkc\otaehi\StructType\Communication
     */
    public $Communication;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * The ExcludeInd
     * @var bool
     */
    public $ExcludeInd;
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
     * Constructor method for Offer
     * @uses Offer::setCommunication()
     * @uses Offer::setType()
     * @uses Offer::setExcludeInd()
     * @uses Offer::setOtherType()
     * @uses Offer::setOntologyRefID()
     * @param \ammonkc\otaehi\StructType\Communication $communication
     * @param string $type
     * @param bool $excludeInd
     * @param string $otherType
     * @param string $ontologyRefID
     */
    public function __construct(\ammonkc\otaehi\StructType\Communication $communication = null, $type = null, $excludeInd = null, $otherType = null, $ontologyRefID = null)
    {
        $this
            ->setCommunication($communication)
            ->setType($type)
            ->setExcludeInd($excludeInd)
            ->setOtherType($otherType)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get Communication value
     * @return \ammonkc\otaehi\StructType\Communication|null
     */
    public function getCommunication()
    {
        return $this->Communication;
    }
    /**
     * Set Communication value
     * @param \ammonkc\otaehi\StructType\Communication $communication
     * @return \ammonkc\otaehi\StructType\Offer
     */
    public function setCommunication(\ammonkc\otaehi\StructType\Communication $communication = null)
    {
        $this->Communication = $communication;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \ammonkc\otaehi\StructType\Offer
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ExcludeInd value
     * @return bool|null
     */
    public function getExcludeInd()
    {
        return $this->ExcludeInd;
    }
    /**
     * Set ExcludeInd value
     * @param bool $excludeInd
     * @return \ammonkc\otaehi\StructType\Offer
     */
    public function setExcludeInd($excludeInd = null)
    {
        $this->ExcludeInd = $excludeInd;
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
     * @return \ammonkc\otaehi\StructType\Offer
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
     * @return \ammonkc\otaehi\StructType\Offer
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
     * @return \ammonkc\otaehi\StructType\Offer
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
