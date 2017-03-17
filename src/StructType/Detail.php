<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Detail StructType
 * @subpackage Structs
 */
class Detail extends AbstractStructBase
{
    /**
     * The Type
     * @var \Ammonkc\Otaehi\StructType\Type
     */
    public $Type;
    /**
     * The Weight
     * @var \Ammonkc\Otaehi\StructType\Weight
     */
    public $Weight;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The Item
     * @var \Ammonkc\Otaehi\StructType\Item
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
     * @param \Ammonkc\Otaehi\StructType\Type $type
     * @param \Ammonkc\Otaehi\StructType\Weight $weight
     * @param mixed $ontologyExtension
     * @param \Ammonkc\Otaehi\StructType\Item $item
     * @param mixed $size
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Type $type = null, \Ammonkc\Otaehi\StructType\Weight $weight = null, $ontologyExtension = null, \Ammonkc\Otaehi\StructType\Item $item = null, $size = null)
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
     * @return \Ammonkc\Otaehi\StructType\Type|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param \Ammonkc\Otaehi\StructType\Type $type
     * @return \Ammonkc\Otaehi\StructType\Detail
     */
    public function setType(\Ammonkc\Otaehi\StructType\Type $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Weight value
     * @return \Ammonkc\Otaehi\StructType\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Ammonkc\Otaehi\StructType\Weight $weight
     * @return \Ammonkc\Otaehi\StructType\Detail
     */
    public function setWeight(\Ammonkc\Otaehi\StructType\Weight $weight = null)
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
     * @return \Ammonkc\Otaehi\StructType\Detail
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Get Item value
     * @return \Ammonkc\Otaehi\StructType\Item|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \Ammonkc\Otaehi\StructType\Item $item
     * @return \Ammonkc\Otaehi\StructType\Detail
     */
    public function setItem(\Ammonkc\Otaehi\StructType\Item $item = null)
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
     * @return \Ammonkc\Otaehi\StructType\Detail
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
     * @return \Ammonkc\Otaehi\StructType\Detail
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
