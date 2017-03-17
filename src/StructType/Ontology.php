<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ontology StructType
 * @subpackage Structs
 */
class Ontology extends AbstractStructBase
{
    /**
     * The CompatibleWith
     * @var \ammonkc\otaehi\StructType\CompatibleWith
     */
    public $CompatibleWith;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * Constructor method for Ontology
     * @uses Ontology::setCompatibleWith()
     * @uses Ontology::setOntologyExtension()
     * @param \ammonkc\otaehi\StructType\CompatibleWith $compatibleWith
     * @param mixed $ontologyExtension
     */
    public function __construct(\ammonkc\otaehi\StructType\CompatibleWith $compatibleWith = null, $ontologyExtension = null)
    {
        $this
            ->setCompatibleWith($compatibleWith)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get CompatibleWith value
     * @return \ammonkc\otaehi\StructType\CompatibleWith|null
     */
    public function getCompatibleWith()
    {
        return $this->CompatibleWith;
    }
    /**
     * Set CompatibleWith value
     * @param \ammonkc\otaehi\StructType\CompatibleWith $compatibleWith
     * @return \ammonkc\otaehi\StructType\Ontology
     */
    public function setCompatibleWith(\ammonkc\otaehi\StructType\CompatibleWith $compatibleWith = null)
    {
        $this->CompatibleWith = $compatibleWith;
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
     * @return \ammonkc\otaehi\StructType\Ontology
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Ontology
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
