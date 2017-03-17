<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageSizeType StructType
 * @subpackage Structs
 */
class BaggageSizeType extends AbstractStructBase
{
    /**
     * The ApproxInd
     * @var bool
     */
    public $ApproxInd;
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
     * The LinearDimensions
     * @var string
     */
    public $LinearDimensions;
    /**
     * Constructor method for BaggageSizeType
     * @uses BaggageSizeType::setApproxInd()
     * @uses BaggageSizeType::setHeight()
     * @uses BaggageSizeType::setLength()
     * @uses BaggageSizeType::setWidth()
     * @uses BaggageSizeType::setLinearDimensions()
     * @param bool $approxInd
     * @param float $height
     * @param float $length
     * @param float $width
     * @param string $linearDimensions
     */
    public function __construct($approxInd = null, $height = null, $length = null, $width = null, $linearDimensions = null)
    {
        $this
            ->setApproxInd($approxInd)
            ->setHeight($height)
            ->setLength($length)
            ->setWidth($width)
            ->setLinearDimensions($linearDimensions);
    }
    /**
     * Get ApproxInd value
     * @return bool|null
     */
    public function getApproxInd()
    {
        return $this->ApproxInd;
    }
    /**
     * Set ApproxInd value
     * @param bool $approxInd
     * @return \Ammonkc\Otaehi\StructType\BaggageSizeType
     */
    public function setApproxInd($approxInd = null)
    {
        $this->ApproxInd = $approxInd;
        return $this;
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
     * @return \Ammonkc\Otaehi\StructType\BaggageSizeType
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
     * @return \Ammonkc\Otaehi\StructType\BaggageSizeType
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
     * @return \Ammonkc\Otaehi\StructType\BaggageSizeType
     */
    public function setWidth($width = null)
    {
        $this->Width = $width;
        return $this;
    }
    /**
     * Get LinearDimensions value
     * @return string|null
     */
    public function getLinearDimensions()
    {
        return $this->LinearDimensions;
    }
    /**
     * Set LinearDimensions value
     * @param string $linearDimensions
     * @return \Ammonkc\Otaehi\StructType\BaggageSizeType
     */
    public function setLinearDimensions($linearDimensions = null)
    {
        // validation for constraint: string
        if (!is_null($linearDimensions) && !is_string($linearDimensions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linearDimensions)), __LINE__);
        }
        $this->LinearDimensions = $linearDimensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\BaggageSizeType
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
