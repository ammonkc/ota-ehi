<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateGuarantee StructType
 * @subpackage Structs
 */
class RateGuarantee extends AbstractStructBase
{
    /**
     * The Description
     * @var mixed
     */
    public $Description;
    /**
     * Constructor method for RateGuarantee
     * @uses RateGuarantee::setDescription()
     * @param mixed $description
     */
    public function __construct($description = null)
    {
        $this
            ->setDescription($description);
    }
    /**
     * Get Description value
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param mixed $description
     * @return \Ammonkc\Otaehi\StructType\RateGuarantee
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RateGuarantee
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
