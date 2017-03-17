<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rate StructType
 * @subpackage Structs
 */
class Rate extends AbstractStructBase
{
    /**
     * The Category
     * @var \Ammonkc\Otaehi\StructType\Category
     */
    public $Category;
    /**
     * The Code
     * @var \Ammonkc\Otaehi\StructType\Code
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
     * @param \Ammonkc\Otaehi\StructType\Category $category
     * @param \Ammonkc\Otaehi\StructType\Code $code
     * @param mixed $ontologyExtension
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Category $category = null, \Ammonkc\Otaehi\StructType\Code $code = null, $ontologyExtension = null)
    {
        $this
            ->setCategory($category)
            ->setCode($code)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get Category value
     * @return \Ammonkc\Otaehi\StructType\Category|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param \Ammonkc\Otaehi\StructType\Category $category
     * @return \Ammonkc\Otaehi\StructType\Rate
     */
    public function setCategory(\Ammonkc\Otaehi\StructType\Category $category = null)
    {
        $this->Category = $category;
        return $this;
    }
    /**
     * Get Code value
     * @return \Ammonkc\Otaehi\StructType\Code|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param \Ammonkc\Otaehi\StructType\Code $code
     * @return \Ammonkc\Otaehi\StructType\Rate
     */
    public function setCode(\Ammonkc\Otaehi\StructType\Code $code = null)
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
     * @return \Ammonkc\Otaehi\StructType\Rate
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
     * @return \Ammonkc\Otaehi\StructType\Rate
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
