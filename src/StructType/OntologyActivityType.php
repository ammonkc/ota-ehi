<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyActivityType StructType
 * @subpackage Structs
 */
class OntologyActivityType extends AbstractStructBase
{
    /**
     * The Type
     * @var \Ammonkc\Otaehi\StructType\Type
     */
    public $Type;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * Constructor method for OntologyActivityType
     * @uses OntologyActivityType::setType()
     * @uses OntologyActivityType::setOntologyExtension()
     * @param \Ammonkc\Otaehi\StructType\Type $type
     * @param mixed $ontologyExtension
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Type $type = null, $ontologyExtension = null)
    {
        $this
            ->setType($type)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get Type value
     * @return \Ammonkc\Otaehi\StructType\Type|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param \Ammonkc\Otaehi\StructType\Type $type
     * @return \Ammonkc\Otaehi\StructType\OntologyActivityType
     */
    public function setType(\Ammonkc\Otaehi\StructType\Type $type = null)
    {
        $this->Type = $type;
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
     * @return \Ammonkc\Otaehi\StructType\OntologyActivityType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyActivityType
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
