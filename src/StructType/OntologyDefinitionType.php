<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyDefinitionType StructType
 * @subpackage Structs
 */
class OntologyDefinitionType extends AbstractStructBase
{
    /**
     * The URI
     * @var string
     */
    public $URI;
    /**
     * The Version
     * @var string
     */
    public $Version;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The RefID
     * @var string
     */
    public $RefID;
    /**
     * Constructor method for OntologyDefinitionType
     * @uses OntologyDefinitionType::setURI()
     * @uses OntologyDefinitionType::setVersion()
     * @uses OntologyDefinitionType::setName()
     * @uses OntologyDefinitionType::setRefID()
     * @param string $uRI
     * @param string $version
     * @param string $name
     * @param string $refID
     */
    public function __construct($uRI = null, $version = null, $name = null, $refID = null)
    {
        $this
            ->setURI($uRI)
            ->setVersion($version)
            ->setName($name)
            ->setRefID($refID);
    }
    /**
     * Get URI value
     * @return string|null
     */
    public function getURI()
    {
        return $this->URI;
    }
    /**
     * Set URI value
     * @param string $uRI
     * @return \ammonkc\otaehi\StructType\OntologyDefinitionType
     */
    public function setURI($uRI = null)
    {
        // validation for constraint: string
        if (!is_null($uRI) && !is_string($uRI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRI)), __LINE__);
        }
        $this->URI = $uRI;
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \ammonkc\otaehi\StructType\OntologyDefinitionType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \ammonkc\otaehi\StructType\OntologyDefinitionType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get RefID value
     * @return string|null
     */
    public function getRefID()
    {
        return $this->RefID;
    }
    /**
     * Set RefID value
     * @param string $refID
     * @return \ammonkc\otaehi\StructType\OntologyDefinitionType
     */
    public function setRefID($refID = null)
    {
        // validation for constraint: string
        if (!is_null($refID) && !is_string($refID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refID)), __LINE__);
        }
        $this->RefID = $refID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OntologyDefinitionType
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
