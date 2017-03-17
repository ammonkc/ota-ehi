<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationSchedule StructType
 * @subpackage Structs
 */
class OperationSchedule extends AbstractStructBase
{
    /**
     * The Name
     * @var UNKNOWN
     */
    public $Name;
    /**
     * Constructor method for OperationSchedule
     * @uses OperationSchedule::setName()
     * @param UNKNOWN $name
     */
    public function __construct(UNKNOWN $name = null)
    {
        $this
            ->setName($name);
    }
    /**
     * Get Name value
     * @return UNKNOWN|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param UNKNOWN $name
     * @return \ammonkc\otaehi\StructType\OperationSchedule
     */
    public function setName(UNKNOWN $name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OperationSchedule
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
