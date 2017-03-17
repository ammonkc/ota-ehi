<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DimensionUnit StructType
 * @subpackage Structs
 */
class DimensionUnit extends AbstractStructBase
{
    /**
     * The Height
     * @var float
     */
    public $Height;
    /**
     * The Length
     * @var float
     */
    public $Length;
    /**
     * The Width
     * @var float
     */
    public $Width;
    /**
     * The OtherType
     * @var string
     */
    public $OtherType;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for DimensionUnit
     * @uses DimensionUnit::setHeight()
     * @uses DimensionUnit::setLength()
     * @uses DimensionUnit::setWidth()
     * @uses DimensionUnit::setOtherType()
     * @uses DimensionUnit::setOntologyRefID()
     * @param float $height
     * @param float $length
     * @param float $width
     * @param string $otherType
     * @param string $ontologyRefID
     */
    public function __construct($height = null, $length = null, $width = null, $otherType = null, $ontologyRefID = null)
    {
        $this
            ->setHeight($height)
            ->setLength($length)
            ->setWidth($width)
            ->setOtherType($otherType)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get Height value
     * @return float|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param float $height
     * @return \Ammonkc\Otaehi\StructType\DimensionUnit
     */
    public function setHeight($height = null)
    {
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Length value
     * @return float|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param float $length
     * @return \Ammonkc\Otaehi\StructType\DimensionUnit
     */
    public function setLength($length = null)
    {
        $this->Length = $length;
        return $this;
    }
    /**
     * Get Width value
     * @return float|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param float $width
     * @return \Ammonkc\Otaehi\StructType\DimensionUnit
     */
    public function setWidth($width = null)
    {
        $this->Width = $width;
        return $this;
    }
    /**
     * Get OtherType value
     * @return string|null
     */
    public function getOtherType()
    {
        return $this->OtherType;
    }
    /**
     * Set OtherType value
     * @param string $otherType
     * @return \Ammonkc\Otaehi\StructType\DimensionUnit
     */
    public function setOtherType($otherType = null)
    {
        // validation for constraint: string
        if (!is_null($otherType) && !is_string($otherType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherType)), __LINE__);
        }
        $this->OtherType = $otherType;
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
     * @return \Ammonkc\Otaehi\StructType\DimensionUnit
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
     * @return \Ammonkc\Otaehi\StructType\DimensionUnit
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
