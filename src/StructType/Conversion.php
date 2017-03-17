<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Conversion StructType
 * @subpackage Structs
 */
class Conversion extends AbstractStructBase
{
    /**
     * The Ratio
     * @var int
     */
    public $Ratio;
    /**
     * Constructor method for Conversion
     * @uses Conversion::setRatio()
     * @param int $ratio
     */
    public function __construct($ratio = null)
    {
        $this
            ->setRatio($ratio);
    }
    /**
     * Get Ratio value
     * @return int|null
     */
    public function getRatio()
    {
        return $this->Ratio;
    }
    /**
     * Set Ratio value
     * @param int $ratio
     * @return \Ammonkc\Otaehi\StructType\Conversion
     */
    public function setRatio($ratio = null)
    {
        // validation for constraint: int
        if (!is_null($ratio) && !is_numeric($ratio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ratio)), __LINE__);
        }
        $this->Ratio = $ratio;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Conversion
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
