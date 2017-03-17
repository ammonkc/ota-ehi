<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoverageType StructType
 * @subpackage Structs
 */
class CoverageType extends AbstractStructBase
{
    /**
     * The Details
     * @var mixed
     */
    public $Details;
    /**
     * Constructor method for CoverageType
     * @uses CoverageType::setDetails()
     * @param mixed $details
     */
    public function __construct($details = null)
    {
        $this
            ->setDetails($details);
    }
    /**
     * Get Details value
     * @return mixed|null
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @param mixed $details
     * @return \Ammonkc\Otaehi\StructType\CoverageType
     */
    public function setDetails($details = null)
    {
        $this->Details = $details;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CoverageType
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
