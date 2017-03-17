<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyLodgingType StructType
 * @subpackage Structs
 */
class OntologyLodgingType extends AbstractStructBase
{
    /**
     * The Code
     * @var mixed
     */
    public $Code;
    /**
     * The PropertyClass
     * @var \Ammonkc\Otaehi\StructType\PropertyClass
     */
    public $PropertyClass;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * Constructor method for OntologyLodgingType
     * @uses OntologyLodgingType::setCode()
     * @uses OntologyLodgingType::setPropertyClass()
     * @uses OntologyLodgingType::setOntologyExtension()
     * @param mixed $code
     * @param \Ammonkc\Otaehi\StructType\PropertyClass $propertyClass
     * @param mixed $ontologyExtension
     */
    public function __construct($code = null, \Ammonkc\Otaehi\StructType\PropertyClass $propertyClass = null, $ontologyExtension = null)
    {
        $this
            ->setCode($code)
            ->setPropertyClass($propertyClass)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get Code value
     * @return mixed|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param mixed $code
     * @return \Ammonkc\Otaehi\StructType\OntologyLodgingType
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Get PropertyClass value
     * @return \Ammonkc\Otaehi\StructType\PropertyClass|null
     */
    public function getPropertyClass()
    {
        return $this->PropertyClass;
    }
    /**
     * Set PropertyClass value
     * @param \Ammonkc\Otaehi\StructType\PropertyClass $propertyClass
     * @return \Ammonkc\Otaehi\StructType\OntologyLodgingType
     */
    public function setPropertyClass(\Ammonkc\Otaehi\StructType\PropertyClass $propertyClass = null)
    {
        $this->PropertyClass = $propertyClass;
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
     * @return \Ammonkc\Otaehi\StructType\OntologyLodgingType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyLodgingType
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
