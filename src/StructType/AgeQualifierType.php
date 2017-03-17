<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgeQualifierType StructType
 * @subpackage Structs
 */
class AgeQualifierType extends AbstractStructBase
{
    /**
     * The Extension
     * @var string
     */
    public $Extension;
    /**
     * Constructor method for AgeQualifierType
     * @uses AgeQualifierType::setExtension()
     * @param string $extension
     */
    public function __construct($extension = null)
    {
        $this
            ->setExtension($extension);
    }
    /**
     * Get Extension value
     * @return string|null
     */
    public function getExtension()
    {
        return $this->Extension;
    }
    /**
     * Set Extension value
     * @param string $extension
     * @return \ammonkc\otaehi\StructType\AgeQualifierType
     */
    public function setExtension($extension = null)
    {
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extension)), __LINE__);
        }
        $this->Extension = $extension;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\AgeQualifierType
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
