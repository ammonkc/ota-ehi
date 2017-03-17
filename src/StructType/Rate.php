<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rate StructType
 * @subpackage Structs
 */
class Rate extends AbstractStructBase
{
    /**
     * The Category
     * @var \ammonkc\otaehi\StructType\Category
     */
    public $Category;
    /**
     * The Code
     * @var \ammonkc\otaehi\StructType\Code
     */
    public $Code;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * Constructor method for Rate
     * @uses Rate::setCategory()
     * @uses Rate::setCode()
     * @uses Rate::setOntologyExtension()
     * @param \ammonkc\otaehi\StructType\Category $category
     * @param \ammonkc\otaehi\StructType\Code $code
     * @param mixed $ontologyExtension
     */
    public function __construct(\ammonkc\otaehi\StructType\Category $category = null, \ammonkc\otaehi\StructType\Code $code = null, $ontologyExtension = null)
    {
        $this
            ->setCategory($category)
            ->setCode($code)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get Category value
     * @return \ammonkc\otaehi\StructType\Category|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param \ammonkc\otaehi\StructType\Category $category
     * @return \ammonkc\otaehi\StructType\Rate
     */
    public function setCategory(\ammonkc\otaehi\StructType\Category $category = null)
    {
        $this->Category = $category;
        return $this;
    }
    /**
     * Get Code value
     * @return \ammonkc\otaehi\StructType\Code|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param \ammonkc\otaehi\StructType\Code $code
     * @return \ammonkc\otaehi\StructType\Rate
     */
    public function setCode(\ammonkc\otaehi\StructType\Code $code = null)
    {
        $this->Code = $code;
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
     * @return \ammonkc\otaehi\StructType\Rate
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
     * @return \ammonkc\otaehi\StructType\Rate
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
