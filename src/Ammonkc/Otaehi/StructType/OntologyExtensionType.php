<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyExtensionType StructType
 * @subpackage Structs
 */
class OntologyExtensionType extends AbstractStructBase
{
    /**
     * The _
     * @var mixed
     */
    public $_;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for OntologyExtensionType
     * @uses OntologyExtensionType::set_()
     * @uses OntologyExtensionType::setOntologyRefID()
     * @param mixed $_
     * @param string $ontologyRefID
     */
    public function __construct($_ = null, $ontologyRefID = null)
    {
        $this
            ->set_($_)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get _ value
     * @return mixed|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param mixed $_
     * @return \Ammonkc\Otaehi\StructType\OntologyExtensionType
     */
    public function set_($_ = null)
    {
        $this->_ = $_;
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
     * @return \Ammonkc\Otaehi\StructType\OntologyExtensionType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyExtensionType
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
