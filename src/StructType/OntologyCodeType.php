<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyCodeType StructType
 * @subpackage Structs
 */
class OntologyCodeType extends AbstractStructBase
{
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * The Context
     * @var string
     */
    public $Context;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for OntologyCodeType
     * @uses OntologyCodeType::setCode()
     * @uses OntologyCodeType::setContext()
     * @uses OntologyCodeType::setDescription()
     * @uses OntologyCodeType::setOntologyRefID()
     * @param string $code
     * @param string $context
     * @param string $description
     * @param string $ontologyRefID
     */
    public function __construct($code = null, $context = null, $description = null, $ontologyRefID = null)
    {
        $this
            ->setCode($code)
            ->setContext($context)
            ->setDescription($description)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Ammonkc\Otaehi\StructType\OntologyCodeType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Context value
     * @return string|null
     */
    public function getContext()
    {
        return $this->Context;
    }
    /**
     * Set Context value
     * @param string $context
     * @return \Ammonkc\Otaehi\StructType\OntologyCodeType
     */
    public function setContext($context = null)
    {
        // validation for constraint: string
        if (!is_null($context) && !is_string($context)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($context)), __LINE__);
        }
        $this->Context = $context;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Ammonkc\Otaehi\StructType\OntologyCodeType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
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
     * @return \Ammonkc\Otaehi\StructType\OntologyCodeType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyCodeType
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
