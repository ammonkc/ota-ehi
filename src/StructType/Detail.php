<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Detail StructType
 * @subpackage Structs
 */
class Detail extends AbstractStructBase
{
    /**
     * The Type
     * @var \ammonkc\otaehi\StructType\Type
     */
    public $Type;
    /**
     * The Weight
     * @var \ammonkc\otaehi\StructType\Weight
     */
    public $Weight;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The Item
     * @var \ammonkc\otaehi\StructType\Item
     */
    public $Item;
    /**
     * The Size
     * @var mixed
     */
    public $Size;
    /**
     * Constructor method for Detail
     * @uses Detail::setType()
     * @uses Detail::setWeight()
     * @uses Detail::setOntologyExtension()
     * @uses Detail::setItem()
     * @uses Detail::setSize()
     * @param \ammonkc\otaehi\StructType\Type $type
     * @param \ammonkc\otaehi\StructType\Weight $weight
     * @param mixed $ontologyExtension
     * @param \ammonkc\otaehi\StructType\Item $item
     * @param mixed $size
     */
    public function __construct(\ammonkc\otaehi\StructType\Type $type = null, \ammonkc\otaehi\StructType\Weight $weight = null, $ontologyExtension = null, \ammonkc\otaehi\StructType\Item $item = null, $size = null)
    {
        $this
            ->setType($type)
            ->setWeight($weight)
            ->setOntologyExtension($ontologyExtension)
            ->setItem($item)
            ->setSize($size);
    }
    /**
     * Get Type value
     * @return \ammonkc\otaehi\StructType\Type|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param \ammonkc\otaehi\StructType\Type $type
     * @return \ammonkc\otaehi\StructType\Detail
     */
    public function setType(\ammonkc\otaehi\StructType\Type $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Weight value
     * @return \ammonkc\otaehi\StructType\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \ammonkc\otaehi\StructType\Weight $weight
     * @return \ammonkc\otaehi\StructType\Detail
     */
    public function setWeight(\ammonkc\otaehi\StructType\Weight $weight = null)
    {
        $this->Weight = $weight;
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
     * @return \ammonkc\otaehi\StructType\Detail
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Get Item value
     * @return \ammonkc\otaehi\StructType\Item|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \ammonkc\otaehi\StructType\Item $item
     * @return \ammonkc\otaehi\StructType\Detail
     */
    public function setItem(\ammonkc\otaehi\StructType\Item $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get Size value
     * @return mixed|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param mixed $size
     * @return \ammonkc\otaehi\StructType\Detail
     */
    public function setSize($size = null)
    {
        $this->Size = $size;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Detail
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
